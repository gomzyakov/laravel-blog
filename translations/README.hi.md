>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[अंग्रेज़ी](/README.md) README फ़ाइल से मिलान करने के लिए इस फ़ाइल को अद्यतन करने की आवश्यकता है।

![फिलामेंट एडमिन पैनल के साथ लारवेल ब्लॉग](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# फिलामेंट एडमिन पैनल के साथ # लारवेल ब्लॉग

यह [लारवेल](https://laravel.com) ब्लॉग स्टार्टर किट प्रोजेक्ट है जिसमें [फिलामेंट](https://filamentphp.com) एडमिन पैनल है।

इस रिपॉजिटरी का लक्ष्य एक सरल एप्लिकेशन के साथ अच्छी [लारवेल](https://laravel.com) विकास प्रथाओं का प्रदर्शन करना है।

## विशेषताएँ

- 📚 पोस्ट बनाना और संपादित करना
- 🥑श्रेणियाँ
- :आग: लोकप्रिय पोस्ट
- 🎉 एडमिन पैनल [फिलामेंट](https://filamentphp.com) पर बनाया गया है

## सुविधाओं का अनुरोध करना

किसी सुविधा का अनुरोध करने के लिए (या यदि आपको कोई बग मिलता है) तो एक [नया अंक](https://github.com/gomzyakov/laravel-blog/issues/new) खोलें।

## ब्लॉग को स्थानीय स्तर पर कैसे चलाएं?

प्रोजेक्ट को क्लोन करें:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

मेरा मानना है कि आपके पास पहले से ही डॉकर स्थापित है। यदि नहीं, तो बस इसे [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows) पर करें -इंस्टॉल/) या [लिनक्स](https://docs.docker.com/desktop/install/linux-install/)।

निम्नलिखित कमांड के साथ `laravel-blog` छवि बनाएं:

```bash
docker compose build --no-cache
```

>इस आदेश को पूरा होने में कुछ मिनट लग सकते हैं।

जब निर्माण पूरा हो जाता है, तो आप पर्यावरण को पृष्ठभूमि मोड में चला सकते हैं:

```bash
docker compose up -d
```

अब हम एप्लिकेशन निर्भरता स्थापित करने के लिए `composer install` चलाएंगे:

```bash
docker compose exec app composer install
```

पर्यावरण सेटिंग कॉपी करें:

```bash
docker compose exec app cp .env.local .env
```

`artisan` लारवेल कमांड-लाइन टूल के साथ एन्क्रिप्शन कुंजी सेट करें:

```bash
docker compose exec app ./artisan key:generate --ansi
```

डीबी माइग्रेट करें और नकली डेटा सीड करें:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

और फिलामेंट व्यवस्थापक उपयोगकर्ता जोड़ें:

```bash
docker compose exec app ./artisan make:filament-user
```

और अपने पसंदीदा ब्राउज़र में http://127.0.0.1:8000 खोलें। लारवेल ब्लॉग का उपयोग करके खुश!

## कंटेनर के अंदर कैसे जाएं?

डॉकर कंटेनर तक पहुंच:

```bash
docker exec -ti laravel-blog-app bash
```

## लाइसेंस

यह [MIT लाइसेंस](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE) के तहत लाइसेंस प्राप्त ओपन-सोर्स सॉफ़्टवेयर है।


[![गिटहब रिलीज़](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![लाइसेंस](https://img.shields.io/ Badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![कोडकोव](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/ Badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ लारवेल-ब्लॉग)
