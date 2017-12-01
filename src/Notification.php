<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/1
 * Time: 17:35
 */

namespace Reprover\LaravelNotification;


use Illuminate\Support\Facades\Facade;

class Notification extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'laravel-notification';
    }

}