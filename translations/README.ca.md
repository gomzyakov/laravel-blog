>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Aquest fitxer s'ha d'actualitzar per tal que coincideixi amb el fitxer README [anglès](/README.md).

![Bloc de Laravel amb panell d'administració de Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Bloc Laravel amb panell d'administració de Filament

Aquest és el projecte del kit d'inici del bloc [Laravel](https://laravel.com) amb el tauler d'administració de [Filament](https://filamentphp.com).

L'objectiu d'aquest repositori és mostrar bones pràctiques de desenvolupament [Laravel](https://laravel.com) amb una aplicació senzilla.

## Característiques

- 📚 Creació i edició de publicacions
- 🥑 Categories
- 🔥 Publicacions populars
- 🎉 Tauler d'administració construït a [Filament](https://filamentphp.com)

## Sol·licitud de funcions

Obriu un [nou número](https://github.com/gomzyakov/laravel-blog/issues/new) per sol·licitar una funció (o si trobeu un error).

## Com fer funcionar el bloc localment?

Clonar el projecte:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Crec que ja teniu Docker instal·lat. Si no, feu-ho a [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows). -install/) o [Linux](https://docs.docker.com/desktop/install/linux-install/).

Creeu la imatge `laravel-blog` amb l'ordre següent:

```bash
Docker compose build --no-cache
```

> Aquesta ordre pot trigar uns minuts a completar-se.

Quan s'hagi acabat la compilació, podeu executar l'entorn en mode de fons amb:

```bash
Docker composa -d
```

Ara executarem `composer install` per instal·lar les dependències de l'aplicació:

```bash
docker compose exec app composer install
```

Copieu la configuració de l'entorn:

```bash
docker compose exec app cp .env.local .env
```

Estableix la clau de xifratge amb l'eina de línia d'ordres Laravel `artisan`:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Migreu dades falses de base de dades i llavors:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

I obriu http://127.0.0.1:8000 al vostre navegador preferit. Feliç utilitzant Laravel Blog!

## Com entrar dins del contenidor?

Accés al contenidor Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Llicència

Aquest és un programari de codi obert amb llicència sota la [Llicència MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Versió de GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![llicència](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
