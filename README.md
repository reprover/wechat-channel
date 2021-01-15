# Laravel 微信通知系统
适用于 `Laravel` 的微信通知扩展

## 基本要求：
php>=7.0

## 用法：
```bash
composer require reprover/wechat-channel

php artisan make:notification OrderCreated
```

然后
在其中新建方法 
```php
public function toWechat($notifiable){
   return (new WechatMessage(模板id,[
   "key"=>"value",
   "key2"=>"value2"
   ]), 跳转地址);
}
```

在原有的 `via()` 方法中加上

```php
WechatChannel::class
```


## 感谢
> overtrue/laravel-wechat（这么完美的微信框架，做微信都离不开吧）
> 
> 以及各种laravel-notification-channels的代码参考学习
