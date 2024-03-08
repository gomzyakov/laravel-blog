![Blog Laravel s panelom správcu Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Blog Laravel s panelom správcu Filament

Toto je projekt úvodnej súpravy blogu [Laravel](https://laravel.com) s panelom správcu [Filament](https://filamentphp.com).

Cieľom tohto úložiska je ukázať dobré postupy vývoja [Laravel](https://laravel.com) pomocou jednoduchej aplikácie.

## Vlastnosti

- 📚 Vytváranie a úprava príspevkov
- 🥑 Kategórie
- 🔥 Obľúbené príspevky
- 🎉 Panel správcu vytvorený na [Filament](https://filamentphp.com)

## Žiadosť o funkcie

Otvorte [nové číslo](https://github.com/gomzyakov/laravel-blog/issues/new) a požiadajte o funkciu (alebo ak nájdete chybu).

## Ako spustiť blog lokálne?

Naklonujte projekt:

``` bash
git klon git@github.com:gomzyakov/laravel-blog.git
```

Verím, že už máte nainštalovaný Docker. Ak nie, urobte to na [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) alebo [Linux](https://docs.docker.com/desktop/install/linux-install/).

Vytvorte obrázok `laravel-blog` pomocou nasledujúceho príkazu:

``` bash
zostava zostavy docker --no-cache
```

> Dokončenie tohto príkazu môže trvať niekoľko minút.

Po dokončení zostavovania môžete prostredie spustiť v režime na pozadí pomocou:

``` bash
docker skladať -d
```

Teraz spustíme `composer install`, aby sme nainštalovali závislosti aplikácie:

``` bash
inštalácia skladateľa aplikácie docker compose exec
```

Skopírujte nastavenia prostredia:

``` bash
docker compose exec app cp .env.local .env
```

Nastavte šifrovací kľúč pomocou nástroja príkazového riadka `artisan` Laravel:

``` bash
docker compose exec app ./artisan key:generate --ansi
```

Migrujte databázu DB a falošné údaje:

``` bash
docker compose exec app ./artisan migrate:fresh --seed
```

A pridajte správcu Filament:

``` bash
docker compose exec app ./artisan make:filament-user
```

A otvorte http://127.0.0.1:8000 vo svojom obľúbenom prehliadači. Šťastné používanie blogu Laravel!

## Ako sa dostať do kontajnera?

Prístup ku kontajneru Docker:

``` bash
docker exec -ti laravel-blog-app bash
```

## Licencia

Toto je softvér s otvoreným zdrojom licencovaný na základe [licencie MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Vydanie GitHubu](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licencia](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
