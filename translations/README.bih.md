![Laravel blog s administrativnom pločom Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel blog s administrativnom pločom Filament

Ovo je [Laravel](https://laravel.com) projekt početnog kompleta za blog s [Filament](https://filamentphp.com) administratorskom pločom.

Cilj ovog repozitorija je prikazati dobre [Laravel](https://laravel.com) razvojne prakse s jednostavnom aplikacijom.

## Značajke

- 📚 Kreiranje i uređivanje objava
- 🥑 Kategorije
- 🔥 Popularne objave
- 🎉 Administratorska ploča izgrađena na [Filament](https://filamentphp.com)

## Traženje značajki

Otvorite [novo izdanje](https://github.com/gomzyakov/laravel-blog/issues/new) da zatražite značajku (ili ako pronađete grešku).

## Kako voditi blog lokalno?

Klonirajte projekt:

```baš
git klon git@github.com:gomzyakov/laravel-blog.git
```

Vjerujem da već imate instaliran Docker. Ako ne, samo to učinite na [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) ili [Linux](https://docs.docker.com/desktop/install/linux-install/).

Izradite sliku `laravel-blog` sa sljedećom naredbom:

```baš
docker compose build --no-cache
```

>Dovršenje ove naredbe može potrajati nekoliko minuta.

Kada je izrada gotova, možete pokrenuti okruženje u pozadinskom načinu rada sa:

```baš
docker sastaviti -d
```

Sada ćemo pokrenuti `composer install` da instaliramo ovisnosti aplikacije:

```baš
docker compose exec app skladatelj instalacija
```

Kopirajte postavke okruženja:

```baš
docker compose exec app cp .env.local .env
```

Postavite ključ za šifriranje pomoću alata naredbenog retka `artisan` Laravel:

```baš
docker compose exec app ./artisan key:generate --ansi
```

Migracija lažnih podataka baze podataka i sjemena:

```baš
docker compose exec app ./artisan migrate:fresh --seed
```

I dodajte admin korisnika Filamenta:

```baš
docker compose exec app ./artisan make:filament-user
```

I otvorite http://127.0.0.1:8000 u svom omiljenom pregledniku. Sretno korištenje Laravel bloga!

## Kako ući u kontejner?

Pristup Docker spremniku:

```baš
docker exec -ti laravel-blog-app bash
```

## Licenca

Ovo je softver otvorenog koda licenciran pod [MIT licencom](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub izdanje](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licenca](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
