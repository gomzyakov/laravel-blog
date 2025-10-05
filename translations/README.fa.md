>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>این فایل برای مطابقت با فایل README [انگلیسی](/README.md) باید به روز شود.

![وبلاگ لاراول با پنل مدیریت Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# وبلاگ لاراول با پنل مدیریت Filament

این پروژه کیت شروع وبلاگ [Laravel](https://laravel.com) با پنل مدیریت [Filament](https://filamentphp.com) است.

هدف این مخزن نمایش شیوه های توسعه خوب [Laravel](https://laravel.com) با یک برنامه کاربردی ساده است.

## امکانات

- 📚 ایجاد و ویرایش پست ها
- 🥑 دسته بندی ها
- 🔥 پست های محبوب
- 🎉 پنل مدیریت ساخته شده بر روی [Filament] (https://filamentphp.com)

## درخواست ویژگی ها

یک [نسخه جدید] (https://github.com/gomzyakov/laravel-blog/issues/new) را باز کنید تا یک ویژگی را درخواست کنید (یا اگر اشکالی پیدا کردید).

## چگونه وبلاگ را به صورت محلی اجرا کنیم؟

کلون کردن پروژه:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

من فکر می کنم شما قبلا Docker را نصب کرده اید. اگر نه، فقط آن را در [Mac](https://docs.docker.com/desktop/install/mac-install/)، [ویندوز](https://docs.docker.com/desktop/install/windows) انجام دهید -install/) یا [Linux] (https://docs.docker.com/desktop/install/linux-install/).

تصویر laravel-blog را با دستور زیر بسازید:

```bash
docker compose build --no-cache
```

> تکمیل این دستور ممکن است چند دقیقه طول بکشد.

پس از اتمام ساخت، می توانید محیط را در حالت پس زمینه با استفاده از:

```bash
docker compose up -d
```

اکنون `composer install` را برای نصب وابستگی‌های برنامه اجرا می‌کنیم:

```bash
docker compose exec app composer install
```

تنظیمات محیط را کپی کنید:

```bash
docker compose exec app cp .env.local .env
```

کلید رمزگذاری را با ابزار خط فرمان `artisan` لاراول تنظیم کنید:

```bash
docker compose exec app ./artisan key:generate --ansi
```

انتقال DB و تخمین داده های جعلی:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

و کاربر مدیریت Filament را اضافه کنید:

```bash
docker compose exec app ./artisan make:filament-user
```

و http://127.0.0.1:8000 را در مرورگر مورد علاقه خود باز کنید. از استفاده از بلاگ لاراول خوشحالم!

## چگونه وارد ظرف شویم؟

دسترسی به کانتینر Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## مجوز

این نرم افزار منبع باز است که تحت مجوز [مجوز MIT] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) مجوز دارد.


[![نسخه GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![لیسانس](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ لاراول بلاگ)
