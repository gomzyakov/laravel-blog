![Laravel-blog met Filament-administrasiepaneel](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel-blog met Filament-administrasiepaneel

Dit is [Laravel](https://laravel.com) blogbeginstelprojek met [Filament](https://filamentphp.com) adminpaneel.

Die doel van hierdie bewaarplek is om goeie [Laravel](https://laravel.com) ontwikkelingspraktyke met 'n eenvoudige toepassing ten toon te stel.

## Kenmerke

- 📚 Skep en redigeer plasings
- 🥑 Kategorieë
- 🔥 Gewilde plasings
- 🎉 Adminpaneel gebou op [Filament](https://filamentphp.com)

## Versoek kenmerke

Maak 'n [nuwe uitgawe](https://github.com/gomzyakov/laravel-blog/issues/new) oop om 'n kenmerk aan te vra (of as jy 'n fout vind).

## Hoe om 'n blog plaaslik te bestuur?

Kloon die projek:

``` bash
git kloon git@github.com:gomzyakov/laravel-blog.git
```

Ek glo jy het reeds Docker geïnstalleer. Indien nie, doen dit net op [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) of [Linux](https://docs.docker.com/desktop/install/linux-install/).

Bou die `laravel-blog`-prent met die volgende opdrag:

``` bash
docker komponeer bou --geen-kas
```

>Hierdie opdrag kan 'n paar minute neem om te voltooi.

Wanneer die bou voltooi is, kan jy die omgewing in agtergrondmodus laat loop met:

``` bash
docker opstel -d
```

Ons sal nou `composer install` laat loop om die toepassingsafhanklikhede te installeer:

``` bash
docker compose exec app composer installeer
```

Kopieer die omgewingsinstellings:

``` bash
docker compose exec app cp .env.local .env
```

Stel enkripsiesleutel in met die `artisan` Laravel-opdragreëlnutsding:

``` bash
docker compose exec app ./artisan key:generate --ansi
```

Migreer DB en saad vals data:

``` bash
docker compose exec app ./artisan migrate:fresh --seed
```

En voeg Filament admin gebruiker by:

``` bash
docker compose exec app ./artisan make:filament-user
```

En maak http://127.0.0.1:8000 oop in jou gunsteling blaaier. Lekker om Laravel Blog te gebruik!

## Hoe om in die houer te kom?

Toegang tot die Docker-houer:

``` bash
docker exec -ti laravel-blog-app bash
```

## Lisensie

Dit is oopbronsagteware gelisensieer onder die [MIT-lisensie](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub-vrystelling](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![lisensie](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
