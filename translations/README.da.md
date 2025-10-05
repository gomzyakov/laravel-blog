>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Denne fil skal opdateres for at matche [engelsk](/README.md) README-filen.

![Laravel blog](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel blog med Filament admin panel

Dette er [Laravel](https://laravel.com) blog starter kit-projekt med [Filament](https://filamentphp.com) admin panel.

Målet med dette lager er at fremvise god [Laravel](https://laravel.com) udviklingspraksis med en simpel applikation.

## Funktioner

- 📚 Oprettelse og redigering af indlæg
- 🥑 Kategorier
- 🔥 Populære indlæg
- 🎉 Admin panel bygget på [Filament](https://filamentphp.com)

## Anmoder om funktioner

Åbn en [ny udgave](https://github.com/gomzyakov/laravel-blog/issues/new) for at anmode om en funktion (eller hvis du finder en fejl).

## Hvordan kører man en blog lokalt?

Klon projektet:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Jeg tror, du allerede har Docker installeret. Hvis ikke, skal du bare gøre det på [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) eller [Linux](https://docs.docker.com/desktop/install/linux-install/).

Byg `laravel-blog`-billedet med følgende kommando:

``` bash
docker compose build --no-cache
```

>Denne kommando kan tage et par minutter at fuldføre.

Når bygningen er færdig, kan du køre miljøet i baggrundstilstand med:

``` bash
docker compose up -d
```

Vi kører nu '`composer install` for at installere applikationsafhængighederne:

``` bash
docker compose exec app composer install
```

Kopier miljøindstillingerne:

``` bash
docker compose exec app cp .env.local .env
```

Indstil krypteringsnøgle med kommandolinjeværktøjet `artisan` Laravel:

``` bash
docker compose exec app ./artisan key:generate --ansi
```

Migrer DB og seed falske data:

``` bash
docker compose exec app ./artisan migrate:fresh --seed
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
