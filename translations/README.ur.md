>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>اس فائل کو [انگریزی](/README.md) README فائل سے ملنے کے لیے اپ ڈیٹ کرنے کی ضرورت ہے۔

![فلامینٹ ایڈمن پینل کے ساتھ لاریول بلاگ](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel بلاگ فلیمینٹ ایڈمن پینل کے ساتھ

یہ [Laravel](https://laravel.com) بلاگ اسٹارٹر کٹ پروجیکٹ ہے جس میں [Filament](https://filamentphp.com) ایڈمن پینل ہے۔

اس ذخیرے کا مقصد ایک سادہ ایپلیکیشن کے ساتھ اچھے [Laravel](https://laravel.com) کی ترقی کے طریقوں کو ظاہر کرنا ہے۔

## خصوصیات

- 📚 پوسٹس بنانا اور ان میں ترمیم کرنا
- 🥑 زمرہ جات
- 🔥 مقبول پوسٹس
- 🎉 ایڈمن پینل [Filament](https://filamentphp.com) پر بنایا گیا ہے۔

## خصوصیات کی درخواست کرنا

کسی خصوصیت کی درخواست کرنے کے لیے ایک [نیا شمارہ](https://github.com/gomzyakov/laravel-blog/issues/new) کھولیں (یا اگر آپ کو کوئی بگ ملتا ہے)۔

## بلاگ کو مقامی طور پر کیسے چلایا جائے؟

پروجیکٹ کو کلون کریں:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

مجھے یقین ہے کہ آپ نے پہلے ہی ڈوکر انسٹال کر رکھا ہے۔ اگر نہیں تو اسے صرف [Mac](https://docs.docker.com/desktop/install/mac-install/)، [Windows](https://docs.docker.com/desktop/install/windows) پر کریں۔ -install/) یا [Linux](https://docs.docker.com/desktop/install/linux-install/)۔

مندرجہ ذیل کمانڈ کے ساتھ `laravel-blog` امیج بنائیں:

```bash
docker compose build --no-cache
```

>اس کمانڈ کو مکمل ہونے میں چند منٹ لگ سکتے ہیں۔

جب تعمیر مکمل ہوجائے تو، آپ ماحول کو پس منظر کے موڈ میں اس کے ساتھ چلا سکتے ہیں:

```bash
docker compose up -d
```

اب ہم ایپلیکیشن انحصار کو انسٹال کرنے کے لیے کمپوزر انسٹال کریں گے:

```bash
docker compose exec app composer install
```

ماحول کی ترتیبات کو کاپی کریں:

```bash
docker compose exec app cp .env.local .env
```

' کاریگر ' لاریول کمانڈ لائن ٹول کے ساتھ انکرپشن کلید سیٹ کریں:

```bash
docker compose exec app ./artisan key:generate --ansi
```

DB اور بیج جعلی ڈیٹا کو منتقل کریں:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

اور Filament ایڈمن صارف شامل کریں:

```bash
docker compose exec app ./artisan make:filament-user
```

اور اپنے پسندیدہ براؤزر میں http://127.0.0.1:8000 کھولیں۔ Laravel بلاگ کا استعمال کرتے ہوئے خوش!

## کنٹینر کے اندر کیسے جائیں؟

ڈاکر کنٹینر تک رسائی:

```bash
docker exec -ti laravel-blog-app bash
```

## لائسنس

یہ اوپن سورس سافٹ ویئر ہے جو [MIT لائسنس] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) کے تحت لائسنس یافتہ ہے۔


[![GitHub ریلیز](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![ لائسنس](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
