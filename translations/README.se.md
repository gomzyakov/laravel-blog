![Laravel-blogg med Filament-adminpanel](../docs/social-preview-en.png)

# Laravel-blogg med Filament-adminpanel

Det här är [Laravel](https://laravel.com) bloggstartpaketprojekt med [Filament](https://filamentphp.com) adminpanel.

Målet med det här arkivet är att visa upp bra [Laravel](https://laravel.com) utvecklingsmetoder med en enkel applikation.

## Funktioner

- 📚 Skapa och redigera inlägg
- 🥑 Kategorier
- :fire: Populära inlägg
- :hatched_chick: Adminpanel byggd på [Filament](https://filamentphp.com)

## Begär funktioner

Öppna ett [nytt nummer](https://github.com/gomzyakov/laravel-blog/issues/new) för att begära en funktion (eller om du hittar en bugg).

## Hur driver man en blogg lokalt?

Klona projektet:

``` bash
git klon git@github.com:gomzyakov/laravel-blog.git
```

Jag tror att du redan har Docker installerat. Om inte, gör det bara på [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) eller [Linux](https://docs.docker.com/desktop/install/linux-install/).

Bygg `laravel-blogg`-bilden med följande kommando:

``` bash
docker compose build --no-cache
```

>Det här kommandot kan ta några minuter att slutföra.

När bygget är klart kan du köra miljön i bakgrundsläge med:

``` bash
docker komponera upp -d
```

Vi kommer nu att köra `composer install` för att installera programberoendena:

``` bash
docker compose exec app composer installation
```

Kopiera miljöinställningarna:

``` bash
docker compose exec app cp .env.local .env
```

Ställ in krypteringsnyckel med kommandoradsverktyget "hantverkare" Laravel:

``` bash
docker compose exec app ./artisan key:generate --ansi
```

Migrera DB och seed falska data:

``` bash
docker compose exec app ./artisan migrate:fresh --seed
```

Och lägg till Filament admin användare:

``` bash
docker compose exec app ./artisan make:filament-user
```

Och öppna http://127.0.0.1:8000 i din favoritwebbläsare. Glad att använda Laravel Blog!

## Hur tar man sig in i behållaren?

Tillgång till Docker-behållaren:

``` bash
docker exec -ti laravel-blogg-app bash
```

## Licens

Detta är öppen källkod licensierad under [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub release](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licens](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blogg)