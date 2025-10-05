>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[ఇంగ్లీష్](/README.md) README ఫైల్‌తో సరిపోలడానికి ఈ ఫైల్ నవీకరించబడాలి.

![ఫిలమెంట్ అడ్మిన్ ప్యానెల్‌తో లారావెల్ బ్లాగ్](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# ఫిలమెంట్ అడ్మిన్ ప్యానెల్‌తో లారావెల్ బ్లాగ్

ఇది [Laravel](https://laravel.com) బ్లాగ్ స్టార్టర్ కిట్ ప్రాజెక్ట్ [Filament](https://filamentphp.com) అడ్మిన్ ప్యానెల్.

ఈ రిపోజిటరీ యొక్క లక్ష్యం ఒక సాధారణ అప్లికేషన్‌తో మంచి [Laravel](https://laravel.com) అభివృద్ధి పద్ధతులను ప్రదర్శించడం.

## లక్షణాలు

- 📚 పోస్ట్‌లను సృష్టించడం మరియు సవరించడం
- 🥑 వర్గాలు
- :ఫైర్: జనాదరణ పొందిన పోస్ట్‌లు
- 🎉 అడ్మిన్ ప్యానెల్ [ఫిలమెంట్](https://filamentphp.com)పై నిర్మించబడింది

## ఫీచర్లను అభ్యర్థిస్తోంది

లక్షణాన్ని అభ్యర్థించడానికి (లేదా మీరు బగ్‌ని కనుగొంటే) [కొత్త సంచిక](https://github.com/gomzyakov/laravel-blog/issues/new) తెరవండి.

## బ్లాగును స్థానికంగా ఎలా రన్ చేయాలి?

ప్రాజెక్ట్ను క్లోన్ చేయండి:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

మీరు ఇప్పటికే డాకర్ ఇన్‌స్టాల్ చేశారని నేను నమ్ముతున్నాను. కాకపోతే, దీన్ని [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows)లో చేయండి -install/) లేదా [Linux](https://docs.docker.com/desktop/install/linux-install/).

కింది ఆదేశంతో `laravel-blog` చిత్రాన్ని రూపొందించండి:

```bash
docker compose build --no-cache
```

>ఈ ఆదేశం పూర్తి కావడానికి కొన్ని నిమిషాలు పట్టవచ్చు.

బిల్డ్ పూర్తయినప్పుడు, మీరు దీనితో బ్యాక్‌గ్రౌండ్ మోడ్‌లో పర్యావరణాన్ని అమలు చేయవచ్చు:

```bash
docker compose up -d
```

అప్లికేషన్ డిపెండెన్సీలను ఇన్‌స్టాల్ చేయడానికి మేము ఇప్పుడు `composer install` ని అమలు చేస్తాము:

```bash
docker compose exec app composer install
```

పర్యావరణ సెట్టింగ్‌లను కాపీ చేయండి:

```bash
docker compose exec app cp .env.local .env
```

`artisan` లారావెల్ కమాండ్-లైన్ సాధనంతో ఎన్‌క్రిప్షన్ కీని సెట్ చేయండి:

```bash
docker compose exec app ./artisan key:generate --ansi
```

DB & సీడ్ నకిలీ డేటాను మైగ్రేట్ చేయండి:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

మరియు ఫిలమెంట్ అడ్మిన్ వినియోగదారుని జోడించండి:

```bash
docker compose exec app ./artisan make:filament-user
```

మరియు మీకు ఇష్టమైన బ్రౌజర్‌లో http://127.0.0.1:8000 తెరవండి. లారావెల్ బ్లాగ్‌ని ఉపయోగించడం సంతోషంగా ఉంది!

## కంటైనర్ లోపలికి ఎలా వెళ్లాలి?

డాకర్ కంటైనర్‌కు యాక్సెస్:

```bash
docker exec -ti laravel-blog-app bash
```

## లైసెన్స్

ఇది [MIT లైసెన్స్](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) కింద లైసెన్స్ పొందిన ఓపెన్ సోర్స్ సాఫ్ట్‌వేర్.


[![GitHub విడుదల](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ లారావెల్-బ్లాగ్)
