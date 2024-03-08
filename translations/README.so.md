![Laravel blog oo leh guddiga maamulka Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel blog oo leh guddiga maamulka Filament

Kani waa [Laravel](https://laravel.com) mashruuca xirmada bilawga ah ee blogka oo leh [Filament](https://filamentphp.com) guddiga maamulka.

Hadafka kaydkan waa in lagu soo bandhigo dhaqamada horumarineed ee wanaagsan [Laravel](https://laravel.com) oo wata codsi fudud.

## Astaamaha

- 📚 Abuuritaanka iyo tafatirka qoraallada
- 🥑 Qaybaha
-: dab: Qoraallada caanka ah
-🎉 Maamulka maamulka oo lagu dhisay [Filament](https://filamentphp.com)

## Codsiga sifooyinka

Fur [arrin cusub](https://github.com/gomzyakov/laravel-blog/issues/new) si aad u codsato muuqaal (ama haddii aad hesho cillad).

## Sidee loo socodsiiyaa blog gudaha?

Xir mashruuca:

`` bash
git clone git@github.com:gomzyakov/laravel-blog.git
``

Waxaan aaminsanahay in aad hore u rakibtay Docker Haddii kale, kaliya ku samee [Mac] (https://docs.docker.com/desktop/install/mac-install/), [Windows] (https://docs.docker.com/desktop/install/windows). -install/) ama [Linux] (https://docs.docker.com/desktop/install/linux-install/).

Ku dhis sawirka 'laravel-blog' amarkan soo socda:

`` bash
docker compose build --no-cache
``

>Amarkaan waxaa laga yaabaa inuu qaato dhowr daqiiqo in la dhammaystiro.

Marka dhismuhu dhammeeyo, waxaad ku socodsiin kartaa deegaanka qaab-dhismeedka:

`` bash
docker curiye -d
``

Waxaan hadda maamuli doonaa 'qalab laxamiistaha' si aan u rakibno ku-tiirsanaanta codsiga:

`` bash
docker compose exec app laxamiistaha rakib
``

Nuqul ka samee dejinta deegaanka:

`` bash
docker compose exec app cp .env.local .env
``

Ku deji furaha sirta ah qalabka 'artisan' Laravel:

`` bash
docker compose exec app ./artisan key:generate --ansi
``

Haajiro DB & abuurka xogta beenta ah:

`` bash
docker compose exec app ./artisan migrate:fresh --seed
``

Oo ku dar isticmaalaha maamulaha Filament:

`` bash
docker compose exec app ./artisan make:filament-user
``

Oo fur http://127.0.0.1:8000 browserka aad jeceshahay. Ku faraxsan isticmaalka Laravel Blog!

## Sidee loo geli karaa gudaha weelka?

Gelitaanka weelka Docker:

`` bash
docker exec -ti laravel-blog-app bash
``

## Shatiga

Kani waa software-fur furan oo shati ku leh [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub siideyn](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
