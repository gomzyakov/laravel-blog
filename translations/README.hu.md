![Laravel blog Filament adminisztrációs panellel](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel blog Filament adminisztrációs panellel

Ez a [Laravel](https://laravel.com) blog kezdőcsomag projektje a [Filament](https://filamentphp.com) adminisztrációs panellel.

Ennek az adattárnak az a célja, hogy bemutassa a jó [Laravel](https://laravel.com) fejlesztési gyakorlatokat egy egyszerű alkalmazással.

## Jellemzők

- 📚 bejegyzések létrehozása és szerkesztése
- 🥑 kategóriák
- 🔥 Népszerű bejegyzések
- 🎉 [Filament]-re épülő adminisztrációs panel (https://filamentphp.com)

## Funkciók kérése

Nyisson meg egy [új számot](https://github.com/gomzyakov/laravel-blog/issues/new) funkció kéréséhez (vagy ha hibát talál).

## Hogyan lehet helyi blogot futtatni?

A projekt klónozása:

``` bash
git klón git@github.com:gomzyakov/laravel-blog.git
```

Azt hiszem, már telepítve van a Docker. Ha nem, csak tegye meg [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) -install/) vagy [Linux](https://docs.docker.com/desktop/install/linux-install/).

Készítse el a `laravel-blog` képet a következő paranccsal:

``` bash
docker compose build --no-cache
```

>Ennek a parancsnak a végrehajtása eltarthat néhány percig.

Ha az összeállítás befejeződött, a környezetet háttér módban futtathatja a következőkkel:

``` bash
dokkoló összeállít -d
```

Most a "composer install" parancsot fogjuk futtatni az alkalmazásfüggőségek telepítéséhez:

``` bash
docker compose exec alkalmazás zeneszerző telepítése
```

Másolja a környezeti beállításokat:

``` bash
docker compose exec app cp .env.local .env
```

Állítsa be a titkosítási kulcsot az "artisan" Laravel parancssori eszközzel:

``` bash
docker Compose exec app ./artisan key:generate --ansi
```

DB és hamis adatok áttelepítése:

``` bash
docker Compose exec app ./artisan migrate:fresh --seed
```

És adjunk hozzá Filament admin felhasználót:

``` bash
docker compose exec app ./artisan make:filament-user
```

És nyissa meg a http://127.0.0.1:8000 címet kedvenc böngészőjében. Boldog Laravel Blog használatát!

## Hogyan lehet bejutni a konténerbe?

Hozzáférés a Docker konténerhez:

``` bash
docker exec -ti laravel-blog-app bash
```

## Licenc

Ez egy nyílt forráskódú szoftver, amelynek licence a [MIT-licenc] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub kiadás](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licenc](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
