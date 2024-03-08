![Блог Laravel із панеллю адміністратора Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Блог Laravel з панеллю адміністратора Filament

Це [Laravel](https://laravel.com) проект стартового набору для блогу з панеллю адміністратора [Filament](https://filamentphp.com).

Мета цього репозиторію — продемонструвати хороші практики розробки [Laravel](https://laravel.com) за допомогою простого додатка.

## Особливості

- 📚 Створення та редагування дописів
- 🥑 Категорії
- 🔥 Популярні пости
- 🎉 Панель адміністратора побудована на [Filament](https://filamentphp.com)

## Запит функцій

Відкрийте [новий випуск](https://github.com/gomzyakov/laravel-blog/issues/new), щоб надіслати запит на функцію (або якщо ви знайшли помилку).

## Як вести блог локально?

Клонуйте проект:

```баш
git клон git@github.com:gomzyakov/laravel-blog.git
```

Я вважаю, що у вас уже встановлено Docker. Якщо ні, просто зробіть це на [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) -install/) або [Linux](https://docs.docker.com/desktop/install/linux-install/).

Створіть образ `laravel-blog` за допомогою такої команди:

```баш
docker compose build --no-cache
```

>Виконання цієї команди може зайняти кілька хвилин.

Коли збірка завершена, ви можете запустити середовище у фоновому режимі за допомогою:

```баш
docker compose up -d
```

Тепер ми запустимо `composer install`, щоб встановити залежності програми:

```баш
docker compose exec app composer install
```

Скопіюйте налаштування середовища:

```баш
docker compose exec app cp .env.local .env
```

Встановіть ключ шифрування за допомогою інструмента командного рядка `artisan` Laravel:

```баш
docker compose exec app ./artisan key:generate --ansi
```

Перенести фальшиві дані БД і початкового рівня:

```баш
docker compose exec app ./artisan migrate:fresh --seed
```

І додайте користувача адміністратора Filament:

```баш
docker compose exec app ./artisan make:filament-user
```

І відкрийте http://127.0.0.1:8000 у своєму улюбленому браузері. Щасливого користування блогом Laravel!

## Як потрапити всередину контейнера?

Доступ до контейнера Docker:

```баш
docker exec -ti laravel-blog-app bash
```

## Ліцензія

Це програмне забезпечення з відкритим кодом, ліцензоване згідно з [ліцензією MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Випуск GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![ліцензія](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-блог)
