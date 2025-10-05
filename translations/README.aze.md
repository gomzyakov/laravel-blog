>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[ingilis](/README.md) README faylına uyğun olması üçün bu fayl yenilənməlidir.

![Filament admin paneli ilə Laravel bloqu](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Filament admin paneli ilə Laravel bloqu

Bu, [Filament](https://filamentphp.com) admin paneli ilə [Laravel](https://laravel.com) blog başlanğıc dəsti layihəsidir.

Bu deponun məqsədi sadə tətbiqetmə ilə yaxşı [Laravel](https://laravel.com) inkişaf təcrübələrini nümayiş etdirməkdir.

## Xüsusiyyətləri

- 📚 Postların yaradılması və redaktə edilməsi
- 🥑 Kateqoriyalar
- 🔥 Populyar yazılar
- 🎉 [Filament] üzərində qurulmuş admin paneli(https://filamentphp.com)

## Xüsusiyyətlər tələb olunur

Xüsusiyyət tələb etmək üçün [yeni buraxılış](https://github.com/gomzyakov/laravel-blog/issues/new) açın (və ya səhv tapsanız).

## Bloqu yerli olaraq necə idarə etmək olar?

Layihəni klonlayın:

``` bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

İnanıram ki, siz artıq Docker quraşdırmısınız. Yoxdursa, bunu [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows)-da edin -install/) və ya [Linux](https://docs.docker.com/desktop/install/linux-install/).

Aşağıdakı komanda ilə `laravel-blog` şəklini yaradın:

``` bash
docker compose build --no-cache
```

>Bu əmrin tamamlanması bir neçə dəqiqə çəkə bilər.

Quraşdırma tamamlandıqda, mühiti fon rejimində aşağıdakılarla işlədə bilərsiniz:

``` bash
docker compose up -d
```

Tətbiq asılılıqlarını quraşdırmaq üçün indi `composer install`nı işlədəcəyik:

``` bash
docker compose exec app composer install
```

Ətraf mühit parametrlərini kopyalayın:

``` bash
docker compose exec app cp .env.local .env
```

Şifrələmə açarını `artisan` Laravel komanda xətti aləti ilə təyin edin:

``` bash
docker compose exec app ./artisan key:generate --ansi
```

DB və toxum saxta məlumatları köçürün:

``` bash
docker compose exec app ./artisan migrate:fresh --seed
```

Və sevimli brauzerinizdə http://127.0.0.1:8000-i açın. Laravel Blogundan istifadə etmək xoşbəxtdir!

## Konteynerin içərisinə necə girmək olar?

Docker konteynerinə giriş:

``` bash
docker exec -ti laravel-blog-app bash
```

## Lisenziya

Bu, [MIT License] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) əsasında lisenziyalaşdırılmış açıq mənbəli proqram təminatıdır.


[![GitHub buraxılışı](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
