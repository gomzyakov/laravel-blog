>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>File ini perlu diperbarui agar cocok dengan file README [bahasa inggris](/README.md).

![Blog Laravel dengan panel admin Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Blog Laravel dengan panel admin Filament

Ini adalah proyek starter kit blog [Laravel](https://laravel.com) dengan panel admin [Filament](https://filamentphp.com).

Tujuan dari repositori ini adalah untuk menampilkan praktik pengembangan [Laravel](https://laravel.com) yang baik dengan aplikasi sederhana.

## Fitur

- 📚 Membuat dan mengedit postingan
- 🥑 Kategori
- 🔥 Postingan populer
- 🎉 Panel admin dibangun di atas [Filamen](https://filamentphp.com)

## Meminta fitur

Buka [edisi baru](https://github.com/gomzyakov/laravel-blog/issues/new) untuk meminta fitur (atau jika Anda menemukan bug).

## Bagaimana cara menjalankan blog secara lokal?

Kloning proyek:

``` bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Saya yakin Anda sudah menginstal Docker. Jika tidak, lakukan saja di [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) atau [Linux](https://docs.docker.com/desktop/install/linux-install/).

Bangun image `laravel-blog` dengan perintah berikut:

```bash
docker compose build --no-cache
```

>Perintah ini mungkin memerlukan waktu beberapa menit untuk diselesaikan.

Ketika pembangunan selesai, Anda dapat menjalankan lingkungan dalam mode latar belakang dengan:

```bash
docker compose up -d
```

Sekarang kita akan menjalankan `composer install` untuk menginstal dependensi aplikasi:

```bash
docker compose exec app composer install
```

Salin pengaturan lingkungan:

```bash
docker compose exec app cp .env.local .env
```

Setel kunci enkripsi dengan alat baris perintah `artisan` Laravel:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Migrasikan data palsu DB & seed:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

Dan tambahkan pengguna admin Filament:

``` bash
docker compose exec app ./artisan make:filament-user
```

Dan buka http://127.0.0.1:8000 di browser favorit Anda. Selamat menggunakan Laravel Blog!

## Bagaimana cara masuk ke dalam wadah?

Akses ke wadah Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Lisensi

Ini adalah perangkat lunak sumber terbuka yang dilisensikan di bawah [Lisensi MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Rilis GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![lisensi](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
