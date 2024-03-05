![Blog Laravel dengan panel admin Filament](../docs/social-preview-en.png)

# Blog Laravel dengan panel admin Filament

Ini adalah proyek starter kit blog [Laravel](https://laravel.com) dengan panel admin [Filament](https://filamentphp.com).

Tujuan dari repositori ini adalah untuk menampilkan praktik pengembangan [Laravel](https://laravel.com) yang baik dengan aplikasi sederhana.

## Fitur

- 📚 Membuat dan mengedit postingan
- 🥑 Kategori
- :fire: Postingan populer
- :hatched_chick: Panel admin dibangun di atas [Filamen](https://filamentphp.com)

## Meminta fitur

Buka [edisi baru](https://github.com/gomzyakov/laravel-blog/issues/new) untuk meminta fitur (atau jika Anda menemukan bug).

## Bagaimana cara menjalankan blog secara lokal?

Kloning proyek:

``` pesta
git clone git@github.com:gomzyakov/laravel-blog.git
```

Saya yakin Anda sudah menginstal Docker. Jika tidak, lakukan saja di [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) atau [Linux](https://docs.docker.com/desktop/install/linux-install/).

Bangun image `laravel-blog` dengan perintah berikut:

``` pesta
buruh pelabuhan menulis build --no-cache
```

>Perintah ini mungkin memerlukan waktu beberapa menit untuk diselesaikan.

Ketika pembangunan selesai, Anda dapat menjalankan lingkungan dalam mode latar belakang dengan:

``` pesta
buruh pelabuhan menyusun -d
```

Sekarang kita akan menjalankan `composer install` untuk menginstal dependensi aplikasi:

``` pesta
buruh pelabuhan menulis instalasi komposer aplikasi exec
```

Salin pengaturan lingkungan:

``` pesta
buruh pelabuhan menulis aplikasi exec cp .env.local .env
```

Setel kunci enkripsi dengan alat baris perintah `artisan` Laravel:

``` pesta
buruh pelabuhan menulis aplikasi exec ./artisan key:generate --ansi
```

Migrasikan data palsu DB & seed:

``` pesta
buruh pelabuhan menulis aplikasi exec ./artisan migrasi:segar --seed
```

Dan tambahkan pengguna admin Filament:

``` pesta
buruh pelabuhan menulis aplikasi exec ./artisan make:filament-user
```

Dan buka http://127.0.0.1:8000 di browser favorit Anda. Selamat menggunakan Laravel Blog!

## Bagaimana cara masuk ke dalam wadah?

Akses ke wadah Docker:

``` pesta
docker exec -ti laravel-blog-aplikasi bash
```

## Lisensi

Ini adalah perangkat lunak sumber terbuka yang dilisensikan di bawah [Lisensi MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Rilis GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![lisensi](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)