>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Този файл трябва да се актуализира, за да съответства на [английски](/README.md) README файла.

![Блог на Laravel с административен панел на Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Блог на Laravel с административен панел на Filament

Това е [Laravel](https://laravel.com) проект за стартов комплект за блог с [Filament](https://filamentphp.com) административен панел.

Целта на това хранилище е да демонстрира добри практики за разработка на [Laravel](https://laravel.com) с просто приложение.

## Характеристика

- 📚 Създаване и редактиране на публикации
- 🥑 Категории
- 🔥 Популярни публикации
- 🎉 Административен панел, изграден върху [Filament](https://filamentphp.com)

## Искане на функции

Отворете [нов брой](https://github.com/gomzyakov/laravel-blog/issues/new), за да поискате функция (или ако откриете грешка).

## Как да управлявам блог локално?

Клонирайте проекта:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Вярвам, че вече имате инсталиран Docker. Ако не, просто го направете на [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) или [Linux](https://docs.docker.com/desktop/install/linux-install/).

Създайте изображението `laravel-blog` със следната команда:

```bash
docker compose build --no-cache
```

> Изпълнението на тази команда може да отнеме няколко минути.

Когато изграждането приключи, можете да стартирате средата във фонов режим с:

```bash
docker compose up -d
```

Сега ще изпълним `composer install`, за да инсталираме зависимостите на приложението:

```bash
docker compose exec app composer install
```

Копирайте настройките на средата:

``` bash
docker compose exec app cp .env.local .env
```

Задайте ключ за криптиране с инструмента за команден ред `artisan` Laravel:

``` bash
docker compose exec app ./artisan key:generate --ansi
```

Мигриране на DB и фалшиви данни за семена:

``` bash
docker compose exec app ./artisan migrate:fresh --seed
```

И отворете http://127.0.0.1:8000 в любимия си браузър. Приятно използване на блога на Laravel!

## Как да влезем в контейнера?

Достъп до контейнера на Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Разрешително

Това е софтуер с отворен код, лицензиран съгласно [Лиценза на MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Издаване на GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![лиценз](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-блог)
