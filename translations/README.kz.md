![Filament басқару тақтасы бар Laravel блогы](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Filament басқару тақтасы бар # Laravel блогы

Бұл [Filament](https://filamentphp.com) басқару тақтасы бар [Laravel](https://laravel.com) блогының бастау жинағы жобасы.

Бұл репозиторийдің мақсаты қарапайым қолданба арқылы жақсы [Laravel](https://laravel.com) әзірлеу тәжірибесін көрсету.

## Ерекше өзгешеліктері

- 📚 Жазбаларды жасау және өңдеу
- 🥑 Санаттар
- 🔥 Танымал жазбалар
- 🎉 [Filament] (https://filamentphp.com) негізіндегі басқару тақтасы

## Мүмкіндіктерді сұрау

Мүмкіндікті сұрау үшін (немесе қатені тапсаңыз) [жаңа шығарылымды] (https://github.com/gomzyakov/laravel-blog/issues/new) ашыңыз.

## Блогты жергілікті түрде қалай жүргізуге болады?

Жобаны клондау:

```бас
git clone git@github.com:gomzyakov/laravel-blog.git
```

Сізде Docker орнатылған деп ойлаймын. Олай болмаса, мұны жай ғана [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) компьютерінде орындаңыз. -install/) немесе [Linux](https://docs.docker.com/desktop/install/linux-install/).

`laravel-blog` кескінін келесі пәрменмен құрастырыңыз:

```бас
докер құрастырады --кэш жоқ
```

>Бұл пәрменді аяқтау үшін бірнеше минут кетуі мүмкін.

Құрастыру аяқталғаннан кейін ортаны фондық режимде келесі әрекеттермен іске қосуға болады:

```бас
докер құрастырады -d
```

Енді қолданба тәуелділіктерін орнату үшін «композиторды орнатуды» іске қосамыз:

```бас
docker compose exec қолданбасын құрастырушы орнату
```

Орта параметрлерін көшіріңіз:

```бас
docker compose exec app cp .env.local .env
```

Шифрлау кілтін `artisan` Laravel пәрмен жолы құралымен орнатыңыз:

```бас
docker compose exec app ./artisan key:generate --ansi
```

ДБ және жалған деректерді көшіру:

```бас
docker compose exec app ./artisan migrate:fresh --seed
```

Және Filament әкімші пайдаланушысын қосыңыз:

```бас
docker compose exec app ./artisan make:filament-user
```

Таңдаулы браузерде http://127.0.0.1:8000 ашыңыз. Laravel блогын пайдалануға қуаныштымын!

## Контейнердің ішіне қалай кіруге болады?

Docker контейнеріне кіру:

```бас
docker exec -ti laravel-blog-app bash
```

## Лицензия

Бұл [MIT License] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) бойынша лицензияланған ашық бастапқы бағдарламалық құрал.


[![GitHub шығарылымы](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-блог)
