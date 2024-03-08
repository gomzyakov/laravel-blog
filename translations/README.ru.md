![Блог на Laravel с админ-панелью на Filament](../docs/social-preview-en.png)

_Описание проекта на [других языках](Translations.md)_

# Блог на Laravel с админ-панелью на Filament

Это простой, но функциональный, блог на [Laravel](https://laravel.com) с панелью администратора на [Filament](https://filamentphp.com).

Цель этого проекта — продемонстрировать хорошие практики разработки [Laravel](https://laravel.com) с помощью простого приложения.

## Возможности приложения

- 📚 Создание и редактирование постов
- 🥑 Категории
- 🔥 Популярный посты
- 🎉 Админ-панель на [Filament](https://filamentphp.com)

## Запрос функций

Откройте [новую issue](https://github.com/gomzykov/laravel-blog/issues), чтобы запросить функцию (или если вы обнаружили ошибку).

## Как запустить блог локально?

Клонируйте проект:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Будем считать, что у вас уже установлен Docker. Если нет, просто следуйте инструкциям: [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows-install/) or [Linux](https://docs.docker.com/desktop/install/linux-install/).

Создайте образ `laravel-blog` с помощью следующей команды:

```bash
docker compose build --no-cache
```

>Выполнение этой команды может занять несколько минут.

Когда сборка завершена, вы можете запустить блог в фоновом режиме с помощью:

```bash
docker compose up -d
```

Теперь мы запустим `composer install`, чтобы установить зависимости приложения:

```bash
docker compose exec app composer install
```

Скопируйте настройки среды:

```bash
docker compose exec app cp .env.local .env
```

Сгенерируйте ключ шифрования с помощью команды `artisan`:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Запустите миграцию базы данных и наполнение её тестовыми данными:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

Добавьте нового пользователя Filament:

```bash
docker compose exec app ./artisan make:filament-user
```

И откройте http://127.0.0.1:8000 в своем любимом браузере. Приятного использования блога на Laravel!

## Как попасть внутрь контейнера?

Для доступа внутрь Docker-контейнера просто запустите:

```bash
docker exec -ti laravel-blog-app bash
```

## Лицензия

Это программное обеспечение с открытым исходным кодом, лицензированное по [MIT License](https://github.com/gomzykov/php-code-style/blob/main/LICENSE).

[![GitHub release](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/laravel-blog)
