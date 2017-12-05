#Laravel 微信通知系统
第一个自己写的扩展包，参考了其他包，搞出来的，不过代码都是自己写的，嗯。。

##基本要求：
php>=7.0

##用法：
>composer require reprover/wechat-channel

然后
>php artisan make:notification OrderCreated

然后
在其中新建方法 
>public function toWechat($notifiable){
    return (new WechatMessage(模板id,[
    "key"=>"value",
    "key2"=>"value2"
    ]),跳转地址);
}

在原有的via()方法中加上
>WechatChannel::class

搞定～
跟其他通知一样使用就好

没有测试 以后再加 

##感谢
>overtrue/laravel-wechat（这么完美的微信框架，做微信都离不开吧）
以及各种laravel-notification-channels的代码参考学习

欢迎大家提出意见，虽然比较简单吧。。基本没什么东西