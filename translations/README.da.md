![Laravel blog med Filament admin panel](../docs/social-preview-en.png)

# Laravel blog med Filament admin panel

Dette er [Laravel](https://laravel.com) blog starter kit-projekt med [Filament](https://filamentphp.com) admin panel.

Målet med dette lager er at fremvise god [Laravel](https://laravel.com) udviklingspraksis med en simpel applikation.

## Funktioner

- 📚 Oprettelse og redigering af indlæg
- 🥑 Kategorier
- :fire: Populære indlæg
- :hatched_chick: Admin panel bygget på [Filament](https://filamentphp.com)

## Anmoder om funktioner

Åbn en [ny udgave](https://github.com/gomzyakov/laravel-blog/issues/new) for at anmode om en funktion (eller hvis du finder en fejl).

## Hvordan kører man en blog lokalt?

Klon projektet:

``` bash
git klon git@github.com:gomzyakov/laravel-blog.git
```

Jeg tror, du allerede har Docker installeret. Hvis ikke, skal du bare gøre det på [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) eller [Linux](https://docs.docker.com/desktop/install/linux-install/).

Byg `laravel-blog`-billedet med følgende kommando:

``` bash
docker compose build --no-cache
```

>Denne kommando kan tage et par minutter at fuldføre.

Når bygningen er færdig, kan du køre miljøet i baggrundstilstand med:

``` bash
docker komponere op -d
```

Vi kører nu 'composer install' for at installere applikationsafhængighederne:

``` bash
docker compose exec app composer installation
```

Kopier miljøindstillingerne:

``` bash
docker compose exec app cp .env.local .env
```

Indstil krypteringsnøgle med kommandolinjeværktøjet 'håndværker' Laravel:

``` bash
docker compose exec app ./artisan key:generate --ansi
```

Migrer DB og seed falske data:

``` bash
docker compose exec app ./artisan migrate:fresh --seed
```

Og tilføj Filament-administratorbruger:

``` bash
docker compose exec app ./artisan make:filament-user
```

Og åbn http://127.0.0.1:8000 i din yndlingsbrowser. Glad for at bruge Laravel Blog!

## Hvordan kommer man ind i containeren?

Adgang til Docker-containeren:

``` bash
docker exec -ti laravel-blog-app bash
```

## Licens

Dette er open source software licenseret under [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub release](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licens](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)