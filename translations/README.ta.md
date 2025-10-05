>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[ஆங்கிலம்](/README.md) README கோப்பைப் பொருத்த இந்தக் கோப்பு புதுப்பிக்கப்பட வேண்டும்.

![ஃபிலமென்ட் நிர்வாக குழுவுடன் லாராவெல் வலைப்பதிவு](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Filament நிர்வாக குழுவுடன் Laravel வலைப்பதிவு

இது [Laravel](https://laravel.com) [Filament](https://filamentphp.com) நிர்வாக குழுவுடன் கூடிய வலைப்பதிவு ஸ்டார்டர் கிட் திட்டம்.

இந்த களஞ்சியத்தின் குறிக்கோள், எளிய பயன்பாட்டுடன் நல்ல [Laravel](https://laravel.com) மேம்பாட்டு நடைமுறைகளை காட்சிப்படுத்துவதாகும்.

## அம்சங்கள்

- 📚 இடுகைகளை உருவாக்குதல் மற்றும் திருத்துதல்
- 🥑 வகைகள்
- 🔥 பிரபலமான பதிவுகள்
- 🎉 நிர்வாக குழு [Filament] (https://filamentphp.com) இல் கட்டப்பட்டது

## அம்சங்களைக் கோருகிறது

ஒரு அம்சத்தைக் கோர (அல்லது பிழையைக் கண்டால்) [புதிய சிக்கலை](https://github.com/gomzyakov/laravel-blog/issues/new) திறக்கவும்.

## வலைப்பதிவை உள்ளூரில் இயக்குவது எப்படி?

திட்டத்தை குளோன் செய்யுங்கள்:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

நீங்கள் ஏற்கனவே டோக்கரை நிறுவியுள்ளீர்கள் என்று நம்புகிறேன். இல்லையெனில், அதை [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) இல் செய்யுங்கள் -install/) அல்லது [Linux](https://docs.docker.com/desktop/install/linux-install/).

பின்வரும் கட்டளையுடன் `laravel-blog` படத்தை உருவாக்கவும்:

```bash
docker compose build --no-cache
```

>இந்த கட்டளையை முடிக்க சில நிமிடங்கள் ஆகலாம்.

உருவாக்கம் முடிந்ததும், நீங்கள் பின்னணி பயன்முறையில் சூழலை இயக்கலாம்:

```bash
docker compose up -d
```

ஆப்ஸ் சார்புகளை நிறுவ, இப்போது `composer install` இயக்குவோம்:

```bash
docker compose exec app composer install
```

சுற்றுச்சூழல் அமைப்புகளை நகலெடுக்கவும்:

```bash
docker compose exec app cp .env.local .env
```

`artisan` Laravel கட்டளை வரி கருவி மூலம் குறியாக்க விசையை அமைக்கவும்:

```bash
docker compose exec app ./artisan key:generate --ansi
```

DB & விதை போலித் தரவை நகர்த்தவும்:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

மற்றும் இழை நிர்வாக பயனரைச் சேர்க்கவும்:

```bash
docker compose exec app ./artisan make:filament-user
```

உங்களுக்குப் பிடித்த உலாவியில் http://127.0.0.1:8000ஐத் திறக்கவும். லாராவெல் வலைப்பதிவைப் பயன்படுத்துவதில் மகிழ்ச்சி!

## கொள்கலனுக்குள் செல்வது எப்படி?

டோக்கர் கொள்கலனுக்கான அணுகல்:

```bash
docker exec -ti laravel-blog-app bash
```

## உரிமம்

இது [MIT உரிமம்](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) கீழ் உரிமம் பெற்ற திறந்த மூல மென்பொருள்.


[![GitHub வெளியீடு](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
