>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Denne filen må oppdateres for å matche [engelsk](/README.md) README-filen.

![laravel-blogg med Filament-administrasjonspanel](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# laravel-blogg med Filament-administrasjonspanel

Dette er [Laravel](https://laravel.com) bloggstartpakkeprosjekt med [Filament](https://filamentphp.com) adminpanel.

Målet med dette depotet er å vise frem god [Laravel](https://laravel.com) utviklingspraksis med en enkel applikasjon.

## Egenskaper

- 📚 Opprette og redigere innlegg
- 🥑 Kategorier
- 🔥 Populære innlegg
- 🎉 Administrasjonspanel bygget på [Filament](https://filamentphp.com)

## Ber om funksjoner

Åpne en [ny utgave](https://github.com/gomzyakov/laravel-blog/issues/new) for å be om en funksjon (eller hvis du finner en feil).

## Hvordan drive blogg lokalt?

Klon prosjektet:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Jeg tror du allerede har Docker installert. Hvis ikke, bare gjør det på [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) eller [Linux](https://docs.docker.com/desktop/install/linux-install/).

Bygg `laravel-blogg`-bildet med følgende kommando:

``` bash
docker compose build --no-cache
```

>Denne kommandoen kan ta noen minutter å fullføre.

Når byggingen er ferdig, kan du kjøre miljøet i bakgrunnsmodus med:

``` bash
docker compose up -d
```

Vi kjører nå `composer install` for å installere applikasjonsavhengighetene:

```bash
docker compose exec app composer install
```

Kopier miljøinnstillingene:

``` bash
docker compose exec app cp .env.local .env
```

Angi krypteringsnøkkel med kommandolinjeverktøyet `artisan` Laravel:

``` bash
docker compose exec app ./artisan key:generate --ansi
```

Migrer DB og seed falske data:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

Og legg til Filament admin-bruker:

``` bash
docker compose exec app ./artisan make:filament-user
```

Og åpne http://127.0.0.1:8000 i favorittnettleseren din. Glad for å bruke Laravel Blog!

## Hvordan komme seg inn i beholderen?

Tilgang til Docker-beholderen:

``` bash
docker exec -ti laravel-blog-app bash
```

## Lisens

Dette er åpen programvare lisensiert under [MIT-lisensen](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub-utgivelse](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![lisens](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blogg)
