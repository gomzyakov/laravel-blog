>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[အင်္ဂလိပ်](/README.md) README ဖိုင်နှင့် ကိုက်ညီစေရန် ဤဖိုင်ကို အပ်ဒိတ်လုပ်ရန် လိုအပ်ပါသည်။

![Filament admin panel ပါသော Laravel blog](/docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Filament admin panel ဖြင့် Laravel ဘလော့ဂ်

၎င်းသည် [Laravel](https://laravel.com) [Filament](https://filamentphp.com) အက်ဒ်မင်အကန့်ဖြင့် ဘလော့ဂ်စတင်သူကိရိယာပရောဂျက်ဖြစ်သည်။

ဤသိုလှောင်မှု၏ ရည်ရွယ်ချက်မှာ ရိုးရှင်းသော အပလီကေးရှင်းတစ်ခုဖြင့် ကောင်းမွန်သော [Laravel](https://laravel.com) ဖွံ့ဖြိုးတိုးတက်ရေး အလေ့အကျင့်များကို ပြသရန်ဖြစ်သည်။

## အင်္ဂါရပ်များ

- 📚 ပို့စ်များကို ဖန်တီးခြင်းနှင့် တည်းဖြတ်ခြင်း။
- 🥑 အမျိုးအစားများ
- 🔥 လူကြိုက်များသော ပို့စ်များ
- :hatched_chick- [Filament](https://filamentphp.com) တွင်တည်ဆောက်ထားသော စီမံခန့်ခွဲသူအကန့်

## တောင်းဆိုနေပါသည်။

အင်္ဂါရပ်တစ်ခုတောင်းဆိုရန် (သို့မဟုတ် ချွတ်ယွင်းချက်တွေ့ရှိပါက) [ပြဿနာအသစ်](https://github.com/gomzyakov/laravel-blog/issues/new) ကိုဖွင့်ပါ။

## ဘလော့ဂ်ကို ပြည်တွင်းမှာ ဘယ်လိုဖွင့်မလဲ။

ပရောဂျက်ကို ပွားပါ-

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

သင့်တွင် Docker ကို ထည့်သွင်းထားပြီးဖြစ်သည်ဟု ယုံကြည်ပါသည်။ မဟုတ်ပါက၊ [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows တွင်သာလုပ်ပါ။ -install/) သို့မဟုတ် [Linux](https://docs.docker.com/desktop/install/linux-install/)။

အောက်ပါ command ဖြင့် `laravel-blog` ပုံကို တည်ဆောက်ပါ။

```bash
docker compose build --no-cache
```

> ဤအမိန့်ကို အပြီးသတ်ရန် မိနစ်အနည်းငယ် ကြာနိုင်သည်။

တည်ဆောက်မှုပြီးသွားသောအခါ၊ သင်သည် ပတ်ဝန်းကျင်ကို နောက်ခံမုဒ်ဖြင့် လုပ်ဆောင်နိုင်သည်-

```bash
docker compose up -d
```

အပလီကေးရှင်းမှီခိုအားထားမှုများကို ထည့်သွင်းရန် `composer install` ကို ယခု ကျွန်ုပ်တို့ လုပ်ဆောင်ပါမည်။

```bash
docker compose exec app composer install
```

ပတ်ဝန်းကျင်ဆက်တင်များကို ကူးယူပါ-

```bash
docker compose exec app cp .env.local .env
```

`artisan` Laravel command-line tool ဖြင့် ကုဒ်ဝှက်ခြင်းကီးကို သတ်မှတ်ပါ-

```bash
docker compose exec app ./artisan key:generate --ansi
```

DB နှင့် မျိုးစေ့ဒေတာအတုကို ရွှေ့ပြောင်းပါ-

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

ပြီးလျှင် Filament admin user ကိုထည့်ပါ

```bash
docker compose exec app ./artisan make:filament-user
```

ပြီးလျှင် သင့်စိတ်ကြိုက် browser တွင် http://127.0.0.1:8000 ကိုဖွင့်ပါ။ Laravel Blog ကို အသုံးပြု၍ ပျော်ရွှင်ပါစေ။

## ကွန်တိန်နာထဲကို ဘယ်လိုဝင်ရမလဲ။

Docker ကွန်တိန်နာသို့ ဝင်ရောက်ခွင့်-

```bash
docker exec -ti laravel-blog-app bash
```

##လိုင်စင်

၎င်းသည် [MIT လိုင်စင်](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) အောက်တွင် လိုင်စင်ရ အခမဲ့အရင်းအမြစ်ဆော့ဖ်ဝဲဖြစ်သည်။


[![GitHub ထုတ်ဝေမှု](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![လိုင်စင်](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
