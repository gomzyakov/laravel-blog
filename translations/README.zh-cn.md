![带有 Filament 管理面板的 Laravel 博客](../docs/social-preview-en.png)

# Laravel 博客与 Filament 管理面板

这是 [Laravel](https://laravel.com) 博客入门套件项目，带有 [Filament](https://filamentphp.com) 管理面板。

该存储库的目标是通过一个简单的应用程序展示良好的 [Laravel](https://laravel.com) 开发实践。

＃＃ 特征

- 📚 创建和编辑帖子
- 🥑 类别
- :fire: 热门帖子
- :hatched_chick: 基于 [Filament](https://filamentphp.com) 构建的管理面板

## 请求功能

打开一个 [新问题](https://github.com/gomzyakov/laravel-blog/issues/new) 来请求功能（或者如果您发现错误）。

## 如何在本地运行博客？

克隆项目：

````bash
git 克隆 git@github.com:gomzyakov/laravel-blog.git
````

我相信你已经安装了 Docker。 如果没有，只需在 [Mac](https://docs.docker.com/desktop/install/mac-install/)、[Windows](https://docs.docker.com/desktop/install/windows -install/) 或 [Linux](https://docs.docker.com/desktop/install/linux-install/)。

使用以下命令构建“laravel-blog”图像：

````bash
docker compose build --no-cache
````

>此命令可能需要几分钟才能完成。

构建完成后，您可以使用以下命令在后台模式下运行环境：

````bash
docker 组成-d
````

我们现在将运行“composer install”来安装应用程序依赖项：

````bash
docker compose exec 应用程序作曲家安装
````

复制环境设置：

````bash
docker compose exec app cp .env.local .env
````

使用“artisan”Laravel 命令行工具设置加密密钥：

````bash
docker compose exec app ./artisan key:generate --ansi
````

迁移数据库和种子假数据：

````bash
docker compose exec app ./artisan migrate:fresh --seed
````

并添加 Filament 管理员用户：

````bash
docker compose exec app ./artisan make:filament-user
````

然后在您喜欢的浏览器中打开 http://127.0.0.1:8000。 祝您使用 Laravel 博客愉快！

## 如何进入容器内部？

访问Docker容器：

````bash
docker exec -ti laravel-blog-app bash
````

＃＃ 执照

这是根据 [MIT 许可证](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) 许可的开源软件。


[![GitHub 发布](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![许可证](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ Laravel 博客）