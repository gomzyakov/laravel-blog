>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>دا فایل د [انګلیسي](/README.md) README فایل سره د سمون لپاره تازه کولو ته اړتیا لري.

![Laravel بلاګ د فیلامینټ اډمین پینل سره](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel بلاګ د فیلامینټ اډمین پینل سره

دا د [Laravel](https://laravel.com) د بلاګ سټارټر کټ پروژه ده چې د [Filament](https://filamentphp.com) اډمین پینل سره.

د دې ذخیره کولو هدف د ساده غوښتنلیک سره د ښه [Laravel](https://laravel.com) پرمختیایي کړنې ښودل دي.

## برخی

- 📚 پوسټونه جوړول او ایډیټ کول
- 🥑 کټګورۍ
- 🔥 مشهور پوسټونه
- 🎉 اډمین پینل په [Filament](https://filamentphp.com) کې جوړ شوی

## د ځانګړتیاوو غوښتنه کول

د فیچر غوښتنه کولو لپاره [نوی مسله](https://github.com/gomzyakov/laravel-blog/issues/new) پرانیزئ (یا که تاسو بګ ومومئ).

## په سیمه ایزه توګه بلاګ څنګه چلولی شو؟

پروژه کلون کړئ:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

زه باور لرم چې تاسو دمخه ډاکر نصب کړی دی. که نه، یوازې دا په [Mac](https://docs.docker.com/desktop/install/mac-install/)، [Windows](https://docs.docker.com/desktop/install/windows) کې وکړئ. -install/) یا [لینکس](https://docs.docker.com/desktop/install/linux-install/).

د لاندې کمانډ سره د `laravel-blog` انځور جوړ کړئ:

```bash
docker compose build --no-cache
```
> دا کمانډ ممکن بشپړولو لپاره څو دقیقې وخت ونیسي.

کله چې جوړونه پای ته ورسیږي، تاسو کولی شئ چاپیریال په شالید حالت کې د دې سره پرمخ بوځي:

```bash
docker compose up -d
```

موږ به اوس د اپلیکیشن انحصارونو نصبولو لپاره 'کمپوزر انسټال' چلوو:

```bash
docker compose exec app composer install
```

د چاپیریال ترتیبات کاپي کړئ:

```bash
docker compose exec app cp .env.local .env
```

د کوډ کولو کیلي د `artisan` لارویل کمانډ لاین وسیلې سره تنظیم کړئ:

```bash
docker compose exec app ./artisan key:generate --ansi
```

د DB او تخم جعلي ډاټا مهاجرت:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

او د فیلامینټ اډمین کارن اضافه کړئ:

``` bash
docker compose exec app ./artisan make:filament-user
```
او په خپل غوره براوزر کې http://127.0.0.1:8000 خلاص کړئ. د Laravel بلاګ په کارولو سره خوشحاله!

## د کانټینر دننه څنګه ورسیږو؟

د ډاکر کانټینر ته لاسرسی:

```bash
docker exec -ti laravel-blog-app bash
```

## جواز

دا د خلاصې سرچینې سافټویر دی چې د [MIT جواز] لاندې جواز لري (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub ریلیز](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
