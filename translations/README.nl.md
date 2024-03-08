![Laravel-blog met Filament-beheerderspaneel](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel-blog met Filament-beheerderspaneel

Dit is een [Laravel](https://laravel.com) blogstartpakketproject met [Filament](https://filamentphp.com) beheerderspaneel.

Het doel van deze repository is om goede [Laravel](https://laravel.com) ontwikkelingspraktijken te demonstreren met een eenvoudige toepassing.

## Functies

- 📚 Berichten maken en bewerken
- 🥑 Categorieën
- 🔥 Populaire berichten
- 🎉 beheerderspaneel gebouwd op [Filament](https://filamentphp.com)

## Functies aanvragen

Open een [nieuw nummer](https://github.com/gomzyakov/laravel-blog/issues/new) om een functie aan te vragen (of als je een bug vindt).

## Hoe kan ik een blog lokaal runnen?

Kloon het project:

``` bash
git kloon git@github.com:gomzyakov/laravel-blog.git
```

Ik geloof dat je Docker al hebt geïnstalleerd. Zo niet, doe het dan gewoon op [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) of [Linux](https://docs.docker.com/desktop/install/linux-install/).

Bouw de `laravel-blog`-afbeelding met de volgende opdracht:

``` bash
docker compose build --no-cache
```

>Het kan enkele minuten duren voordat deze opdracht is voltooid.

Wanneer de build is voltooid, kunt u de omgeving in de achtergrondmodus uitvoeren met:

``` bash
docker componeren -d
```

We zullen nu `composer install` uitvoeren om de applicatie-afhankelijkheden te installeren:

``` bash
docker compose exec app composer installeren
```

Kopieer de omgevingsinstellingen:

``` bash
docker componeer exec-app cp .env.local .env
```

Stel de coderingssleutel in met het `artisan` Laravel-opdrachtregelprogramma:

``` bash
docker compose exec app ./artisan key:generate --ansi
```

DB migreren en valse gegevens zaaien:

``` bash
docker compose exec app ./artisan migreren:fresh --seed
```

En voeg Filament-beheerdergebruiker toe:

``` bash
docker compose exec app ./artisan make:filament-user
```

En open http://127.0.0.1:8000 in uw favoriete browser. Veel plezier met het gebruiken van Laravel Blog!

## Hoe kom je in de container?

Toegang tot de Docker-container:

``` bash
docker exec -ti laravel-blog-app bash
```

## Licentie

Dit is open source software gelicentieerd onder de [MIT-licentie] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub-release](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licentie](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
