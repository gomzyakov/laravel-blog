﻿>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Ten plik wymaga aktualizacji, aby był zgodny z plikiem README [angielski](/README.md).

![Blog Laravel z panelem administracyjnym Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Blog Laravel z panelem administracyjnym Filament

To jest projekt zestawu startowego bloga [Laravel](https://laravel.com) z panelem administracyjnym [Filament](https://filamentphp.com).

Celem tego repozytorium jest pokazanie dobrych praktyk programistycznych [Laravel](https://laravel.com) za pomocą prostej aplikacji.

## Cechy

- 📚 Tworzenie i edytowanie postów
- 🥑 Kategorie
- 🔥 Popularne posty
- 🎉 Panel administracyjny zbudowany na [Filamencie](https://filamentphp.com)

## Żądanie funkcji

Otwórz [nowy numer](https://github.com/gomzyakov/laravel-blog/issues/new), aby poprosić o funkcję (lub jeśli znajdziesz błąd).

## Jak prowadzić bloga lokalnie?

Sklonuj projekt:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Wierzę, że masz już zainstalowany Docker. Jeśli nie, po prostu zrób to na [Macu](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) lub [Linux] (https://docs.docker.com/desktop/install/linux-install/).

Zbuduj obraz `laravel-blog` za pomocą następującego polecenia:

```bash
docker compose build --no-cache
```

>Wykonanie tego polecenia może zająć kilka minut.

Po zakończeniu kompilacji możesz uruchomić środowisko w tle za pomocą:

```bash
docker compose up -d
```

Uruchomimy teraz `composer install`, aby zainstalować zależności aplikacji:

```bash
docker compose exec app composer install
```

Skopiuj ustawienia środowiska:

```bash
docker compose exec app cp .env.local .env
```

Ustaw klucz szyfrowania za pomocą narzędzia wiersza poleceń `artisan` Laravel:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Migracja bazy danych i fałszywe dane:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

I dodaj administratora Filament:

``` bash
docker compose exec app ./artisan make:filament-user
```

I otwórz http://127.0.0.1:8000 w swojej ulubionej przeglądarce. Miłego korzystania z bloga Laravel!

## Jak dostać się do kontenera?

Dostęp do kontenera Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Licencja

To jest oprogramowanie typu open source objęte licencją [Licencja MIT] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Wersja GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licencja](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ blog laravel)
