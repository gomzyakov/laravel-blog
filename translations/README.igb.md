![Blọọgụ Laravel nwere panel nchịkwa Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel blọọgụ nwere panel nchịkwa Filament

Nke a bụ [Laravel](https://laravel.com) blọgụ mmalite kit oru ngo nwere [Filament](https://filamentphp.com) nchịkwa nchịkwa.

Ebumnuche nke ebe nchekwa a bụ igosi ezi omume mmepe [Laravel](https://laravel.com) site na iji ngwa dị mfe.

## Akụkụ

- 📚 Mepụta na dezie posts
- 🥑 ngalaba
- 🔥 Ederede ndị ama ama
- 🎉 Ogwe nchịkwa wuru na [Filament](https://filamentphp.com)

## Arịrịọ atụmatụ

Mepee [okwu ọhụrụ](https://github.com/gomzyakov/laravel-blog/issues/new) iji rịọ atụmatụ (ma ọ bụ ọ bụrụ na ịchọta ahụhụ).

## Kedu ka esi agba blọgụ na mpaghara?

Mechie oru ngo:

`` bash
git clone git@github.com:gomzyakov/laravel-blog.git
``

Ekwenyere m na ị tinyela Docker. Ọ bụrụ na ọ bụghị, mee ya na [Mac] (https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows). -install/) ma ọ bụ [Linux] (https://docs.docker.com/desktop/install/linux-install/).

Jiri iwu a wuo ihe onyonyo 'laravel-blog':

`` bash
docker dere wuo --enweghị cache
``

> Iwu a nwere ike were nkeji ole na ole iji mechaa.

Mgbe emechara ihe owuwu a, ị nwere ike iji:

`` bash
docker dere elu -d
``

Anyị ga-agba ọsọ 'onye na-ede ihe install' iji wụnye ndabere ngwa:

`` bash
docker dere exec ngwa onye na-ede egwú wụnye
``

Detuo ntọala gburugburu:

`` bash
docker dere exec ngwa cp .env.local .env
``

Tọọ igodo nzuzo site na iji ngwa ahịrị iwu 'artisan' Laravel:

`` bash
docker dere exec ngwa ./artisan igodo: mepụta --ansi
``

Bugharịa DB & data adịgboroja mkpụrụ:

`` bash
docker dere exec ngwa ./artisan migrate:fresh --seed
``

Ma gbakwunye onye ọrụ nchịkwa Filament:

`` bash
docker dere exec ngwa ./artisan make:filament-user
``

Mepee http://127.0.0.1:8000 na ihe nchọgharị kacha amasị gị. Obi ụtọ na-eji Laravel Blog!

## Kedu ka esi esi banye n'ime akpa ahụ?

Ịbanye na akpa Docker:

`` bash
docker exec -ti laravel-blog-app bash
``

## Ikikere

Nke a bụ ngwanrọ mepere emepe nwere ikike n'okpuru [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Ntọhapụ GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![akwụkwọ ikike](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
