![帶有 Filament 管理面板的 Laravel 部落格](../docs/social-preview-en.png)

# Laravel 部落格與 Filament 管理面板

這是 [Laravel](https://laravel.com) 部落格入門套件項目，附有 [Filament](https://filamentphp.com) 管理面板。

這個儲存庫的目標是透過一個簡單的應用程式來展示良好的 [Laravel](https://laravel.com) 開發實踐。

＃＃ 特徵

- 📚 建立和編輯帖子
- 🥑 類別
- :fire: 熱門帖子
- :hatched_chick: 基於 [Filament](https://filamentphp.com) 建構的管理面板

## 請求功能

開啟一個 [新問題](https://github.com/gomzyakov/laravel-blog/issues/new) 來要求功能（或如果您發現錯誤）。

## 如何在本地經營部落格？

克隆項目：

````bash
git 複製 git@github.com:gomzyakov/laravel-blog.git
````

我相信你已經安裝了 Docker。 如果沒有，只需在 [Mac](https://docs.docker.com/desktop/install/mac-install/)、[Windows](https://docs.docker.com/desktop/install/windows - install/) 或[Linux](https://docs.docker.com/desktop/install/linux-install/)。

使用以下命令建立“laravel-blog”映像：

````bash
docker compose build --no-cache
````

>此命令可能需要幾分鐘才能完成。

建置完成後，您可以使用以下命令在背景模式下執行環境：

````bash
docker 組成-d
````

我們現在將運行“composer install”來安裝應用程式依賴項：

````bash
docker compose exec 應用程式作曲家安裝
````

複製環境設定：

````bash
docker compose exec app cp .env.local .env
````

使用“artisan”Laravel 命令列工具設定加密金鑰：

````bash
docker compose exec app ./artisan key:generate --ansi
````

遷移資料庫和種子假資料：

````bash
docker compose exec app ./artisan migrate:fresh --seed
````

並新增 Filament 管理員使用者：

````bash
docker compose exec app ./artisan make:filament-user
````

然後在您喜歡的瀏覽器中開啟 http://127.0.0.1:8000。 祝您使用 Laravel 部落格愉快！

## 如何進入容器內部？

存取Docker容器：

````bash
docker exec -ti laravel-blog-app bash
````

＃＃ 執照

這是根據 [MIT 許可證](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) 授權的開源軟體。


[![GitHub 發表](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![許可證](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ Laravel 部落格）