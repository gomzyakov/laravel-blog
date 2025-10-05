>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
Fáìlì yìí nílò àtúnjúwe kí ó lè bá fáìlì [èdè Gẹ̀ẹ́sì](/README.md) README mu.

![Bulọọgi Laravel pẹlu igbimọ abojuto Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Bulọọgi Laravel pẹlu nronu abojuto Filament

Eyi ni [Laravel](https://laravel.com) ohun elo ohun elo bulọọgi bulọọgi pẹlu igbimọ abojuto [Filament](https://filamentphp.com).

Ibi-afẹde ti ibi ipamọ yii ni lati ṣafihan awọn iṣe idagbasoke [Laravel] (https://laravel.com) ti o dara pẹlu ohun elo ti o rọrun.

## Awọn ẹya ara ẹrọ

- 📚 Ṣiṣẹda ati ṣiṣatunṣe awọn ifiweranṣẹ
- 🥑 Awọn ẹka
- 🔥 Awọn ifiweranṣẹ olokiki
- 🎉 Igbimọ abojuto ti a ṣe lori [Filament] (https://filamentphp.com)

## Awọn ẹya ti o beere

Ṣii [itẹjade tuntun] (https://github.com/gomzyakov/laravel-blog/issues/new) lati beere ẹya kan (tabi ti o ba ri kokoro kan).

## Bawo ni lati ṣiṣẹ bulọọgi ni agbegbe?

Di iṣẹ akanṣe naa:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Mo gbagbọ pe o ti fi Docker sori ẹrọ tẹlẹ. Ti kii ba ṣe bẹ, kan ṣe lori [Mac] (https://docs.docker.com/desktop/install/mac-install/), [Windows] (https://docs.docker.com/desktop/install/windows). -install/) tabi [Linux] (https://docs.docker.com/desktop/install/linux-install/).

Kọ aworan `laravel-blog` pẹlu aṣẹ atẹle:

```bash
docker compose build --no-cache
```

> Aṣẹ yii le gba iṣẹju diẹ lati pari.

Nigbati kikọ ba ti pari, o le ṣiṣẹ agbegbe ni ipo abẹlẹ pẹlu:

```bash
docker compose up -d
```

A yoo ṣiṣẹ bayi `composer install` lati fi awọn igbẹkẹle ohun elo sori ẹrọ:

```bash
docker compose exec app composer install
```

Da awọn eto ayika:

```bash
docker compose exec app cp .env.local .env
```

Ṣeto bọtini fifi ẹnọ kọ nkan pẹlu ohun elo laini aṣẹ `artisan` Laravel:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Gbe DB pada & data iro irugbin:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

Ati ṣafikun olumulo abojuto Filament:

```bash
docker compose exec app ./artisan make:filament-user
```

Ati ṣii http://127.0.0.1:8000 ninu ẹrọ aṣawakiri ayanfẹ rẹ. Idunnu lilo Laravel Blog!

## Bawo ni lati wọ inu apoti naa?

Wiwọle si apoti Docker:

```bash
docker exec -ti laravel-blog-app bash
```
## Iwe-aṣẹ

Eyi jẹ sọfitiwia orisun-ìmọ ti a fun ni iwe-aṣẹ labẹ Iwe-aṣẹ MIT (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Itusilẹ GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![iwe-aṣẹ](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
