![Laravel բլոգ՝ Filament-ի ադմինիստրատորի վահանակով](../docs/social-preview-en.png)

# Laravel բլոգ՝ Filament ադմինիստրատորի վահանակով

Սա [Laravel](https://laravel.com) բլոգի մեկնարկային փաթեթի նախագիծն է՝ [Filament](https://filamentphp.com) ադմինիստրատորի վահանակով:

Այս պահոցի նպատակն է ցուցադրել [Laravel](https://laravel.com) զարգացման լավ փորձը պարզ հավելվածով:

## Հատկություններ

- 📚 Գրառումների ստեղծում և խմբագրում
- 🥑 Կատեգորիաներ
- :fire: Հանրաճանաչ գրառումներ
- :hatched_chick: Ադմինիստրատորի վահանակը կառուցված է [Filament]-ի վրա (https://filamentphp.com)

## Հատկանիշների հայցում

Բացեք [նոր թողարկում] (https://github.com/gomzyakov/laravel-blog/issues/new)՝ գործառույթ պահանջելու համար (կամ եթե վրիպակ եք գտնում):

## Ինչպե՞ս վարել բլոգը լոկալ:

Կլոնավորել նախագիծը.

Բաշ
git clone git@github.com:gomzyakov/laravel-blog.git
```

Կարծում եմ, դուք արդեն տեղադրել եք Docker-ը: Եթե ոչ, պարզապես արեք դա [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows] (https://docs.docker.com/desktop/install/windows) -install/) կամ [Linux] (https://docs.docker.com/desktop/install/linux-install/):

Կառուցեք «laravel-blog» պատկերը հետևյալ հրամանով.

Բաշ
docker compose build --no-cache
```

>Այս հրամանի ավարտը կարող է տևել մի քանի րոպե:

Երբ կառուցումն ավարտված է, կարող եք միջավայրը գործարկել ֆոնային ռեժիմում՝ հետևյալով.

Բաշ
docker կազմել մինչեւ -d
```

Այժմ մենք կգործարկենք «composer install»-ը՝ հավելվածի կախվածությունները տեղադրելու համար.

Բաշ
docker compose exec հավելվածի կոմպոզիտորի տեղադրում
```

Պատճենել շրջակա միջավայրի կարգավորումները.

Բաշ
docker compose exec app cp .env.local .env
```

Սահմանեք գաղտնագրման բանալին «արհեստավոր» Laravel հրամանի տող գործիքով.

Բաշ
docker compose exec հավելված ./artisan key:generate --ansi
```

Տեղափոխել DB-ն և կեղծ տվյալները.

Բաշ
docker compose exec հավելված ./artisan migrate:fresh --seed
```

Եվ ավելացրեք Filament ադմինիստրատորի օգտվող.

Բաշ
docker compose exec հավելված ./artisan make:filament-user
```

Եվ բացեք http://127.0.0.1:8000 ձեր սիրած բրաուզերում: Ուրախ եմ օգտագործել Laravel բլոգը:

## Ինչպե՞ս մտնել տարայի ներս:

Մուտք դեպի Docker կոնտեյներ.

Բաշ
docker exec -ti laravel-blog-app bash
```

## Լիցենզիա

Սա բաց կոդով ծրագրակազմ է, որը լիցենզավորված է [MIT License] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE):


[![GitHub թողարկում](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![լիցենզիա](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)