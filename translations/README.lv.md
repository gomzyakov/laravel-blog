![Laravel emuārs ar Filament administrēšanas paneli](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel emuārs ar Filament administrēšanas paneli

Šis ir [Laravel](https://laravel.com) emuāra sākuma komplekta projekts ar [Filament](https://filamentphp.com) administrācijas paneli.

Šīs krātuves mērķis ir demonstrēt labu [Laravel](https://laravel.com) izstrādes praksi, izmantojot vienkāršu lietojumprogrammu.

## Iespējas

- 📚 Ziņu izveide un rediģēšana
- 🥑 Kategorijas
- 🔥 Populāras ziņas
- 🎉 Administrēšanas panelis, kas izveidots uz [Filament] (https://filamentphp.com)

## Funkcijas pieprasīšana

Atveriet [jaunu izdevumu](https://github.com/gomzyakov/laravel-blog/issues/new), lai pieprasītu funkciju (vai ja atrodat kļūdu).

## Kā vadīt emuāru lokāli?

Klonēt projektu:

```bah
git clone git@github.com:gomzyakov/laravel-blog.git
```

Es uzskatu, ka jums jau ir instalēts Docker. Ja nē, vienkārši dariet to operētājsistēmā [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) vai [Linux] (https://docs.docker.com/desktop/install/linux-install/).

Izveidojiet `laravel-blog` attēlu ar šādu komandu:

```bah
docker compose build --bez kešatmiņas
```

>Šīs komandas izpilde var aizņemt dažas minūtes.

Kad izveide ir pabeigta, varat palaist vidi fona režīmā, izmantojot:

```bah
docker sastādīt -d
```

Tagad mēs izpildīsim `composer install`, lai instalētu lietojumprogrammu atkarības:

```bah
docker compose exec lietotnes komponista instalēšana
```

Kopējiet vides iestatījumus:

```bah
docker compose exec app cp .env.local .env
```

Iestatiet šifrēšanas atslēgu, izmantojot Laravel komandrindas rīku "artisan":

```bah
Docker Compose Exec app ./artisan key:generate --ansi
```

Migrēt DB un izsēt viltotus datus:

```bah
docker compose exec app ./artisan migrate:fresh --seed
```

Un pievienojiet Filament administratora lietotāju:

```bah
docker compose exec app ./artisan make:filament-user
```

Un savā iecienītākajā pārlūkprogrammā atveriet http://127.0.0.1:8000. Laimīgu Laravel emuāra izmantošanu!

## Kā iekļūt konteinerā?

Piekļuve Docker konteineram:

```bah
docker exec -ti laravel-blog-app bash
```

## Licence

Šī ir atvērtā pirmkoda programmatūra, kas licencēta saskaņā ar [MIT licenci] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub laidiens](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licence](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-emuārs)
