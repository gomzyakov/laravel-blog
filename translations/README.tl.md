![Laravel blog na may Filament admin panel](../docs/social-preview-en.png)

# Laravel blog na may Filament admin panel

Ito ang [Laravel](https://laravel.com) blog starter kit project na may [Filament](https://filamentphp.com) admin panel.

Ang layunin ng repositoryong ito ay ipakita ang magagandang [Laravel](https://laravel.com) na mga kasanayan sa pag-develop gamit ang isang simpleng application.

## Mga Tampok

- 📚 Paggawa at pag-edit ng mga post
- 🥑 Mga Kategorya
- :fire: Mga sikat na post
- :hatched_chick: Admin panel na binuo sa [Filament](https://filamentphp.com)

## Humihiling ng mga tampok

Magbukas ng [bagong isyu](https://github.com/gomzyakov/laravel-blog/issues/new) para humiling ng feature (o kung makakita ka ng bug).

## Paano patakbuhin ang blog nang lokal?

I-clone ang proyekto:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Naniniwala ako na mayroon ka nang naka-install na Docker. Kung hindi, gawin lang ito sa [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) o [Linux](https://docs.docker.com/desktop/install/linux-install/).

Buuin ang imahe ng `laravel-blog` gamit ang sumusunod na command:

```bash
docker compose build --no-cache
```

>Maaaring tumagal ng ilang minuto bago makumpleto ang utos na ito.

Kapag natapos na ang build, maaari mong patakbuhin ang environment sa background mode gamit ang:

```bash
docker compose up -d
```

Tatakbo na kami ngayon ng `composer install` para i-install ang mga dependency ng application:

```bash
docker compose exec app composer install
```

Kopyahin ang mga setting ng kapaligiran:

```bash
docker compose exec app cp .env.local .env
```

Itakda ang encryption key gamit ang `artisan` Laravel command-line tool:

```bash
docker compose exec app ./artisan key:generate --ansi
```

I-migrate ang DB at seed fake data:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

At magdagdag ng user ng admin ng Filament:

```bash
docker compose exec app ./artisan make:filament-user
```

At buksan ang http://127.0.0.1:8000 sa iyong paboritong browser. Maligayang paggamit ng Laravel Blog!

## Paano makapasok sa loob ng lalagyan?

Access sa lalagyan ng Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Lisensya

Ito ay open-sourced software na lisensyado sa ilalim ng [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub release](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)