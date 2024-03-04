![Блог Laravel з панэллю адміністратара Filament](../docs/social-preview-en.png)

# Блог Laravel з панэллю адміністратара Filament

Гэта [Laravel](https://laravel.com) праект пачатковага набору для блога з панэллю адміністратара [Filament](https://filamentphp.com).

Мэта гэтага сховішча - прадэманстраваць добрыя практыкі распрацоўкі [Laravel](https://laravel.com) з простым дадаткам.

## Асаблівасці

- 📚 Стварэнне і рэдагаванне паведамленняў
- 🥑 Катэгорыі
- :fire: Папулярныя паведамленні
- :hatched_chick: Панэль адміністратара пабудавана на [Filament](https://filamentphp.com)

## Запыт функцый

Адкрыйце [новы выпуск](https://github.com/gomzyakov/laravel-blog/issues/new), каб запытаць функцыю (або калі вы знойдзеце памылку).

## Як весці блог лакальна?

Кланаваць праект:

```баш
git клон git@github.com:gomzyakov/laravel-blog.git
```

Я мяркую, што ў вас ужо ўсталяваны Docker. Калі няма, проста зрабіце гэта на [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) або [Linux](https://docs.docker.com/desktop/install/linux-install/).

Стварыце вобраз `laravel-blog` з дапамогай наступнай каманды:

```баш
docker compose build --no-cache
```

>Выкананне гэтай каманды можа заняць некалькі хвілін.

Калі зборка скончана, вы можаце запусціць асяроддзе ў фонавым рэжыме з:

```баш
докер скласці -d
```

Цяпер мы запусцім `composer install`, каб усталяваць залежнасці прыкладання:

```баш
docker compose exec app composer install
```

Скапіруйце налады асяроддзя:

```баш
docker compose exec app cp .env.local .env
```

Усталюйце ключ шыфравання з дапамогай інструмента каманднага радка `artisan` Laravel:

```баш
docker compose exec app ./artisan key:generate --ansi
```

Перанос фальшывых даных БД і пачатка:

```баш
docker compose exec app ./artisan migrate:fresh --seed
```

І дадайце карыстальніка адміністратара Filament:

```баш
docker compose exec app ./artisan make:filament-user
```

І адкрыйце http://127.0.0.1:8000 у вашым любімым браўзеры. Шчаслівага выкарыстання блога Laravel!

## Як трапіць у кантэйнер?

Доступ да кантэйнера Docker:

```баш
docker exec -ti laravel-blog-app bash
```

## Ліцэнзія

Гэта праграмнае забеспячэнне з адкрытым зыходным кодам, ліцэнзаванае ў адпаведнасці з [ліцэнзіяй MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Выпуск GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![ліцэнзія](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-блог)