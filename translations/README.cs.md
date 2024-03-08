![Blog Laravel s panelem správce Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Blog Laravel s administračním panelem Filament

Toto je projekt úvodní sady blogu [Laravel](https://laravel.com) s panelem administrátora [Filament](https://filamentphp.com).

Cílem tohoto úložiště je předvést dobré postupy vývoje [Laravel](https://laravel.com) pomocí jednoduché aplikace.

## Funkce

- 📚 Vytváření a úprava příspěvků
- 🥑 Kategorie
- 🔥 Oblíbené příspěvky
- 🎉 Admin panel postavený na [Filament](https://filamentphp.com)

## Vyžadování funkcí

Otevřete [nové číslo](https://github.com/gomzyakov/laravel-blog/issues/new) a požádejte o funkci (nebo pokud najdete chybu).

## Jak spustit blog lokálně?

Naklonujte projekt:

``` bash
git klon git@github.com:gomzyakov/laravel-blog.git
```

Věřím, že Docker již máte nainstalovaný. Pokud ne, udělejte to na [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) nebo [Linux](https://docs.docker.com/desktop/install/linux-install/).

Vytvořte obrázek `laravel-blog` pomocí následujícího příkazu:

``` bash
docker compose build --no-cache
```

>Dokončení tohoto příkazu může trvat několik minut.

Po dokončení sestavení můžete prostředí spustit v režimu na pozadí pomocí:

``` bash
docker skládat -d
```

Nyní spustíme `composer install` pro instalaci závislostí aplikace:

``` bash
docker compose exec app skladatel nainstalovat
```

Zkopírujte nastavení prostředí:

``` bash
docker compose exec app cp .env.local .env
```

Nastavte šifrovací klíč pomocí nástroje příkazového řádku `artisan` Laravel:

``` bash
docker compose exec app ./artisan key:generate --ansi
```

Migrujte DB a falešná data:

``` bash
docker compose exec app ./artisan migrate:fresh --seed
```

A přidejte uživatele Filament admin:

``` bash
docker compose exec app ./artisan make:filament-user
```

A otevřete http://127.0.0.1:8000 ve svém oblíbeném prohlížeči. Hodně štěstí s používáním blogu Laravel!

## Jak se dostat do kontejneru?

Přístup ke kontejneru Docker:

``` bash
docker exec -ti laravel-blog-app bash
```

## Licence

Toto je software s otevřeným zdrojovým kódem licencovaný pod [licence MIT] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Vydání GitHubu](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licence](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
