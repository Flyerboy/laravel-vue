# 使用 Laravel + Vue 开发单页引用

开发环境:

| 软件包 | 版本 |
| --- | --- |
| Laravel | 5.5 |
| Vue | > 2.5.7 |
| axios | > 0.17 |
| vue-router | > 3.0.1 |
| vuex | > 3.0.1 |


> 如果你使用的是 laravel5.3 , 请切换到 laravel5.3 分支

具体开发细节参考文章 [Laravel + Vue 开发单页应用](https://flyerboy.github.io/2018/03/22/laravel_vue_v2/)


# 安装
首先从 `github` 克隆项目到本地
```
git clone https://github.com/Flyerboy/laravel-vue laravel-vue
```

安装 Laravel 开发依赖
```
composer install
```

安装前端依赖
```
npm install
```

创建数据表
```
php artisan migrate
```

填充测试数据
```
首先要创建数据库，根据自己的配置创建
php artisan db:seed
```

# 运行 
```
npm run prod
php artisan serve // 开启 web 服务
打开浏览器访问 http://localhost:8000 查看效果
```

# 开发模式
```
npm run watch
php artisan serve // 开启 web 服务
打开浏览器访问 http://localhost:3000 查看效果
```