>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Este ficheiro debe actualizarse para que coincida co ficheiro README [inglés](/README.md).

![Blogue de Laravel co panel de administración de Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Blog de Laravel con panel de administración de Filament

Este é o proxecto do kit de inicio do blog [Laravel](https://laravel.com) co panel de administración de [Filament](https://filamentphp.com).

O obxectivo deste repositorio é mostrar boas prácticas de desenvolvemento de [Laravel](https://laravel.com) cunha aplicación sinxela.

## Características

- 📚 Creación e edición de publicacións
- 🥑 Categorías
- 🔥 Publicacións populares
- 🎉 Panel de administración construído en [Filament](https://filamentphp.com)

## Solicitando funcións

Abre un [nuevo número](https://github.com/gomzyakov/laravel-blog/issues/new) para solicitar unha función (ou se atopas un erro).

## Como executar o blog localmente?

Clonar o proxecto:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Creo que xa tes Docker instalado. Se non, faino en [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) ou [Linux](https://docs.docker.com/desktop/install/linux-install/).

Constrúe a imaxe `laravel-blog` co seguinte comando:

```bash
docker compose build --no-cache
```

> Este comando pode tardar uns minutos en completarse.

Cando remate a compilación, pode executar o ambiente en modo de fondo con:

```bash
docker compose up -d
```

Agora executaremos `composer install` para instalar as dependencias da aplicación:

```bash
docker compose exec app composer install
```

Copia a configuración do entorno:

```bash
docker compose exec app cp .env.local .env
```

Establece a clave de cifrado coa ferramenta de liña de comandos Laravel `artisan`:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Migra datos falsos de base de datos e sementes:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

E abre http://127.0.0.1:8000 no teu navegador favorito. Feliz usando Laravel Blog!

## Como entrar no contedor?

Acceso ao contedor Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Licenza

Este é un software de código aberto licenciado baixo a [Licenza MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Versión de GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licenza](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
