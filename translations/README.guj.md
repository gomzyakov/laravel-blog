>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[અંગ્રેજી](/README.md) README ફાઇલ સાથે મેચ કરવા માટે આ ફાઇલને અપડેટ કરવાની જરૂર છે.

![ફિલામેન્ટ એડમિન પેનલ સાથે લારેવેલ બ્લોગ](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# ફિલામેન્ટ એડમિન પેનલ સાથે Laravel બ્લોગ

આ [Filament](https://filamentphp.com) એડમિન પેનલ સાથેનો [Laravel](https://laravel.com) બ્લોગ સ્ટાર્ટર કિટ પ્રોજેક્ટ છે.

આ રીપોઝીટરીનો ધ્યેય એક સરળ એપ્લિકેશન સાથે સારી [Laravel](https://laravel.com) વિકાસ પદ્ધતિઓનું પ્રદર્શન કરવાનો છે.

## વિશેષતા

- 📚 પોસ્ટ્સ બનાવવી અને સંપાદિત કરવી
- 🥑 શ્રેણીઓ
- 🔥 લોકપ્રિય પોસ્ટ્સ
- 🎉 એડમિન પેનલ [ફિલામેન્ટ](https://filamentphp.com) પર બનેલ છે.

## સુવિધાઓની વિનંતી

સુવિધાની વિનંતી કરવા માટે [નવી સમસ્યા](https://github.com/gomzyakov/laravel-blog/issues/new) ખોલો (અથવા જો તમને બગ મળે તો).

## સ્થાનિક રીતે બ્લોગ કેવી રીતે ચલાવવો?

પ્રોજેક્ટને ક્લોન કરો:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

હું માનું છું કે તમે પહેલાથી જ ડોકર ઇન્સ્ટોલ કરેલ છે. જો નહીં, તો તે ફક્ત [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) પર કરો -install/) અથવા [Linux](https://docs.docker.com/desktop/install/linux-install/).

નીચેના આદેશ સાથે `laravel-blog` ઇમેજ બનાવો:

```bash
docker compose build --no-cache
```

>આ આદેશને પૂર્ણ થવામાં થોડી મિનિટો લાગી શકે છે.

જ્યારે બિલ્ડ સમાપ્ત થાય, ત્યારે તમે પર્યાવરણને પૃષ્ઠભૂમિ મોડમાં આની સાથે ચલાવી શકો છો:

```bash
docker compose up -d
```

એપ્લિકેશન નિર્ભરતાને ઇન્સ્ટોલ કરવા માટે હવે અમે `composer install` ચલાવીશું:

```bash
docker compose exec app composer install
```

પર્યાવરણ સેટિંગ્સની નકલ કરો:

```bash
docker compose exec app cp .env.local .env
```

`artisan` લારેવેલ કમાન્ડ-લાઇન ટૂલ સાથે એન્ક્રિપ્શન કી સેટ કરો:

```bash
docker compose exec app ./artisan key:generate --ansi
```

DB અને બીજ નકલી ડેટા સ્થાનાંતરિત કરો:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

અને ફિલામેન્ટ એડમિન વપરાશકર્તા ઉમેરો:

```bash
docker compose exec app ./artisan make:filament-user
```

અને તમારા મનપસંદ બ્રાઉઝરમાં http://127.0.0.1:8000 ખોલો. Laravel બ્લોગનો ઉપયોગ કરીને ખુશ!

## કન્ટેનરની અંદર કેવી રીતે પ્રવેશવું?

ડોકર કન્ટેનરની ઍક્સેસ:

```bash
docker exec -ti laravel-blog-app bash
```

## લાઇસન્સ

આ [MIT લાયસન્સ](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) હેઠળ લાઇસન્સ પ્રાપ્ત ઓપન-સોર્સ સોફ્ટવેર છે.


[![GitHub રિલીઝ](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![લાઈસન્સ](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ લારેવેલ-બ્લોગ)
