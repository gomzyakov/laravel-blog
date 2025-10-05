>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[ඉංග්‍රීසි](/README.md) README ගොනුව හා ගැළපීමට මෙම ගොනුව යාවත්කාලීන කිරීමට අවශ්‍ය වේ.

![Laravel blog with Filament admin panel](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Filament පරිපාලක පැනලය සමඟ Laravel බ්ලොග්

මෙය [Laravel](https://laravel.com) [Filament](https://filamentphp.com) පරිපාලක පැනලය සහිත බ්ලොග් ආරම්භක කට්ටල ව්‍යාපෘතියයි.

මෙම ගබඩාවේ ඉලක්කය වන්නේ සරල යෙදුමක් සමඟ හොඳ [Laravel](https://laravel.com) සංවර්ධන භාවිතයන් ප්‍රදර්ශනය කිරීමයි.

## විශේෂාංග

- 📚 පෝස්ට් සෑදීම සහ සංස්කරණය කිරීම
- 🥑 වර්ග
- 🔥 ජනප්‍රිය පෝස්ට්
- 🎉 [Filament](https://filamentphp.com) මත ගොඩනගා ඇති පරිපාලක පැනලය

## විශේෂාංග ඉල්ලීම

විශේෂාංගයක් (හෝ ඔබ දෝෂයක් සොයා ගන්නේ නම්) ඉල්ලීමට [නව නිකුතුවක්](https://github.com/gomzyakov/laravel-blog/issues/new) විවෘත කරන්න.

## බ්ලොගය දේශීයව ධාවනය කරන්නේ කෙසේද?

ව්‍යාපෘතිය ක්ලෝන කරන්න:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

ඔබ දැනටමත් Docker ස්ථාපනය කර ඇතැයි මම විශ්වාස කරමි. එසේ නොවේ නම්, එය [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) මත කරන්න -install/) හෝ [Linux](https://docs.docker.com/desktop/install/linux-install/).

පහත විධානය සමඟ `laravel-blog` රූපය ගොඩනඟන්න:

```bash
docker compose build --no-cache
```

>මෙම විධානය සම්පූර්ණ කිරීමට මිනිත්තු කිහිපයක් ගත විය හැක.

ගොඩනැගීම අවසන් වූ විට, ඔබට පසුබිම් ආකාරයෙන් පරිසරය ධාවනය කළ හැක:

```bash
docker compose up -d
```

යෙදුම් පරායත්තතා ස්ථාපනය කිරීමට අපි දැන් `composer install` ධාවනය කරන්නෙමු:

```bash
docker compose exec app composer install
```

පරිසර සැකසුම් පිටපත් කරන්න:

```bash
docker compose exec app cp .env.local .env
```

`artisan` Laravel විධාන රේඛා මෙවලම සමඟ සංකේතන යතුර සකසන්න:

```bash
docker compose exec app ./artisan key:generate --ansi
```

DB සහ බීජ ව්‍යාජ දත්ත සංක්‍රමණය කරන්න:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

සහ Filament පරිපාලක පරිශීලක එක් කරන්න:

```bash
docker compose exec app ./artisan make:filament-user
```

ඔබේ ප්‍රියතම බ්‍රවුසරයේ http://127.0.0.1:8000 විවෘත කරන්න. Laravel Blog භාවිතා කිරීම සතුටක්!

## කන්ටේනරය ඇතුළට යන්නේ කෙසේද?

ඩොකර් කන්ටේනරය වෙත ප්‍රවේශය:

```bash
docker exec -ti laravel-blog-app bash
```

## බලපත්රය

මෙය [MIT බලපත්‍රය](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) යටතේ බලපත්‍ර ලබා ඇති විවෘත මූලාශ්‍ර මෘදුකාංගයකි.


[![GitHub නිකුතුව](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
