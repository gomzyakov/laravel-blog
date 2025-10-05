>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[ইংরেজি](/README.md) README ফাইলের সাথে মেলে এই ফাইলটিকে আপডেট করতে হবে।

![ফিলামেন্ট অ্যাডমিন প্যানেল সহ লারাভেল ব্লগ](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# ফিলামেন্ট অ্যাডমিন প্যানেল সহ লারাভেল ব্লগ

এটি হল [Laravel](https://laravel.com) [Filament](https://filamentphp.com) অ্যাডমিন প্যানেলের সাথে ব্লগ স্টার্টার কিট প্রকল্প।

এই রিপোজিটরির লক্ষ্য হল একটি সহজ অ্যাপ্লিকেশনের মাধ্যমে ভালো [Laravel](https://laravel.com) উন্নয়ন অনুশীলন দেখানো।

## বৈশিষ্ট্য

- 📚 পোস্ট তৈরি করা এবং সম্পাদনা করা
- 🥑 বিভাগ
- 🔥 জনপ্রিয় পোস্ট
- 🎉 [ফিলামেন্ট](https://filamentphp.com) এ তৈরি অ্যাডমিন প্যানেল

## বৈশিষ্ট্যগুলি অনুরোধ করা

একটি বৈশিষ্ট্যের অনুরোধ করতে একটি [নতুন সমস্যা](https://github.com/gomzyakov/laravel-blog/issues/new) খুলুন (অথবা যদি আপনি একটি বাগ খুঁজে পান)।

## কিভাবে স্থানীয়ভাবে ব্লগ চালাবেন?

প্রকল্প ক্লোন করুন:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

আমি বিশ্বাস করি আপনি ইতিমধ্যে ডকার ইনস্টল করেছেন। যদি না হয়, শুধু [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) এ এটি করুন -ইনস্টল/) বা [লিনাক্স](https://docs.docker.com/desktop/install/linux-install/)।

নিম্নলিখিত কমান্ড দিয়ে `laravel-blog` ইমেজ তৈরি করুন:

```bash
docker compose build --no-cache
```

> এই কমান্ডটি সম্পূর্ণ হতে কয়েক মিনিট সময় লাগতে পারে।

বিল্ড শেষ হলে, আপনি এর সাথে পটভূমি মোডে পরিবেশ চালাতে পারেন:

```bash
docker compose up -d
```

আমরা এখন অ্যাপ্লিকেশন নির্ভরতা ইনস্টল করতে `composer install` চালাব:

```bash
docker compose exec app composer install
```

পরিবেশ সেটিংস অনুলিপি করুন:

```bash
docker compose exec app cp .env.local .env
```

`artisan` লারাভেল কমান্ড-লাইন টুল দিয়ে এনক্রিপশন কী সেট করুন:

```bash
docker compose exec app ./artisan key:generate --ansi
```

DB এবং বীজ জাল ডেটা মাইগ্রেট করুন:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

এবং আপনার প্রিয় ব্রাউজারে http://127.0.0.1:8000 খুলুন। Laravel ব্লগ ব্যবহার করে খুশি!

## কন্টেইনারের ভিতরে কিভাবে প্রবেশ করবেন?

ডকার কন্টেইনারে অ্যাক্সেস:

```bash
docker exec -ti laravel-blog-app bash
```

## লাইসেন্স

এটি [MIT লাইসেন্স](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) এর অধীনে লাইসেন্সকৃত ওপেন-সোর্স সফ্টওয়্যার।


[![GitHub প্রকাশ](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![লাইসেন্স](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ লারাভেল-ব্লগ)
