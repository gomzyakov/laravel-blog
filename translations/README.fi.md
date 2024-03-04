![Laravel-blogi Filamentin hallintapaneelilla](../docs/social-preview-en.png)

# Laravel-blogi Filamentin hallintapaneelilla

Tämä on [Laravel](https://laravel.com) blogin aloituspakettiprojekti [Filament](https://filamentphp.com) hallintapaneelin kanssa.

Tämän arkiston tavoitteena on esitellä hyviä [Laravel](https://laravel.com) kehityskäytäntöjä yksinkertaisella sovelluksella.

## Ominaisuudet

- 📚 Viestien luominen ja muokkaaminen
- 🥑 Luokat
- :fire: Suosittuja viestejä
- :hatched_chick: [Filamentille] rakennettu hallintapaneeli (https://filamentphp.com)

## Ominaisuuksien pyytäminen

Avaa [uusi numero](https://github.com/gomzyakov/laravel-blog/issues/new) pyytääksesi ominaisuutta (tai jos löydät virheen).

## Kuinka ylläpitää blogia paikallisesti?

Kloonaa projekti:

```bash
git-klooni git@github.com:gomzyakov/laravel-blog.git
```

Uskon, että sinulla on jo Docker asennettuna. Jos ei, tee se [Macissa](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) tai [Linux](https://docs.docker.com/desktop/install/linux-install/).

Rakenna `laravel-blog` -kuva seuraavalla komennolla:

```bash
telakka kirjoita koonti -- ei välimuistia
```

>Tämän komennon suorittaminen voi kestää muutaman minuutin.

Kun rakennus on valmis, voit ajaa ympäristöä taustatilassa seuraavasti:

```bash
telakka säveltää -d
```

Suoritamme nyt "composer install" asentaaksemme sovellusriippuvuudet:

```bash
docker compose exec app säveltäjän asennus
```

Kopioi ympäristöasetukset:

```bash
docker kirjoittaa exec app cp .env.local .env
```

Aseta salausavain "artisan" Laravel -komentorivityökalulla:

```bash
telakka kirjoittaa exec app ./artisan key:generate --ansi
```

Siirrä DB ja siemen väärennetyt tiedot:

```bash
docker kirjoittaa exec app ./artisan migrate:fresh --seed
```

Ja lisää Filamentin järjestelmänvalvojan käyttäjä:

```bash
telakka kirjoittaa exec app ./artisan make:filament-user
```

Ja avaa http://127.0.0.1:8000 suosikkiselaimessasi. Hyvää Laravel-blogin käyttöä!

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