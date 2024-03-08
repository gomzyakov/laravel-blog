![Blogu ya Laravel iliyo na paneli ya msimamizi wa Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Blogu ya Laravel iliyo na paneli ya msimamizi wa Filament

Huu ni mradi wa [Laravel](https://laravel.com) wa kuanzisha blogu wenye paneli ya msimamizi wa [Filament](https://filamentphp.com).

Lengo la hazina hii ni kuonyesha mbinu nzuri za ukuzaji za [Laravel](https://laravel.com) kwa kutumia programu rahisi.

## Vipengele

- 📚 Kuunda na kuhariri machapisho
- 🥑 Kategoria
- :moto: Machapisho maarufu
- 🎉 Paneli ya msimamizi iliyojengwa kwa [Filament](https://filamentphp.com)

## Kuomba vipengele

Fungua [toleo jipya](https://github.com/gomzyakov/laravel-blog/issues/new) ili kuomba kipengele (au ukipata hitilafu).

## Jinsi ya kuendesha blogi ndani ya nchi?

Sambaza mradi:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Ninaamini tayari umeweka Docker. Ikiwa sivyo, ifanye tu kwenye [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) au [Linux](https://docs.docker.com/desktop/install/linux-install/).

Jenga picha ya `laravel-blog` kwa amri ifuatayo:

```bash
docker kutunga kujenga --no-cache
```

> Amri hii inaweza kuchukua dakika chache kukamilika.

Wakati ujenzi umekamilika, unaweza kuendesha mazingira katika hali ya nyuma na:

```bash
docker kutunga up -d
```

Sasa tutaendesha `kusakinisha mtunzi` ili kusakinisha vitegemezi vya programu:

```bash
docker kutunga exec usakinishaji wa mtunzi wa programu
```

Nakili mipangilio ya mazingira:

```bash
docker kutunga exec app cp .env.local .env
```

Weka ufunguo wa usimbaji fiche kwa zana ya mstari wa amri ya `artisan` Laravel:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Hamisha DB na data bandia ya mbegu:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

Na ongeza mtumiaji wa msimamizi wa Filament:

```bash
docker compose exec app ./artisan make:filament-user
```

Na ufungue http://127.0.0.1:8000 kwenye kivinjari chako unachopenda. Furahi kutumia Laravel Blog!

## Jinsi ya kuingia ndani ya chombo?

Ufikiaji wa chombo cha Docker:

```bash
docker exec -ti laravel-blog-app bash
```

# #Leseni

Hii ni programu huria iliyoidhinishwa chini ya [Leseni ya MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Toleo la GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![leseni](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
