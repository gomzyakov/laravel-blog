>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Այս ֆայլը պետք է թարմացվի, որպեսզի համապատասխանի [անգլերեն](/README.md) README ֆայլին:

![Laravel բլոգ՝ Filament-ի ադմինիստրատորի վահանակով](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel բլոգ՝ Filament ադմինիստրատորի վահանակով

Սա [Laravel](https://laravel.com) բլոգի մեկնարկային փաթեթի նախագիծն է՝ [Filament](https://filamentphp.com) ադմինիստրատորի վահանակով:

Այս պահոցի նպատակն է ցուցադրել [Laravel](https://laravel.com) զարգացման լավ փորձը պարզ հավելվածով:

## Հատկություններ

- 📚 Գրառումների ստեղծում և խմբագրում
- 🥑 Կատեգորիաներ
- 🔥 Հանրաճանաչ գրառումներ
- 🎉 Ադմինիստրատորի վահանակը կառուցված է [Filament]-ի վրա (https://filamentphp.com)

## Հատկանիշների հայցում

Բացեք [նոր թողարկում] (https://github.com/gomzyakov/laravel-blog/issues/new)՝ գործառույթ պահանջելու համար (կամ եթե վրիպակ եք գտնում):

## Ինչպե՞ս վարել բլոգը լոկալ:

Կլոնավորել նախագիծը.

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Կարծում եմ, դուք արդեն տեղադրել եք Docker-ը: Եթե ոչ, պարզապես արեք դա [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows] (https://docs.docker.com/desktop/install/windows) -install/) կամ [Linux] (https://docs.docker.com/desktop/install/linux-install/):

Կառուցեք `laravel-blog` պատկերը հետևյալ հրամանով.

```bash
docker compose build --no-cache
```

>Այս հրամանի ավարտը կարող է տևել մի քանի րոպե:

Երբ կառուցումն ավարտված է, կարող եք միջավայրը գործարկել ֆոնային ռեժիմում՝ հետևյալով.

```bash
docker compose up -d
```

Այժմ մենք կգործարկենք `composer install` -ը՝ հավելվածի կախվածությունները տեղադրելու համար.

```bash
docker compose exec app composer install
```

Պատճենել շրջակա միջավայրի կարգավորումները.

```bash
docker compose exec app cp .env.local .env
```

Սահմանեք գաղտնագրման բանալին `artisan` Laravel հրամանի տող գործիքով.

```bash
docker compose exec app ./artisan key:generate --ansi
```

Տեղափոխել DB-ն և կեղծ տվյալները.

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

Եվ ավելացրեք Filament ադմինիստրատորի օգտվող.

```bash
docker compose exec հավելված ./artisan make:filament-user
```

Եվ բացեք http://127.0.0.1:8000 ձեր սիրած բրաուզերում: Ուրախ եմ օգտագործել Laravel բլոգը:

## Ինչպե՞ս մտնել տարայի ներս:

Մուտք դեպի Docker կոնտեյներ.

```bash
docker exec -ti laravel-blog-app bash
```

## Լիցենզիա

Սա բաց կոդով ծրագրակազմ է, որը լիցենզավորված է [MIT License] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE):


[![GitHub թողարկում](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![լիցենզիա](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
