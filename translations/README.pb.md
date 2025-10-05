>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[ਅੰਗਰੇਜ਼ੀ](/README.md) README ਫ਼ਾਈਲ ਨਾਲ ਮੇਲ ਕਰਨ ਲਈ ਇਸ ਫ਼ਾਈਲ ਨੂੰ ਅੱਪਡੇਟ ਕਰਨ ਦੀ ਲੋੜ ਹੈ।

![ਫਿਲਾਮੈਂਟ ਐਡਮਿਨ ਪੈਨਲ ਵਾਲਾ ਲਾਰਵੇਲ ਬਲੌਗ](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# ਫਿਲਾਮੈਂਟ ਐਡਮਿਨ ਪੈਨਲ ਦੇ ਨਾਲ # ਲਾਰਵੇਲ ਬਲੌਗ

ਇਹ [Filament](https://filamentphp.com) ਐਡਮਿਨ ਪੈਨਲ ਵਾਲਾ [Laravel](https://laravel.com) ਬਲੌਗ ਸਟਾਰਟਰ ਕਿੱਟ ਪ੍ਰੋਜੈਕਟ ਹੈ।

ਇਸ ਰਿਪੋਜ਼ਟਰੀ ਦਾ ਟੀਚਾ ਇੱਕ ਸਧਾਰਨ ਐਪਲੀਕੇਸ਼ਨ ਨਾਲ ਚੰਗੇ [Laravel](https://laravel.com) ਵਿਕਾਸ ਅਭਿਆਸਾਂ ਦਾ ਪ੍ਰਦਰਸ਼ਨ ਕਰਨਾ ਹੈ।

## ਵਿਸ਼ੇਸ਼ਤਾਵਾਂ

- 📚 ਪੋਸਟਾਂ ਬਣਾਉਣਾ ਅਤੇ ਸੰਪਾਦਿਤ ਕਰਨਾ
- 🥑 ਸ਼੍ਰੇਣੀਆਂ
- :ਫਾਇਰ: ਪ੍ਰਸਿੱਧ ਪੋਸਟਾਂ
- 🎉 [ਫਿਲਾਮੈਂਟ](https://filamentphp.com) 'ਤੇ ਬਣਿਆ ਐਡਮਿਨ ਪੈਨਲ

## ਵਿਸ਼ੇਸ਼ਤਾਵਾਂ ਦੀ ਬੇਨਤੀ ਕਰਨਾ

ਕਿਸੇ ਵਿਸ਼ੇਸ਼ਤਾ ਦੀ ਬੇਨਤੀ ਕਰਨ ਲਈ ਇੱਕ [ਨਵਾਂ ਮੁੱਦਾ](https://github.com/gomzyakov/laravel-blog/issues/new) ਖੋਲ੍ਹੋ (ਜਾਂ ਜੇਕਰ ਤੁਹਾਨੂੰ ਕੋਈ ਬੱਗ ਮਿਲਦਾ ਹੈ)।

## ਬਲੌਗ ਨੂੰ ਸਥਾਨਕ ਤੌਰ 'ਤੇ ਕਿਵੇਂ ਚਲਾਉਣਾ ਹੈ?

ਪ੍ਰੋਜੈਕਟ ਨੂੰ ਕਲੋਨ ਕਰੋ:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

ਮੇਰਾ ਮੰਨਣਾ ਹੈ ਕਿ ਤੁਹਾਡੇ ਕੋਲ ਪਹਿਲਾਂ ਹੀ ਡੌਕਰ ਸਥਾਪਤ ਹੈ. ਜੇ ਨਹੀਂ, ਤਾਂ ਇਸਨੂੰ [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) 'ਤੇ ਕਰੋ -ਇੰਸਟਾਲ/) ਜਾਂ [ਲੀਨਕਸ](https://docs.docker.com/desktop/install/linux-install/)।

ਹੇਠ ਦਿੱਤੀ ਕਮਾਂਡ ਨਾਲ `laravel-blog` ਚਿੱਤਰ ਬਣਾਓ:

```bash
docker compose build --no-cache
```

> ਇਸ ਕਮਾਂਡ ਨੂੰ ਪੂਰਾ ਹੋਣ ਵਿੱਚ ਕੁਝ ਮਿੰਟ ਲੱਗ ਸਕਦੇ ਹਨ।

ਜਦੋਂ ਬਿਲਡ ਪੂਰਾ ਹੋ ਜਾਂਦਾ ਹੈ, ਤੁਸੀਂ ਵਾਤਾਵਰਣ ਨੂੰ ਬੈਕਗ੍ਰਾਉਂਡ ਮੋਡ ਵਿੱਚ ਇਸ ਨਾਲ ਚਲਾ ਸਕਦੇ ਹੋ:

```bash
docker compose up -d
```

ਅਸੀਂ ਹੁਣ ਐਪਲੀਕੇਸ਼ਨ ਨਿਰਭਰਤਾ ਨੂੰ ਸਥਾਪਤ ਕਰਨ ਲਈ `composer install` ਚਲਾਵਾਂਗੇ:

```bash
docker compose exec app composer install
```

ਵਾਤਾਵਰਣ ਸੈਟਿੰਗਾਂ ਦੀ ਨਕਲ ਕਰੋ:

```bash
docker compose exec app cp .env.local .env
```

`artisan` Laravel ਕਮਾਂਡ-ਲਾਈਨ ਟੂਲ ਨਾਲ ਏਨਕ੍ਰਿਪਸ਼ਨ ਕੁੰਜੀ ਸੈਟ ਕਰੋ:

```bash
docker compose exec app ./artisan key:generate --ansi
```

DB ਅਤੇ ਬੀਜ ਜਾਅਲੀ ਡੇਟਾ ਨੂੰ ਮਾਈਗਰੇਟ ਕਰੋ:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

ਅਤੇ ਫਿਲਾਮੈਂਟ ਐਡਮਿਨ ਉਪਭੋਗਤਾ ਸ਼ਾਮਲ ਕਰੋ:

``` bash
docker compose exec app ./artisan make:filament-user
```

ਅਤੇ ਆਪਣੇ ਮਨਪਸੰਦ ਬ੍ਰਾਊਜ਼ਰ ਵਿੱਚ http://127.0.0.1:8000 ਖੋਲ੍ਹੋ। Laravel ਬਲੌਗ ਦੀ ਵਰਤੋਂ ਕਰਕੇ ਖੁਸ਼ੀ!

## ਡੱਬੇ ਦੇ ਅੰਦਰ ਕਿਵੇਂ ਜਾਣਾ ਹੈ?

ਡੌਕਰ ਕੰਟੇਨਰ ਤੱਕ ਪਹੁੰਚ:

```bash
docker exec -ti laravel-blog-app bash
```

## ਲਾਇਸੰਸ

ਇਹ [MIT ਲਾਇਸੈਂਸ](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) ਦੇ ਅਧੀਨ ਲਾਇਸੰਸਸ਼ੁਦਾ ਓਪਨ-ਸੋਰਸਡ ਸੌਫਟਵੇਅਰ ਹੈ।


[![GitHub ਰਿਲੀਜ਼](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![ਲਾਈਸੈਂਸ](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
