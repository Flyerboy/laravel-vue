# 使用 Laravel + Vue 开发单页引用

开发环境:

| 软件包 | 版本 |
| --- | --- |
| Laravel | 5.3 |
| Vue | >2.0 |
| vue-resource | > 1.0 |
| vue-router | > 2.0 |
| vuex | > 2.0 |

具体开发细节参考文章 [Laravel + Vue 开发单页应用](https://flyerboy.github.io/2016/12/23/laravel_vue/)


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


填充测试数据
```
首先要创建数据库，根据自己的配置创建
php artisan db:seed
```

# 运行 
```
gulp  // 打包前端资源
php artisan  // 开启 web 服务
```

打开浏览器访问 http://localhost:8000 查看效果

