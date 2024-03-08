![Blogul Laravel cu panoul de administrare Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Blog Laravel cu panou de administrare Filament

Acesta este proiectul [Laravel](https://laravel.com) blog starter kit cu panoul de administrare [Filament](https://filamentphp.com).

Scopul acestui depozit este de a prezenta bunele practici de dezvoltare [Laravel](https://laravel.com) cu o aplicație simplă.

## Caracteristici

- 📚 Crearea și editarea postărilor
- 🥑 Categorii
- 🔥 Postări populare
- 🎉 Panoul de administrare construit pe [Filament](https://filamentphp.com)

## Se solicită funcții

Deschideți o [număr nouă](https://github.com/gomzyakov/laravel-blog/issues/new) pentru a solicita o funcție (sau dacă găsiți o eroare).

## Cum să rulezi blogul local?

Clonează proiectul:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Cred că aveți deja instalat Docker. Dacă nu, faceți-o pe [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) sau [Linux](https://docs.docker.com/desktop/install/linux-install/).

Construiți imaginea `laravel-blog` cu următoarea comandă:

```bash
docker compose build --no-cache
```

>Această comandă poate dura câteva minute.

Când construirea este terminată, puteți rula mediul în modul de fundal cu:

```bash
docker compune până -d
```

Acum vom rula `composer install` pentru a instala dependențele aplicației:

```bash
instalarea compozitorului aplicației docker compose exec
```

Copiați setările de mediu:

```bash
docker compose exec app cp .env.local .env
```

Setați cheia de criptare cu instrumentul de linie de comandă „artisan” Laravel:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Migrați DB și date false de semințe:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

Și adăugați utilizator de administrator Filament:

```bash
docker compose exec app ./artisan make:filament-user
```

Și deschideți http://127.0.0.1:8000 în browserul dvs. preferat. Fericiți folosind blogul Laravel!

## Cum să intri în container?

Acces la containerul Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Licență

Acesta este un software cu sursă deschisă licențiat sub [Licența MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Versiunea GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licență](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
