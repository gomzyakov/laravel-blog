>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Tämä tiedosto on päivitettävä, jotta se vastaa [englanti](/README.md) README-tiedostoa.

![laravel-blogi Filamentin hallintapaneelilla](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# laravel-blogi Filamentin hallintapaneelilla

Tämä on [Laravel](https://laravel.com) blogin aloituspakettiprojekti [Filament](https://filamentphp.com) hallintapaneelin kanssa.

Tämän arkiston tavoitteena on esitellä hyviä [Laravel](https://laravel.com) kehityskäytäntöjä yksinkertaisella sovelluksella.

## Ominaisuudet

- 📚 Viestien luominen ja muokkaaminen
- 🥑 Luokat
- 🔥 Suosittuja viestejä
- 🎉 [Filamentille] rakennettu hallintapaneeli (https://filamentphp.com)

## Ominaisuuksien pyytäminen

Avaa [uusi numero](https://github.com/gomzyakov/laravel-blog/issues/new) pyytääksesi ominaisuutta (tai jos löydät virheen).

## Kuinka ylläpitää blogia paikallisesti?

Kloonaa projekti:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Uskon, että sinulla on jo Docker asennettuna. Jos ei, tee se [Macissa](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) tai [Linux](https://docs.docker.com/desktop/install/linux-install/).

Rakenna `laravel-blog` -kuva seuraavalla komennolla:

```bash
docker compose build --no-cache
```

>Tämän komennon suorittaminen voi kestää muutaman minuutin.

Kun rakennus on valmis, voit ajaa ympäristöä taustatilassa seuraavasti:

```bash
docker compose up -d
```

Suoritamme nyt `composer install` asentaaksemme sovellusriippuvuudet:

```bash
docker compose exec app composer install
```

Kopioi ympäristöasetukset:

```bash
docker compose exec app cp .env.local .env
```

Aseta salausavain "artisan" Laravel -komentorivityökalulla:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Siirrä DB ja siemen väärennetyt tiedot:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

Ja lisää Filamentin järjestelmänvalvojan käyttäjä:

```bash
docker compose exec app ./artisan make:filament-user
```

Ja avaa http://127.0.0.1:8000 suosikkiselaimessasi. Hyvää laravel-blogin käyttöä!

## Kuinka päästä konttiin?

Pääsy Docker-konttiin:

```bash
docker exec -ti laravel-blog-app bash
```

## Lisenssi

Tämä on avoimen lähdekoodin ohjelmisto, jonka käyttöoikeus on [MIT-lisenssi](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub-julkaisu](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![lisenssi](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blogi)
