<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/5
 * Time: 16:31
 */

namespace Reprover\WechatChannel;


class Facade extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return 'WechatChannel';
    }

}