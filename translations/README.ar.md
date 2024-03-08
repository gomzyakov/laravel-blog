![مدونة Laravel مع لوحة إدارة Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# مدونة Laravel مع لوحة إدارة Filament

هذا هو مشروع مجموعة أدوات مدونة [Laravel](https://laravel.com) مع لوحة إدارة [Filament](https://filamentphp.com).

الهدف من هذا المستودع هو عرض ممارسات تطوير [Laravel](https://laravel.com) الجيدة من خلال تطبيق بسيط.

## سمات

- 📚 إنشاء المشاركات وتحريرها
- 🥑 الفئات
- 🔥 المشاركات الشعبية
- 🎉 لوحة إدارة مبنية على [Filament](https://filamentphp.com)

## طلب الميزات

افتح [إصدارًا جديدًا](https://github.com/gomzyakov/laravel-blog/issues/new) لطلب ميزة (أو إذا وجدت خطأً).

## كيفية تشغيل المدونة محليًا؟

استنساخ المشروع:

``` باش
استنساخ بوابة git@github.com:gomzyakov/laravel-blog.git
```

أعتقد أنك قمت بالفعل بتثبيت Docker. إذا لم يكن الأمر كذلك، فما عليك سوى القيام بذلك على [Mac](https://docs.docker.com/desktop/install/mac-install/)، [Windows](https://docs.docker.com/desktop/install/windows -install/) أو [Linux](https://docs.docker.com/desktop/install/linux-install/).

أنشئ صورة "laravel-blog" باستخدام الأمر التالي:

``` باش
عامل الإرساء يؤلف البناء --no-cache
```

>قد يستغرق هذا الأمر بضع دقائق حتى يكتمل.

عند الانتهاء من الإنشاء، يمكنك تشغيل البيئة في وضع الخلفية باستخدام:

``` باش
عامل ميناء يؤلف -d
```

سنقوم الآن بتشغيل برنامج Composer install لتثبيت تبعيات التطبيق:

``` باش
عامل ميناء يؤلف تثبيت ملحن تطبيق exec
```

انسخ إعدادات البيئة:

``` باش
عامل ميناء يؤلف تطبيق exec cp .env.local .env
```

قم بتعيين مفتاح التشفير باستخدام أداة سطر الأوامر "artisan" Laravel:

``` باش
docker compose exec app ./artisan key:generate --ansi
```

ترحيل قاعدة البيانات والبيانات المزيفة:

``` باش
docker compose exec app ./artisan migrate:fresh --seed
```

وأضف مستخدم مسؤول Filament:

``` باش
docker compose exec app ./artisan make:filament-user
```

وافتح http://127.0.0.1:8000 في متصفحك المفضل. سعيد باستخدام مدونة Laravel!

## كيفية الدخول إلى الحاوية؟

الوصول إلى حاوية Docker:

``` باش
docker exec -ti laravel-blog-app bash
```

## رخصة

هذا برنامج مفتوح المصدر مرخص بموجب [ترخيص MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![إصدار GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![الترخيص](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ مدونة لارافيل)
