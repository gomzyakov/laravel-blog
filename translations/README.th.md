>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>ไฟล์นี้จำเป็นต้องอัปเดตเพื่อให้ตรงกับไฟล์ README [ภาษาอังกฤษ](/README.md)

![บล็อก Laravel พร้อมแผงผู้ดูแลระบบ Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# บล็อก Laravel พร้อมแผงผู้ดูแลระบบ Filament

นี่คือโปรเจ็กต์ชุดเริ่มต้นบล็อกของ [Laravel](https://laravel.com) พร้อมด้วยแผงผู้ดูแลระบบ [Filament](https://filamentphp.com)

เป้าหมายของพื้นที่เก็บข้อมูลนี้คือเพื่อแสดงแนวทางปฏิบัติในการพัฒนา [Laravel](https://laravel.com) ที่ดีด้วยแอปพลิเคชันที่เรียบง่าย

## คุณสมบัติ

- 📚 การสร้างและแก้ไขโพสต์
- 🥑 หมวดหมู่
- 🔥 โพสต์ยอดนิยม
- 🎉 แผงผู้ดูแลระบบที่สร้างขึ้นบน [Filament](https://filamentphp.com)

## คุณสมบัติที่ขอ

เปิด [ปัญหาใหม่](https://github.com/gomzyakov/laravel-blog/issues/new) เพื่อขอฟีเจอร์ (หรือหากคุณพบข้อบกพร่อง)

## วิธีการเรียกใช้บล็อกในเครื่อง?

โคลนโครงการ:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

ฉันเชื่อว่าคุณติดตั้ง Docker ไว้แล้ว ถ้าไม่ ให้ทำบน [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) หรือ [Linux](https://docs.docker.com/desktop/install/linux-install/)

สร้างอิมเมจ `laravel-blog` ด้วยคำสั่งต่อไปนี้:

```bash
docker compose build --no-cache
```

>คำสั่งนี้อาจใช้เวลาสักครู่จึงจะเสร็จสิ้น

เมื่อการสร้างเสร็จสิ้น คุณสามารถรันสภาพแวดล้อมในโหมดเบื้องหลังได้ด้วย:

```bash
docker compose up -d
```

ตอนนี้เราจะเรียกใช้ `composer install` เพื่อติดตั้งการพึ่งพาแอปพลิเคชัน:

```bash
docker compose exec app composer install
```

คัดลอกการตั้งค่าสภาพแวดล้อม:

```bash
docker compose exec app cp .env.local .env
```

ตั้งค่าคีย์เข้ารหัสด้วยเครื่องมือบรรทัดคำสั่ง `artisan` Laravel:

```bash
docker compose exec app ./artisan key:generate --ansi
```

ย้าย DB & Seed ข้อมูลปลอม:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

และเพิ่มผู้ใช้ผู้ดูแลระบบ Filament:

```bash
docker compose exec app ./artisan make:filament-user
```

และเปิด http://127.0.0.1:8000 ในเบราว์เซอร์ที่คุณชื่นชอบ มีความสุขที่ได้ใช้บล็อก Laravel!

## จะเข้าไปในภาชนะได้อย่างไร?

การเข้าถึงคอนเทนเนอร์นักเทียบท่า:

```bash
docker exec -ti laravel-blog-app bash
```

## ใบอนุญาต

นี่เป็นซอฟต์แวร์โอเพ่นซอร์สที่ได้รับอนุญาตภายใต้ [ใบอนุญาต MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE)


[![การเปิดตัว GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![ใบอนุญาต](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-บล็อก)
