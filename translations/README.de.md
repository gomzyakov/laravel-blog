![Laravel-Blog mit Filament-Admin-Panel](../docs/social-preview-en.png)

# Laravel-Blog mit Filament-Admin-Panel

Dies ist das Blog-Starterkit-Projekt von [Laravel](https://laravel.com) mit dem Admin-Panel von [Filament](https://filamentphp.com).

Das Ziel dieses Repositorys ist es, gute [Laravel](https://laravel.com) Entwicklungspraktiken mit einer einfachen Anwendung zu präsentieren.

## Merkmale

- 📚 Beiträge erstellen und bearbeiten
- 🥑 Kategorien
- :fire: Beliebte Beiträge
- :hatched_chick: Admin-Panel basierend auf [Filament](https://filamentphp.com)

## Anfordern von Funktionen

Öffnen Sie eine [neue Ausgabe](https://github.com/gomzyakov/laravel-blog/issues/new), um eine Funktion anzufordern (oder wenn Sie einen Fehler finden).

## Wie kann ich einen Blog lokal ausführen?

Klonen Sie das Projekt:

„Bash
Git-Klon git@github.com:gomzyakov/laravel-blog.git
„

Ich glaube, Sie haben Docker bereits installiert. Wenn nicht, machen Sie es einfach auf [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) oder [Linux](https://docs.docker.com/desktop/install/linux-install/).

Erstellen Sie das „laravel-blog“-Image mit dem folgenden Befehl:

„Bash
Docker Compose Build --no-cache
„

>Die Ausführung dieses Befehls kann einige Minuten dauern.

Wenn der Build abgeschlossen ist, können Sie die Umgebung im Hintergrundmodus ausführen mit:

„Bash
Docker komponieren -d
„

Wir führen nun „composer install“ aus, um die Anwendungsabhängigkeiten zu installieren:

„Bash
Docker Compose Exec App Composer installieren
„

Kopieren Sie die Umgebungseinstellungen:

„Bash
Docker Compose Exec App CP .env.local .env
„

Legen Sie den Verschlüsselungsschlüssel mit dem Laravel-Befehlszeilentool „artisan“ fest:

„Bash
Docker Compose Exec App ./Artisan Key:generate --ansi
„

DB migrieren und Fake-Daten säen:

„Bash
Docker Compose Exec App ./artisan migrate:fresh --seed
„

Und fügen Sie den Filament-Administratorbenutzer hinzu:

„Bash
Docker Compose Exec App ./artisan make:filament-user
„

Und öffnen Sie http://127.0.0.1:8000 in Ihrem Lieblingsbrowser. Viel Freude mit Laravel Blog!

## Wie komme ich in den Container?

Zugriff auf den Docker-Container:

„Bash
docker exec -ti laravel-blog-app bash
„

## Lizenz

Dabei handelt es sich um Open-Source-Software, die unter der [MIT-Lizenz](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) lizenziert ist.


[![GitHub-Veröffentlichung](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![Lizenz](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ Laravel-Blog)