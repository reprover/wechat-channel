<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/1
 * Time: 18:02
 */

namespace Reprover\WechatChannel;


use Illuminate\Notifications\Notification;

class WechatChannel
{

    private $wechat;

    public function __construct()
    {
        $this->wechat = app("wechat");
    }

    /**
     * @param mixed $notifiable
     * @param Notification $notification
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toWechat($notifiable);
        $openid = $notifiable->routeNotificationForWechat();
        $this->wechat->notice->uses($message->templateId)->withUrl($message->url)->andReceiver($openid)->withData($message->data)->send();
    }

}