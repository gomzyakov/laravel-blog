![Laravel blog tare da kwamitin gudanarwa na Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel blog tare da kwamitin gudanarwa na Filament

Wannan shine [Laravel](https://laravel.com) aikin kayan aikin farawa tare da [Filament](https://filamentphp.com) kwamitin gudanarwa.

Manufar wannan ma'ajiyar ita ce nuna kyawawan ayyukan ci gaba [Laravel](https://laravel.com) tare da aikace-aikace mai sauƙi.

## Fasali

- 📚 Ƙirƙiri da gyara posts
- 🥑 Categories
- 🔥 Shahararrun posts
- 🎉 Admin panel wanda aka gina akan [Filament](https://filamentphp.com)

## Neman fasali

Bude [sabon fitowar](https://github.com/gomzyakov/laravel-blog/issues/new) don neman fasalin (ko idan kun sami kwaro).

## Yadda ake gudanar da blog a gida?

Rufe aikin:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Na yi imani kun riga kun shigar da Docker. Idan ba haka ba, kawai yi shi akan [Mac] (https://docs.docker.com/desktop/install/mac-install/), [Windows] (https://docs.docker.com/desktop/install/windows). -install/) ko [Linux] (https://docs.docker.com/desktop/install/linux-install/).

Gina hoton 'laravel-blog' tare da umarni mai zuwa:

``bash
docker compose build --no-cache
```

>Wannan umarni na iya ɗaukar ƴan mintuna kafin a kammala.

Lokacin da aka gama ginin, zaku iya tafiyar da yanayin a yanayin baya tare da:

``bash
docker shirya up -d
```

Yanzu za mu gudanar da 'installer composer' don shigar da abubuwan da suka dogara da aikace-aikacen:

``bash
docker compose exec app composer install
```

Kwafi saitunan muhalli:

``bash
docker compose exec app cp .env.local .env
```

Saita maɓallin ɓoyewa tare da kayan aikin layin umarni na 'artisan' Laravel:

``bash
docker compose exec app ./artisan key:generate --ansi
```

Ƙaura DB & bayanan karya:

``bash
docker compose exec app ./artisan ƙaura: sabo --seed
```

Kuma ƙara mai amfani da Filament:

``bash
docker compose exec app ./artisan make:filament-user
```

Kuma bude http://127.0.0.1:8000 a cikin burauzar da kuka fi so. Farin ciki ta amfani da Laravel Blog!

## Yadda ake shiga cikin akwati?

Samun dama ga kwandon Docker:

``bash
docker exec -ti laravel-blog-app bash
```

## Lasisi

Wannan software ce mai buɗaɗɗen tushe mai lasisi ƙarƙashin [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Sakin GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![lasisi](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
