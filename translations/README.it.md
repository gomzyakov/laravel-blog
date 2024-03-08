![Blog Laravel con pannello di amministrazione di Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Blog Laravel con pannello di amministrazione di Filament

Questo è il progetto del kit di avvio del blog [Laravel](https://laravel.com) con il pannello di amministrazione [Filament](https://filamentphp.com).

L'obiettivo di questo repository è mostrare le buone pratiche di sviluppo di [Laravel](https://laravel.com) con una semplice applicazione.

## Caratteristiche

- 📚 Creazione e modifica dei post
- 🥑 Categorie
- 🔥 post popolari
- 🎉 pannello di amministrazione basato su [Filament](https://filamentphp.com)

## Richiesta di funzionalità

Apri un [nuovo numero](https://github.com/gomzyakov/laravel-blog/issues/new) per richiedere una funzionalità (o se trovi un bug).

## Come gestire il blog localmente?

Clonare il progetto:

"bash."
git clone git@github.com:gomzyakov/laravel-blog.git
```

Credo che tu abbia già installato Docker. In caso contrario, eseguilo su [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) o [Linux](https://docs.docker.com/desktop/install/linux-install/).

Costruisci l'immagine `laravel-blog` con il seguente comando:

"bash."
docker compose build --no-cache
```

>Il completamento di questo comando potrebbe richiedere alcuni minuti.

Al termine della compilazione, puoi eseguire l'ambiente in modalità background con:

"bash."
la finestra mobile compone -d
```

Ora eseguiremo "composer install" per installare le dipendenze dell'applicazione:

"bash."
docker compose installazione del compositore di app exec
```

Copia le impostazioni dell'ambiente:

"bash."
docker compose exec app cp .env.local .env
```

Imposta la chiave di crittografia con lo strumento da riga di comando "artisan" Laravel:

"bash."
docker compose exec app ./artisan key:generate --ansi
```

Migrazione del DB e seed di dati falsi:

"bash."
docker compose exec app ./artisan migrate:fresh --seed
```

E aggiungi l'utente amministratore di Filament:

"bash."
docker compose exec app ./artisan make:filament-user
```

E apri http://127.0.0.1:8000 nel tuo browser preferito. Felice di usare il blog Laravel!

## Come entrare nel contenitore?

Accesso al contenitore Docker:

"bash."
docker exec -ti laravel-blog-app bash
```

## Licenza

Questo è un software open source concesso in licenza con la [licenza MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Versione GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licenza](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ blog laravel)
