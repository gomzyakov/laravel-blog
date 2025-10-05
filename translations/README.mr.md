>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[इंग्रजी](/README.md) README फाइलशी जुळण्यासाठी ही फाइल अपडेट करणे आवश्यक आहे.

![फिलामेंट ॲडमिन पॅनेलसह लारवेल ब्लॉग](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# फिलामेंट ॲडमिन पॅनेलसह # Laravel ब्लॉग

हा [Laravel](https://laravel.com) [Filament](https://filamentphp.com) प्रशासक पॅनेलसह ब्लॉग स्टार्टर किट प्रकल्प आहे.

या भांडाराचे उद्दिष्ट हे आहे की एका साध्या ऍप्लिकेशनसह चांगल्या [Laravel](https://laravel.com) विकास पद्धती प्रदर्शित करणे.

## वैशिष्ट्ये

- 📚 पोस्ट तयार करणे आणि संपादित करणे
- 🥑 श्रेणी
- 🔥 लोकप्रिय पोस्ट
- 🎉 [फिलामेंट](https://filamentphp.com) वर तयार केलेले प्रशासन पॅनेल

## वैशिष्ट्यांची विनंती करत आहे

वैशिष्ट्याची विनंती करण्यासाठी (किंवा तुम्हाला बग आढळल्यास) [नवीन समस्या](https://github.com/gomzyakov/laravel-blog/issues/new) उघडा.

## ब्लॉग स्थानिक पातळीवर कसा चालवायचा?

प्रकल्प क्लोन करा:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

मला विश्वास आहे की तुम्ही आधीच डॉकर स्थापित केले आहे. नसल्यास, ते फक्त [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) वर करा -install/) किंवा [Linux](https://docs.docker.com/desktop/install/linux-install/).

खालील आदेशासह `laravel-blog` प्रतिमा तयार करा:

```bash
docker compose build --no-cache
```

>हा आदेश पूर्ण होण्यासाठी काही मिनिटे लागू शकतात.

बिल्ड पूर्ण झाल्यावर, तुम्ही पार्श्वभूमी मोडमध्ये पर्यावरण चालवू शकता:

```bash
docker compose up -d
```

आम्ही आता ऍप्लिकेशन अवलंबित्व स्थापित करण्यासाठी `composer install` चालवू:

```bash
docker compose exec app composer install
```

पर्यावरण सेटिंग्ज कॉपी करा:

```bash
docker compose exec app cp .env.local .env
```

`artisan` Laravel कमांड-लाइन टूलसह एन्क्रिप्शन की सेट करा:

```bash
docker compose exec app./artisan key:generate --ansi
```

DB आणि बियाणे बनावट डेटा स्थलांतरित करा:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

आणि फिलामेंट प्रशासक वापरकर्ता जोडा:

```bash
docker compose exec app./artisan make:filament-user
```

आणि तुमच्या आवडत्या ब्राउझरमध्ये http://127.0.0.1:8000 उघडा. Laravel ब्लॉग वापरून आनंद झाला!

## कंटेनरच्या आत कसे जायचे?

डॉकर कंटेनरमध्ये प्रवेश:

```bash
docker exec -ti laravel-blog-app bash
```

## परवाना

हे [MIT परवाना](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) अंतर्गत परवानाकृत मुक्त-स्रोत सॉफ्टवेअर आहे.


[![GitHub रिलीज](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![परवाना](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
