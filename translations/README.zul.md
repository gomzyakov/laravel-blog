![Laravel blog with Filament admin panel](./docs/social-preview-zu.png)

# Ibhulogi yeLaravel enephaneli yokuphatha ye-Filament

Lena [Laravel](https://laravel.com) iphrojekthi yekhithi yokuqala yebhulogi enephaneli yokulawula ye-[Filament](https://filamentphp.com).

Umgomo waleli gumbi ukukhombisa izinqubo ezinhle zokuthuthukisa ze-[Laravel](https://laravel.com) ngohlelo lokusebenza olulula.

## Izici

- 📚 Ukudala nokuhlela okuthunyelwe
- 🥑 Izigaba
- :fire: Okuthunyelwe okudumile
- :hatched_chick: Iphaneli yomqondisi eyakhelwe ku-[Filament](https://filamentphp.com)

## Icela izici

Vula [inguqulo entsha](https://github.com/gomzyakov/laravel-blog/issues/new) ukuze ucele isici (noma uma uthola iphutha).

## Isetshenziswa kanjani ibhulogi endaweni?

Hlanganisa iphrojekthi:

``` bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Ngikholwa ukuthi usunayo i-Docker efakiwe. Uma kungenjalo, vele ukwenze ku-[Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -faka/) noma i-[Linux](https://docs.docker.com/desktop/install/linux-install/).

Yakha isithombe `se-laravel-blog` ngomyalo olandelayo:

``` bash
i-docker ibhala ukwakha --no-cache
```

>Lo myalo ungathatha amaminithi ambalwa ukuqeda.

Lapho ukwakhiwa kuqediwe, ungasebenzisa indawo ezungezile ngemodi yangemuva nge:

``` bash
i-docker ibhala phezulu -d
```

Manje sizosebenzisa `ukufaka komqambi` ukuze sifake ukuncika kohlelo lokusebenza:

``` bash
i-docker ibhala i-exec yomqambi wohlelo lokusebenza ukufaka
```

Kopisha izilungiselelo zendawo:

``` bash
idokha liqamba i-exec app cp .env.local .env
```

Setha ukhiye wokubethela ngethuluzi lomugqa womyalo we-`artisan` we-Laravel:

``` bash
i-docker iqamba i-exec app ./artisan key:generate --ansi
```

Thutha i-DB nedatha mbumbulu yembewu:

``` bash
i-docker compose exec app ./artisan migrate:fresh --seed
```

Futhi engeza umsebenzisi we-Filament admin:

``` bash
idokha liqamba uhlelo lokusebenza lwe-exec ./artisan make:filament-user
```

Futhi uvule http://127.0.0.1:8000 kusiphequluli sakho osithandayo. Jabulela usebenzisa i-Laravel Blog!

## Ungangena kanjani ngaphakathi kwesitsha?

Ukufinyelela esitsheni se-Docker:

``` basha
docker exec -ti laravel-blog-app bash
```

## Ilayisensi

Le isofthiwe enomthombo ovulekile inelayisensi ngaphansi kwe-[MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Ukukhishwa kwe-GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![ilayisensi](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ i-laravel-blog)