![ફિલામેન્ટ એડમિન પેનલ સાથે લારેવેલ બ્લોગ](../docs/social-preview-en.png)

ફિલામેન્ટ એડમિન પેનલ સાથે # Laravel બ્લોગ

આ [Filament](https://filamentphp.com) એડમિન પેનલ સાથેનો [Laravel](https://laravel.com) બ્લોગ સ્ટાર્ટર કિટ પ્રોજેક્ટ છે.

આ રીપોઝીટરીનો ધ્યેય એક સરળ એપ્લિકેશન સાથે સારી [Laravel](https://laravel.com) વિકાસ પદ્ધતિઓનું પ્રદર્શન કરવાનો છે.

## વિશેષતા

- 📚 પોસ્ટ્સ બનાવવી અને સંપાદિત કરવી
- 🥑 શ્રેણીઓ
- :fire: લોકપ્રિય પોસ્ટ્સ
- :hatched_chick: એડમિન પેનલ [ફિલામેન્ટ](https://filamentphp.com) પર બનેલ છે.

## સુવિધાઓની વિનંતી

સુવિધાની વિનંતી કરવા માટે [નવી સમસ્યા](https://github.com/gomzyakov/laravel-blog/issues/new) ખોલો (અથવા જો તમને બગ મળે તો).

## સ્થાનિક રીતે બ્લોગ કેવી રીતે ચલાવવો?

પ્રોજેક્ટને ક્લોન કરો:

``બાશ
git ક્લોન git@github.com:gomzyakov/laravel-blog.git
```

હું માનું છું કે તમે પહેલાથી જ ડોકર ઇન્સ્ટોલ કરેલ છે. જો નહીં, તો તે ફક્ત [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) પર કરો -install/) અથવા [Linux](https://docs.docker.com/desktop/install/linux-install/).

નીચેના આદેશ સાથે `laravel-blog` ઇમેજ બનાવો:

``બાશ
ડોકર કંપોઝ બિલ્ડ --નો-કેશ
```

>આ આદેશને પૂર્ણ થવામાં થોડી મિનિટો લાગી શકે છે.

જ્યારે બિલ્ડ સમાપ્ત થાય, ત્યારે તમે પર્યાવરણને પૃષ્ઠભૂમિ મોડમાં આની સાથે ચલાવી શકો છો:

``બાશ
ડોકર કમ્પોઝ અપ -ડી
```

એપ્લિકેશન નિર્ભરતાને ઇન્સ્ટોલ કરવા માટે હવે અમે `કંપોઝર ઇન્સ્ટોલ` ચલાવીશું:

``બાશ
docker compose exec એપ કંપોઝર ઇન્સ્ટોલ કરો
```

પર્યાવરણ સેટિંગ્સની નકલ કરો:

``બાશ
ડોકર કમ્પોઝ exec એપ્લિકેશન cp .env.local .env
```

'કારીગર' લારેવેલ કમાન્ડ-લાઇન ટૂલ સાથે એન્ક્રિપ્શન કી સેટ કરો:

``બાશ
ડોકર કમ્પોઝ એક્ઝિક એપ ./આર્ટિસન કી:જનરેટ --એનસી
```

DB અને બીજ નકલી ડેટા સ્થાનાંતરિત કરો:

``બાશ
ડોકર કમ્પોઝ એક્ઝિક એપ્લિકેશન ./ કારીગર સ્થળાંતર: તાજા -- બીજ
```

અને ફિલામેન્ટ એડમિન વપરાશકર્તા ઉમેરો:

``બાશ
ડોકર કમ્પોઝ એક્ઝિક એપ્લિકેશન ./ કારીગર મેક: ફિલામેન્ટ-યુઝર
```

અને તમારા મનપસંદ બ્રાઉઝરમાં http://127.0.0.1:8000 ખોલો. Laravel બ્લોગનો ઉપયોગ કરીને ખુશ!

## કન્ટેનરની અંદર કેવી રીતે પ્રવેશવું?

ડોકર કન્ટેનરની ઍક્સેસ:

``બાશ
docker exec -ti laravel-blog-app bash
```

## લાઇસન્સ

આ [MIT લાયસન્સ](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) હેઠળ લાઇસન્સ પ્રાપ્ત ઓપન-સોર્સ સોફ્ટવેર છે.


[![GitHub રિલીઝ](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![લાઈસન્સ](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ લારેવેલ-બ્લોગ)