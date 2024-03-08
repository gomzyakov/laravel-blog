![ላራቬል ብሎግ ከፋላመንት አስተዳዳሪ ፓነል ጋር](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# የላራቭል ብሎግ ከፋይላመንት አስተዳዳሪ ፓነል ጋር

ይህ [ላራቬል](https://laravel.com) የብሎግ ጀማሪ ኪት ፕሮጀክት ከ[Filament](https://filamentphp.com) የአስተዳዳሪ ፓነል ጋር ነው።

የዚህ ማከማቻ ግብ ጥሩ [ላራቬል](https://laravel.com) የልማት ልምዶችን በቀላል መተግበሪያ ማሳየት ነው።

## ዋና መለያ ጸባያት

- 📚 ልጥፎችን መፍጠር እና ማስተካከል
- 🥑 ምድቦች
- 🔥 ታዋቂ ልጥፎች
- 🎉 የአስተዳዳሪ ፓነል በ [Filament] (https://filamentphp.com) ላይ የተገነባ

## የመጠየቅ ባህሪዎች

ባህሪን ለመጠየቅ (ወይም ሳንካ ካገኙ) [አዲስ እትም](https://github.com/gomzyakov/laravel-blog/issues/new) ይክፈቱ።

## ብሎግ በአገር ውስጥ እንዴት እንደሚሰራ?

ፕሮጀክቱን መዝጋት;

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

አስቀድመህ Docker እንደተጫነህ አምናለሁ። ካልሆነ፣ ልክ በ[Mac](https://docs.docker.com/desktop/install/mac-install/)፣ [Windows](https://docs.docker.com/desktop/install/windows) ላይ ያድርጉት። -install/) ወይም [Linux](https://docs.docker.com/desktop/install/linux-install/)።

በሚከተለው ትዕዛዝ የ«ላራቬል-ብሎግ» ምስልን ይገንቡ፡

```bash
docker compose build --ምንም-መሸጎጫ
```

> ይህ ትእዛዝ ለማጠናቀቅ ጥቂት ደቂቃዎችን ሊወስድ ይችላል።

ግንባታው ሲጠናቀቅ አካባቢውን በበስተጀርባ ሁነታ ማስኬድ ይችላሉ፡-

```bash
docker compose up -d
```

የመተግበሪያውን ጥገኞች ለመጫን አሁን `አቀናባሪ ጫን`ን እናስሄዳለን፡-

```bash
docker compose exec መተግበሪያ አቀናባሪ ጫን
```

የአካባቢ ቅንብሮችን ይቅዱ

`` ባሽ
docker compose exec መተግበሪያ cp .env.local .env
```

የምስጠራ ቁልፍን በ'አርቲስያን' Laravel የትዕዛዝ መስመር መሣሪያ ያቀናብሩ፡

`` ባሽ
docker compose exec መተግበሪያ ./artisan key: አመንጭ --ansi
```

ዲቢን እና የውሸት ዘርን ያዛውሩ

`` ባሽ
docker compose exec መተግበሪያ ./artisan migrate:fresh --ዘር
```

እና የFilament አስተዳዳሪ ተጠቃሚን ያክሉ፡-

`` ባሽ
docker compose exec መተግበሪያ ./artisan make:filament-user
```

እና በሚወዱት አሳሽ ውስጥ http://127.0.0.1:8000 ን ይክፈቱ። የላራቬል ብሎግ በመጠቀም ደስተኛ ነኝ!

## ወደ መያዣው ውስጥ እንዴት መግባት ይቻላል?

ወደ ዶከር መያዣው መድረስ;

`` ባሽ
docker exec -ti ላራቬል-ብሎግ-መተግበሪያ ባሽ
```

## ፈቃድ

ይህ በ[MIT ፈቃድ](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) ስር ፈቃድ ያለው ክፍት ምንጭ ሶፍትዌር ነው።


[![GitHub ልቀት](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ ላራቬል-ብሎግ)
