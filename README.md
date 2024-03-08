![Laravel blog with Filament admin panel](./docs/social-preview-en.png)

### Read this in [other languages](./translations/Translations.md):

[ગુજરાતી](translations/README.guj.md)
&middot; [हिन्दी](translations/README.hi.md)
&middot; [मराठी](translations/README.mr.md)
&middot; [മലയാളം](translations/README.ml.md)
&middot; [ಕನ್ನಡ](translations/README.ka.md)
&middot; [తెలుగు](translations/README.te.md)
&middot; [ଓଡିଆ](translations/README.od.md)
&middot; [ਪੰਜਾਬੀ](translations/README.pb.md)
&middot; [বাংলা](translations/README.bn.md)
&middot; [தமிழ்](translations/README.ta.md)
&middot; [မြန်မာ](translations/README.mm_unicode.md)
&middot; [Bahasa Indonesia](translations/README.id.md)
&middot; [Català](translations/README.ca.md)
&middot; [Español](translations/README.es.md)
&middot; [Nederlands](translations/README.nl.md)
&middot; [Русский](translations/README.ru.md)
&middot; [Bulgarian](translations/README.bg.md)
&middot; [Македонски](translations/README.mk.md)
&middot; [Magyar](translations/README.hu.md)
&middot; [Slovenčina](translations/README.slk.md)
&middot; [日本語](translations/README.ja.md)
&middot; [Tiếng Việt](translations/README.vn.md)
&middot; [Polski](translations/README.pl.md)
&middot; [فارسی](translations/README.fa.md)
&middot; [Lietuvių kalba](translations/README.lt.md)
&middot; [한국어](translations/README.ko.md)
&middot; [Deutsch](translations/README.de.md)
&middot; [中文(Simplified)](translations/README.zh-cn.md)
&middot; [中文(Traditional)](translations/README.zh-tw.md)
&middot; [ελληνικά](translations/README.gr.md)
&middot; [العربية](translations/README.ar.md)
&middot; [Українська](translations/README.ua.md)
&middot; [Português (Portugal)](translations/README.pt-pt.md)
&middot; [Italiano](translations/README.it.md)
&middot; [ภาษาไทย](translations/README.th.md)
&middot; [Galego](translations/README.gl.md)
&middot; [नेपाली](translations/README.np.md)
&middot; [اردو](translations/README.ur.md)
&middot; [Limba Română](translations/README.ro.md)
&middot; [English](README.md)
&middot; [Türkçe](translations/README.tr.md)
&middot; [עברית](translations/README.hb.md)
&middot; [Czech](translations/README.cs.md)
&middot; [Slovenščina](translations/README.sl.md)
&middot; [Norsk](translations/README.no.md)
&middot; [Svenska](translations/README.se.md)
&middot; [Dansk](translations/README.da.md)
&middot; [Wikang Filipino](translations/README.tl.md)
&middot; [Қазақша](translations/README.kz.md)
&middot; [Afrikaans (South Africa)](translations/README.afk.md)
&middot; [Zulu (South Africa)](translations/README.zul.md)
&middot; [Kiswahili (Kenya)](translations/README.kws.md)
&middot; [ქართული](translations/README.ge.md)
&middot; [Igbo (Nigeria)](translations/README.igb.md)
&middot; [Yoruba (Nigeria)](translations/README.yor.md)
&middot; [Hausa (Nigeria)](translations/README.hau.md)
&middot; [Suomeksi](translations/README.fi.md)
&middot; [Español de México](translations/README.mx.md)
&middot; [Српски](translations/README.sr.md)
&middot; [Latvia](translations/README.lv.md)
&middot; [Shqip](translations/README.al.md)
&middot; [Беларуская мова](translations/README.by.md)
&middot; [Azərbaycan dili](translations/README.aze.md)
&middot; [Bosanski](translations/README.bih.md)
&middot; [پښتو - Pashto](translations/README.ps.md)
&middot; [ພາສາລາວ](translations/README.la.md)
&middot; [Af-soomaali](translations/README.so.md)
&middot; [አማርኛ(Ethiopia)](translations/README.am.md)
&middot; [සිංහල(Sri Lanka)](translations/README.si.md)
&middot; [հայերեն](translations/README.arm.md)

# Laravel blog with Filament admin panel

This is [Laravel](https://laravel.com) blog starter kit project with [Filament](https://filamentphp.com) admin panel.

The goal of this repository is to showcase good [Laravel](https://laravel.com) development practices with a simple application.

## Features

- 📚 Creating and editing posts
- 🥑 Categories
- 🔥 Popular posts
- 🎉 Admin panel built on [Filament](https://filamentphp.com)

## Requesting features

Open a [new issue](https://github.com/gomzyakov/laravel-blog/issues/new) to request a feature (or if you find a bug).

## How to run blog locally? 

Clone the project:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

I believe you already have Docker installed. If not, just do it on [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows-install/) or [Linux](https://docs.docker.com/desktop/install/linux-install/).

Build the `laravel-blog` image with the following command:

```bash
docker compose build --no-cache
```

>This command might take a few minutes to complete.

When the build is finished, you can run the environment in background mode with:

```bash
docker compose up -d
```

We’ll now run `composer install` to install the application dependencies:

```bash
docker compose exec app composer install
```

Copy the environment settings:

```bash
docker compose exec app cp .env.local .env
```

Set encryption key with the `artisan` Laravel command-line tool:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Migrate DB & seed fake data:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

And add Filament admin user:

```bash
docker compose exec app ./artisan make:filament-user
```

And open http://127.0.0.1:8000 in your favorite browser. Happy using Laravel Blog!

## How to get inside the container?

Access to the Docker container:

```bash
docker exec -ti laravel-blog-app bash
```

## License

This is open-sourced software licensed under the [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub release](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/laravel-blog)
