>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[ଇଂରାଜୀ] (/ README.md) README ଫାଇଲ୍ ସହିତ ମେଳ ହେବା ପାଇଁ ଏହି ଫାଇଲ୍ ଅପଡେଟ୍ ହେବା ଆବଶ୍ୟକ |

! [ଫିଲାମେଣ୍ଟ ଆଡମିନ୍ ପ୍ୟାନେଲ୍ ସହିତ ଲାରାଭେଲ୍ ବ୍ଲଗ୍] (./ ଡକସ୍ / ସାମାଜିକ-ପୂର୍ବାବଲୋକନ- en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# ଫିଲାମେଣ୍ଟ ଆଡମିନ୍ ପ୍ୟାନେଲ୍ ସହିତ ଲାରାଭେଲ୍ ବ୍ଲଗ୍ |

ଏହା ହେଉଛି [ଲାରାଭେଲ୍] (https://laravel.com) ବ୍ଲଗ୍ ଷ୍ଟାର୍ଟର କିଟ୍ ପ୍ରୋଜେକ୍ଟ ସହିତ [ଫିଲାମାଣ୍ଟ] (https://filamentphp.com) ଆଡମିନ୍ ପ୍ୟାନେଲ୍ |

ଏହି ସଂଗ୍ରହାଳୟର ଲକ୍ଷ୍ୟ ହେଉଛି ଏକ ସରଳ ପ୍ରୟୋଗ ସହିତ ଭଲ [ଲାରାଭେଲ] (https://laravel.com) ବିକାଶ ଅଭ୍ୟାସ ପ୍ରଦର୍ଶନ କରିବା |

## ବ Features ଶିଷ୍ଟ୍ୟଗୁଡିକ

- 📚 ପୋଷ୍ଟଗୁଡିକ ସୃଷ୍ଟି ଏବଂ ସମ୍ପାଦନା |
- 🥑 ବର୍ଗଗୁଡିକ
- 🔥 ଲୋକପ୍ରିୟ ପୋଷ୍ଟଗୁଡିକ |
- 🎉 ଆଡମିନ୍ ପ୍ୟାନେଲ୍ [ଫିଲାମାଣ୍ଟ] ଉପରେ ନିର୍ମିତ (https://filamentphp.com)

## ବ features ଶିଷ୍ଟ୍ୟଗୁଡିକ ଅନୁରୋଧ |

ଏକ ବ feature ଶିଷ୍ଟ୍ୟ ଅନୁରୋଧ କରିବାକୁ (କିମ୍ବା ଯଦି ଆପଣ ଏକ ବଗ୍ ଖୋଜନ୍ତି) ଏକ ନୂତନ ବିଷୟ ଖୋଲନ୍ତୁ (https://github.com/gomzyakov/laravel-blog/issues/new) |

## ସ୍ଥାନୀୟ ଭାବରେ ବ୍ଲଗ୍ କିପରି ଚଲାଇବେ?

ପ୍ରକଳ୍ପକୁ କ୍ଲୋନ କରନ୍ତୁ:

```bash
git clone git@github.com: gomzyakov / laravel-blog.git
```

ମୁଁ ବିଶ୍ୱାସ କରେ ତୁମେ ପୂର୍ବରୁ ଡକର୍ ସଂସ୍ଥାପିତ କରିଛ | ଯଦି ନୁହେଁ, କେବଳ ଏହାକୁ [ମ୍ୟାକ୍] (https://docs.docker.com/desktop/install/mac-install/), [ୱିଣ୍ଡୋଜ୍] (https://docs.docker.com/desktop/install/windows) ରେ କରନ୍ତୁ | -install /) କିମ୍ବା [Linux] (https://docs.docker.com/desktop/install/linux-install/) |

ନିମ୍ନଲିଖିତ ନିର୍ଦ୍ଦେଶ ସହିତ `laravel-blog` ପ୍ରତିଛବି ନିର୍ମାଣ କରନ୍ତୁ:

```bash
docker compose build --no-cache
```

> ଏହି ନିର୍ଦ୍ଦେଶ ସଂପୂର୍ଣ୍ଣ ହେବାକୁ କିଛି ମିନିଟ୍ ନେଇପାରେ |

ଯେତେବେଳେ ନିର୍ମାଣ ସମାପ୍ତ ହେବ, ଆପଣ ପରିବେଶକୁ ପୃଷ୍ଠଭୂମି ମୋଡରେ ଚଲାଇପାରିବେ:

```bash
docker compose up -d
```

ଅନୁପ୍ରୟୋଗ ନିର୍ଭରଶୀଳତା ସଂସ୍ଥାପନ କରିବା ପାଇଁ ଆମେ ବର୍ତ୍ତମାନ `composer install` ଚଳାଇବୁ:

```bash
docker compose exec app composer install
```

ପରିବେଶ ସେଟିଂସମୂହକୁ କପି କରନ୍ତୁ:

```bash
docker compose exec app cp .env.local .env
```

`artisan` ଲାରାଭେଲ୍ କମାଣ୍ଡ୍ ଲାଇନ୍ ଟୁଲ୍ ସହିତ ଏନକ୍ରିପସନ୍ କୀ ସେଟ୍ କରନ୍ତୁ:

```bash
docker compose exec app ./artisan key:generate --ansi
```

DB ଏବଂ ବିହନ ନକଲି ତଥ୍ୟ ସ୍ଥାନାନ୍ତର କରନ୍ତୁ:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

ଏବଂ ଫିଲାମାଣ୍ଟ ଆଡମିନି ୟୁଜର୍ ଯୋଡନ୍ତୁ:

``` bash
docker compose exec app ./artisan make:filament-user
```

ଏବଂ ଆପଣଙ୍କର ପ୍ରିୟ ବ୍ରାଉଜରରେ http://127.0.0.1:8000 ଖୋଲନ୍ତୁ | ଲାରାଭେଲ୍ ବ୍ଲଗ୍ ବ୍ୟବହାର କରି ଖୁସି!

## ପାତ୍ର ଭିତରେ କିପରି ପ୍ରବେଶ କରିବେ?

ଡକର୍ ପାତ୍ରରେ ପ୍ରବେଶ:

```bash
docker exec -ti laravel-blog-app bash
```

## ଲାଇସେନ୍ସ

ଏହା [MIT ଲାଇସେନ୍ସ] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) ଅଧୀନରେ ଲାଇସେନ୍ସପ୍ରାପ୍ତ ଖୋଲା ସଫ୍ଟୱେର୍ |


[! [GitHub ପ୍ରକାଶନ] (https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)]
[! [ଲାଇସେନ୍ସ] (https://img.shields.io/badge/License-MIT-green.svg)]
[! [କୋଡେକୋଭ] ଲାରାଭେଲ୍-ବ୍ଲଗ୍)
