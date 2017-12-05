<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/4
 * Time: 17:14
 */

namespace Reprover\WechatChannel;


use Illuminate\Support\ServiceProvider;

class WechatServiceProvider extends ServiceProvider
{

    public function register(){
        $this->app->singleton('WechatChannel',function($app){
            return new WechatChannel();
        });
    }

}