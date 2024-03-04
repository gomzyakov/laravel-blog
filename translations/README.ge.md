![Laravel ბლოგი Filament-ის ადმინისტრაციული პანელით](../docs/social-preview-en.png)

# Laravel ბლოგი Filament ადმინისტრაციული პანელით

ეს არის [Laravel](https://laravel.com) ბლოგის შემქმნელის ნაკრების პროექტი [Filament](https://filamentphp.com) ადმინისტრაციული პანელით.

ამ საცავის მიზანია აჩვენოს კარგი [Laravel](https://laravel.com) განვითარების პრაქტიკა მარტივი აპლიკაციით.

## Მახასიათებლები

- 📚 პოსტების შექმნა და რედაქტირება
- 🥑 კატეგორიები
- :fire: პოპულარული პოსტები
- :hatched_chick: ადმინისტრატორის პანელი აგებულია [Filament]-ზე (https://filamentphp.com)

## ითხოვს ფუნქციებს

გახსენით [ახალი გამოცემა](https://github.com/gomzyakov/laravel-blog/issues/new) ფუნქციის მოთხოვნით (ან თუ იპოვით შეცდომას).

## როგორ გავუშვათ ბლოგი ლოკალურად?

პროექტის კლონირება:

``ბაშ
git კლონი git@github.com:gomzyakov/laravel-blog.git
```

მე მჯერა, რომ თქვენ უკვე გაქვთ Docker დაინსტალირებული. თუ არა, უბრალოდ გააკეთეთ ეს [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) ან [Linux] (https://docs.docker.com/desktop/install/linux-install/).

შექმენით `laravel-blog` სურათი შემდეგი ბრძანებით:

``ბაშ
docker compose build --no-cache
```

>ამ ბრძანებას შეიძლება რამდენიმე წუთი დასჭირდეს.

როდესაც კონსტრუქცია დასრულდება, შეგიძლიათ გარემო გაუშვათ ფონურ რეჟიმში:

``ბაშ
docker შედგენა up -d
```

ჩვენ ახლა გავუშვით "კომპოზიტორის ინსტალაცია" აპლიკაციის დამოკიდებულების დასაყენებლად:

``ბაშ
docker compose exec app კომპოზიტორის ინსტალაცია
```

დააკოპირეთ გარემოს პარამეტრები:

``ბაშ
docker compose exec app cp .env.local .env
```

დააყენეთ დაშიფვრის გასაღები `ხელოსანი` Laravel ბრძანების ხაზის ხელსაწყოთი:

``ბაშ
docker compose exec app ./artisan key:generate --ansi
```

DB-ის მიგრაცია და ყალბი მონაცემების დათესვა:

``ბაშ
docker compose exec app ./artisan migrate:fresh --seed
```

და დაამატეთ Filament ადმინისტრატორი:

``ბაშ
docker compose exec app ./artisan make:filament-user
```

და გახსენით http://127.0.0.1:8000 თქვენს საყვარელ ბრაუზერში. სასიამოვნოა Laravel ბლოგის გამოყენება!

## როგორ შევიდეთ კონტეინერში?

Docker კონტეინერზე წვდომა:

``ბაშ
docker exec -ti laravel-blog-app bash
```

## ლიცენზია

ეს არის ღია პროგრამული უზრუნველყოფა, რომელიც ლიცენზირებულია [MIT ლიცენზიით] (https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub-ის გამოშვება](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![ლიცენზია](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)