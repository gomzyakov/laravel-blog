![Laravel tinklaraštis su Filament administravimo skydeliu](../docs/social-preview-en.png)

# Laravel tinklaraštis su Filament administratoriaus skydeliu

Tai yra [Laravel](https://laravel.com) tinklaraščio pradžios rinkinio projektas su [Filament](https://filamentphp.com) administratoriaus skydeliu.

Šios saugyklos tikslas – pademonstruoti gerą [Laravel](https://laravel.com) kūrimo praktiką naudojant paprastą programą.

## Funkcijos

- 📚 Įrašų kūrimas ir redagavimas
- 🥑 Kategorijos
- :fire: Populiarūs įrašai
- :hatched_chick: administratoriaus skydelis sukurtas naudojant [Filament] (https://filamentphp.com)

## Funkcijų užklausa

Atidarykite [naują leidimą] (https://github.com/gomzyakov/laravel-blog/issues/new), kad pateiktumėte užklausą dėl funkcijos (arba jei radote triktį).

## Kaip paleisti tinklaraštį vietoje?

Klonuoti projektą:

''bash
git klonas git@github.com:gomzyakov/laravel-blog.git
```

Manau, kad jau įdiegėte „Docker“. Jei ne, tiesiog padarykite tai [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) arba [Linux] (https://docs.docker.com/desktop/install/linux-install/).

Sukurkite „laravel-blog“ vaizdą naudodami šią komandą:

''bash
docker Compe build --no-cache
```

>Ši komanda gali užtrukti kelias minutes.

Kai kūrimas bus baigtas, galite paleisti aplinką fono režimu naudodami:

''bash
dokeris sudaryti -d
```

Dabar paleisime „composer install“, kad įdiegtume programų priklausomybes:

''bash
docker compose exec programos kompozitoriaus diegimas
```

Nukopijuokite aplinkos nustatymus:

''bash
docker sukurti exec app cp .env.local .env
```

Nustatykite šifravimo raktą naudodami „Artisan“ Laravel komandinės eilutės įrankį:

''bash
docker sukurti exec app ./artisan key:generate --ansi
```

Perkelti DB ir suklastotus duomenis:

''bash
docker sukurti exec programą ./artisan migrate:fresh --seed
```

Ir pridėkite „Filament“ administratoriaus vartotoją:

''bash
docker Compe Exec app ./artisan make:filament-user
```

Ir atidarykite http://127.0.0.1:8000 savo mėgstamoje naršyklėje. Džiaugiamės naudodami Laravel tinklaraštį!

## Kaip patekti į konteinerį?

Prieiga prie „Docker“ konteinerio:

''bash
docker exec -ti laravel-blog-app bash
```

## Licencija

Tai atvirojo kodo programinė įranga, licencijuota pagal [MIT licenciją] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub leidimas](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licencija](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel tinklaraštis)