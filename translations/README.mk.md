![Блог на Ларавел со административен панел на Филамент](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Блог на Ларавел со административен панел Филамент

Ова е проект за стартер комплет за блог [Laravel](https://laravel.com) со административен панел [Filament](https://filamentphp.com).

Целта на ова складиште е да ги прикаже добрите практики за развој на [Laravel](https://laravel.com) со едноставна апликација.

## Карактеристики

- 📚 Создавање и уредување објави
- 🥑 Категории
- 🔥 Популарни објави
- 🎉 Административен панел изграден на [Filament](https://filamentphp.com)

## Барам карактеристики

Отворете [нов број] (https://github.com/gomzyakov/laravel-blog/issues/new) за да побарате функција (или ако најдете грешка).

## Како да водите блог локално?

Клонирајте го проектот:

```баш
git клон git@github.com:gomzyakov/laravel-blog.git
```

Верувам дека веќе го имате инсталирано Docker. Ако не, само направете го тоа на [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) или [Linux] (https://docs.docker.com/desktop/install/linux-install/).

Изградете ја сликата на `laravel-blog` со следнава команда:

```баш
docker compose build --no-cache
```

> Оваа команда може да потрае неколку минути за да се заврши.

Кога ќе заврши изградбата, можете да ја извршите околината во режим на позадина со:

```баш
докер состави до -г
```

Сега ќе извршиме „инсталација на композитор“ за да ги инсталираме зависностите на апликацијата:

```баш
docker compose exec app composer install
```

Копирајте ги поставките за околината:

```баш
docker compose exec app cp .env.local .env
```

Поставете го клучот за шифрирање со алатката за командна линија „занаетчија“ Ларавел:

```баш
docker compose exec апликација ./artisan key:generate --ansi
```

Мигрирајте DB и поставете лажни податоци:

```баш
docker compose exec app ./artisan migrate:fresh --seed
```

И додадете корисник на администратор на Filament:

```баш
docker compose exec app ./artisan make:filament-user
```

И отворете http://127.0.0.1:8000 во вашиот омилен прелистувач. Среќно го користите блогот Ларавел!

## Како да влезете во садот?

Пристап до контејнерот Docker:

```баш
docker exec -ti laravel-blog-app bash
```

## Лиценца

Ова е софтвер со отворен код лиценциран под [MIT лиценца](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![издание на GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![лиценца](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ ларавел-блог)
