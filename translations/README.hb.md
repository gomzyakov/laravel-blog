![בלוג Laravel עם פאנל ניהול Filament](../docs/social-preview-en.png)

# בלוג Laravel עם פאנל ניהול Filament

זהו פרויקט ערכת ההתחלה של הבלוג [Laravel](https://laravel.com) עם פאנל הניהול של [Filament](https://filamentphp.com).

המטרה של מאגר זה היא להציג שיטות פיתוח טובות של [Laravel](https://laravel.com) באמצעות אפליקציה פשוטה.

## מאפיינים

- 📚 יצירה ועריכה של פוסטים
- 🥑 קטגוריות
- :fire: פוסטים פופולריים
- :hatched_chick: פאנל ניהול בנוי על [Filament](https://filamentphp.com)

## מבקש תכונות

פתח [גיליון חדש](https://github.com/gomzyakov/laravel-blog/issues/new) כדי לבקש תכונה (או אם אתה מוצא באג).

## איך להפעיל בלוג באופן מקומי?

שכפול הפרויקט:

```באש
שיבוט git git@github.com:gomzyakov/laravel-blog.git
```

אני מאמין שכבר התקנת את Docker. אם לא, פשוט עשה זאת ב-[Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) או [Linux](https://docs.docker.com/desktop/install/linux-install/).

בנה את תמונת `laravel-blog` עם הפקודה הבאה:

```באש
docker compose build --no-cache
```

>הפקודה הזו עשויה להימשך מספר דקות.

לאחר סיום הבנייה, תוכל להפעיל את הסביבה במצב רקע עם:

```באש
docker compose up -d
```

כעת נריץ את 'התקנת מלחין' כדי להתקין את התלות באפליקציה:

```באש
docker compose exec app composer התקנת
```

העתק את הגדרות הסביבה:

```באש
docker compose exec app cp .env.local .env
```

הגדר מפתח הצפנה עם כלי שורת הפקודה 'ארטיזן' Laravel:

```באש
docker compose exec app ./artisan key:generate --ansi
```

העבר DB ונתונים מזויפים זרעים:

```באש
docker compose exec app ./artisan migrate:fresh --seed
```

והוסף משתמש מנהל Filament:

```באש
docker compose exec app ./artisan make:filament-user
```

ופתח את http://127.0.0.1:8000 בדפדפן המועדף עליך. שמח להשתמש בבלוג Laravel!

## איך להיכנס למיכל?

גישה למיכל Docker:

```באש
docker exec -ti laravel-blog-app bash
```

## רישיון

זוהי תוכנה בקוד פתוח ברישיון [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![מהדורת GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![רישיון](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)