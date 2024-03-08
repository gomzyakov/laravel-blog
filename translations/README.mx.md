![Blog de Laravel con panel de administración de Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Blog de Laravel con panel de administración de Filament

Este es el proyecto del kit de inicio de blog [Laravel](https://laravel.com) con el panel de administración [Filament](https://filamentphp.com).

El objetivo de este repositorio es mostrar buenas prácticas de desarrollo de [Laravel](https://laravel.com) con una aplicación sencilla.

## Características

- 📚 Crear y editar publicaciones
- 🥑 Categorías
- 🔥 Publicaciones populares
- 🎉 panel de administración creado en [Filamento] (https://filamentphp.com)

## Solicitar funciones

Abra un [nuevo número](https://github.com/gomzyakov/laravel-blog/issues/new) para solicitar una función (o si encuentra un error).

## ¿Cómo ejecutar un blog localmente?

Clonar el proyecto:

```golpecito
clon de git git@github.com:gomzyakov/laravel-blog.git
```

Creo que ya tienes Docker instalado. Si no, hazlo en [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) o [Linux](https://docs.docker.com/desktop/install/linux-install/).

Construya la imagen `laravel-blog` con el siguiente comando:

```golpecito
compilación de composición de ventana acoplable --no-cache
```

>Este comando puede tardar unos minutos en completarse.

Cuando finalice la compilación, puede ejecutar el entorno en modo de fondo con:

```golpecito
ventana acoplable componer -d
```

Ahora ejecutaremos `composer install` para instalar las dependencias de la aplicación:

```golpecito
Instalación del compositor de la aplicación ejecutiva Docker Compose
```

Copie la configuración del entorno:

```golpecito
Docker compone la aplicación ejecutiva cp .env.local .env
```

Configure la clave de cifrado con la herramienta de línea de comandos Laravel "artesanal":

```golpecito
ventana acoplable componer aplicación ejecutiva ./clave artesanal: generar --ansi
```

Migrar bases de datos y generar datos falsos:

```golpecito
ventana acoplable componer aplicación ejecutiva ./fabricante migrar: fresco --seed
```

Y agregue el usuario administrador de Filament:

```golpecito
aplicación ejecutiva de composición acoplable ./fabricante artesanal: usuario de filamento
```

Y abre http://127.0.0.1:8000 en tu navegador favorito. ¡Feliz usando Laravel Blog!

## ¿Cómo entrar al contenedor?

Acceso al contenedor Docker:

```golpecito
ejecutivo de Docker -ti laravel-blog-app bash
```

## Licencia

Este es un software de código abierto con licencia [Licencia MIT] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Lanzamiento de GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licencia](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ blog-laravel)
