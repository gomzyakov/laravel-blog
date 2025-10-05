>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Гэты файл трэба абнавіць, каб ён адпавядаў [англійскай](/README.md) файлу README.

![Блог Laravel з панэллю адміністратара Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Блог Laravel з панэллю адміністратара Filament

Гэта [Laravel](https://laravel.com) праект пачатковага набору для блога з панэллю адміністратара [Filament](https://filamentphp.com).

Мэта гэтага сховішча - прадэманстраваць добрыя практыкі распрацоўкі [Laravel](https://laravel.com) з простым дадаткам.

## Асаблівасці

- 📚 Стварэнне і рэдагаванне паведамленняў
- 🥑 Катэгорыі
- 🔥 Папулярныя паведамленні
- 🎉 Панэль адміністратара пабудавана на [Filament](https://filamentphp.com)

## Запыт функцый

Адкрыйце [новы выпуск](https://github.com/gomzyakov/laravel-blog/issues/new), каб запытаць функцыю (або калі вы знойдзеце памылку).

## Як весці блог лакальна?

Кланаваць праект:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Я мяркую, што ў вас ужо ўсталяваны Docker. Калі няма, проста зрабіце гэта на [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) або [Linux](https://docs.docker.com/desktop/install/linux-install/).

Стварыце вобраз `laravel-blog` з дапамогай наступнай каманды:

```bash
docker compose build --no-cache
```

>Выкананне гэтай каманды можа заняць некалькі хвілін.

Калі зборка скончана, вы можаце запусціць асяроддзе ў фонавым рэжыме з:

```bash
docker compose up -d
```

Цяпер мы запусцім `composer install`, каб усталяваць залежнасці прыкладання:

```bash
docker compose exec app composer install
```

Скапіруйце налады асяроддзя:

```bash
docker compose exec app cp .env.local .env
```

Усталюйце ключ шыфравання з дапамогай інструмента каманднага радка `artisan` Laravel:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Перанос фальшывых даных БД і пачатка:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

І адкрыйце http://127.0.0.1:8000 у вашым любімым браўзеры. Шчаслівага выкарыстання блога Laravel!

## Як трапіць у кантэйнер?

Доступ да кантэйнера Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Ліцэнзія

Гэта праграмнае забеспячэнне з адкрытым зыходным кодам, ліцэнзаванае ў адпаведнасці з [ліцэнзіяй MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Выпуск GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![ліцэнзія](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-блог)
