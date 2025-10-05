>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Ky skedar duhet të përditësohet në mënyrë që të përputhet me skedarin [anglisht](/README.md) README.

![Blog Laravel me panelin e administrimit të Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Blog Laravel me panelin e administrimit të Filament

Ky është projekti i kompletit fillestar të blogut [Laravel](https://laravel.com) me panelin e administrimit të [Filament](https://filamentphp.com).

Qëllimi i kësaj depoje është të shfaqë praktikat e mira të zhvillimit [Laravel](https://laravel.com) me një aplikacion të thjeshtë.

## Karakteristikat

- 📚 Krijimi dhe redaktimi i postimeve
- 🥑 Kategoritë
- 🔥 Postime të njohura
- 🎉 Paneli i administratorit i ndërtuar në [Filament](https://filamentphp.com)

## Duke kërkuar veçori

Hapni një [problem të ri](https://github.com/gomzyakov/laravel-blog/issues/new) për të kërkuar një veçori (ose nëse gjeni një gabim).

## Si të drejtoni blogun në nivel lokal?

Klononi projektin:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Besoj se tashmë e keni të instaluar Docker. Nëse jo, thjesht bëjeni në [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) ose [Linux] (https://docs.docker.com/desktop/install/linux-install/).

Ndërtoni imazhin `laravel-blog` me komandën e mëposhtme:

```bash
docker compose build --no-cache
```

> Kjo komandë mund të marrë disa minuta për t'u përfunduar.

Kur ndërtimi të përfundojë, mund ta ekzekutoni mjedisin në modalitetin e sfondit me:

```bash
docker compose up -d
```

Tani do të ekzekutojmë `composer install` për të instaluar varësitë e aplikacionit:

```bash
docker compose exec app composer install
```

Kopjoni cilësimet e mjedisit:

```bash
docker compose exec app cp .env.local .env
```

Vendosni çelësin e enkriptimit me mjetin e linjës së komandës `artisan` Laravel:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Migroni DB dhe vendosni të dhëna të rreme:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

Dhe shtoni përdoruesin e administratorit të Filament:

```bash
docker compose exec app ./artisan make:filament-user
```

Dhe hapni http://127.0.0.1:8000 në shfletuesin tuaj të preferuar. I lumtur duke përdorur blogun Laravel!

## Si të futeni brenda në enë?

Qasja në kontejnerin Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Liçensë

Ky është softuer me burim të hapur i licencuar sipas [licencës MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Lëshimi i GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licencë](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
