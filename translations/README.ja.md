![Filament 管理パネルを備えた Laravel ブログ](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Filament 管理パネルを備えた Laravel ブログ

これは、[Filament](https://filamentphp.com) 管理パネルを備えた [Laravel](https://laravel.com) ブログ スターター キット プロジェクトです。

このリポジトリの目標は、単純なアプリケーションを使用した優れた [Laravel](https://laravel.com) 開発実践を紹介することです。

＃＃ 特徴

- 📚 投稿の作成と編集
- 🥑 カテゴリ
- 🔥 人気の投稿
- 🎉 [Filament](https://filamentphp.com) 上に構築された管理パネル

## 機能のリクエスト

[新しい問題](https://github.com/gomzyakov/laravel-blog/issues/new) を開いて機能をリクエストします (またはバグを見つけた場合)。

## ブログをローカルで実行するにはどうすればよいですか?

プロジェクトのクローンを作成します。

「」バッシュ
git clone git@github.com:gomzyakov/laravel-blog.git
「」

すでに Docker がインストールされていると思います。 そうでない場合は、[Mac](https://docs.docker.com/desktop/install/mac-install/)、[Windows](https://docs.docker.com/desktop/install/windows)で実行してください。 -install/) または [Linux](https://docs.docker.com/desktop/install/linux-install/)。

次のコマンドを使用して「laravel-blog」イメージをビルドします。

「」バッシュ
docker compose build --no-cache
「」

>このコマンドが完了するまでに数分かかる場合があります。

ビルドが完了したら、次のコマンドを使用して環境をバックグラウンド モードで実行できます。

「」バッシュ
ドッカー構成 -d
「」

ここで「composer install」を実行して、アプリケーションの依存関係をインストールします。

「」バッシュ
docker compose exec アプリコンポーザーのインストール
「」

環境設定をコピーします。

「」バッシュ
docker compose exec app cp .env.local .env
「」

「artisan」Laravel コマンドライン ツールを使用して暗号化キーを設定します。

「」バッシュ
docker compose exec app ./artisan key:generate --ansi
「」

DB を移行して偽のデータをシードする:

「」バッシュ
docker compose exec app ./artisan 移行:fresh --seed
「」

そして、Filament 管理者ユーザーを追加します。

「」バッシュ
docker compose exec app ./artisan make:filament-user
「」

そして、お気に入りのブラウザで http://127.0.0.1:8000 を開きます。 Laravel ブログをぜひご利用ください。

## コンテナ内に入るにはどうすればよいですか?

Docker コンテナへのアクセス:

「」バッシュ
docker exec -ti laravel-blog-app bash
「」

## ライセンス

これは、[MIT ライセンス](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) に基づいてライセンス供与されたオープンソース ソフトウェアです。


[![GitHub リリース](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![ライセンス](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravelブログ)
