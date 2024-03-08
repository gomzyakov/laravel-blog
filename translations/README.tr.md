![Filament yönetici panelli Laravel blogu](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Filament yönetici panelli Laravel blogu

Bu, [Filament](https://filamentphp.com) yönetici panelli [Laravel](https://laravel.com) blog başlangıç kiti projesidir.

Bu havuzun amacı basit bir uygulamayla iyi [Laravel](https://laravel.com) geliştirme uygulamalarını sergilemektir.

## Özellikler

- 📚 Gönderi oluşturma ve düzenleme
- 🥑 Kategoriler
- 🔥 Popüler gönderiler
- 🎉 [Filament](https://filamentphp.com) üzerine kurulu yönetici paneli

## Özellikler talep ediliyor

Bir özellik istemek için (veya bir hata bulursanız) bir [yeni sayı](https://github.com/gomzyakov/laravel-blog/issues/new) açın.

## Blog yerel olarak nasıl çalıştırılır?

Projeyi klonlayın:

``` bash
git klonu git@github.com:gomzyakov/laravel-blog.git
''''

Docker'ın zaten kurulu olduğuna inanıyorum. Değilse, bunu [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) üzerinde yapın. -install/) veya [Linux](https://docs.docker.com/desktop/install/linux-install/).

Aşağıdaki komutla 'laravel-blog' görüntüsünü oluşturun:

``` bash
liman işçisi oluşturma derlemesi --önbellek yok
''''

>Bu komutun tamamlanması birkaç dakika sürebilir.

Derleme tamamlandığında ortamı arka plan modunda aşağıdakilerle çalıştırabilirsiniz:

``` bash
liman işçisi oluştur -d
''''

Şimdi uygulama bağımlılıklarını yüklemek için `besteci kurulumunu' çalıştıracağız:

``` bash
liman işçisi oluşturma exec uygulama besteci yükleme
''''

Ortam ayarlarını kopyalayın:

``` bash
docker exec uygulamasını oluşturur cp .env.local .env
''''

Şifreleme anahtarını "artisan" Laravel komut satırı aracıyla ayarlayın:

``` bash
docker exec uygulamasını oluştur ./artisan anahtarı:generate --ansi
''''

Veritabanını ve tohum sahte verilerini taşıyın:

``` bash
docker exec uygulamasını oluştur ./artisan taşıma:fresh --seed
''''

Ve Filament yönetici kullanıcısını ekleyin:

``` bash
docker exec uygulamasını oluştur ./artisan make:filament-user
''''

Ve favori tarayıcınızda http://127.0.0.1:8000 adresini açın. Laravel Blog'u kullanmaktan mutluluk duyuyoruz!

## Konteynerin içine nasıl girilir?

Docker kapsayıcısına erişim:

``` bash
docker exec -ti laravel-blog-app bash
''''

## Lisans

Bu, [MIT Lisansı](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) kapsamında lisanslanan açık kaynaklı bir yazılımdır.


[![GitHub sürümü](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![lisans](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blogu)
