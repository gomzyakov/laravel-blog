>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>ໄຟລ໌ນີ້ຕ້ອງການອັບເດດເພື່ອໃຫ້ກົງກັບໄຟລ໌ README [ພາສາອັງກິດ](/README.md).

![Laravel blog with Filament admin panel]../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Laravel blog ກັບ Filament admin panel

ນີ້​ແມ່ນ [Laravel](https://laravel.com) ໂຄງ​ການ​ຊຸດ​ການ​ເລີ່ມ​ຕົ້ນ​ຂອງ blog ກັບ [Filament](https://filamentphp.com) ກະ​ດານ​ບໍ​ລິ​ຫານ.

ເປົ້າໝາຍຂອງບ່ອນເກັບມ້ຽນນີ້ແມ່ນເພື່ອສະແດງການປະຕິບັດການພັດທະນາ [Laravel](https://laravel.com) ທີ່ດີດ້ວຍແອັບພລິເຄຊັນທີ່ງ່າຍດາຍ.

## ຄຸນ​ລັກ​ສະ​ນະ

- 📚ສ້າງແລະແກ້ໄຂຂໍ້ຄວາມ
- 🥑 ໝວດໝູ່
- 🔥 ໂພສຍອດນິຍົມ
- 🎉 ແຜງຄວບຄຸມທີ່ສ້າງຂຶ້ນໃນ [Filament](https://filamentphp.com)

## ລັກສະນະການຮ້ອງຂໍ

ເປີດ [ບັນຫາໃໝ່](https://github.com/gomzyakov/laravel-blog/issues/new) ເພື່ອຮ້ອງຂໍຄຸນສົມບັດ (ຫຼືຫາກທ່ານພົບຂໍ້ບົກພ່ອງ).

## ວິທີການດໍາເນີນການ blog ໃນທ້ອງຖິ່ນ?

Clone ໂຄງ​ການ​:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

ຂ້ອຍເຊື່ອວ່າເຈົ້າໄດ້ຕິດຕັ້ງ Docker ແລ້ວ. ຖ້າບໍ່, ພຽງແຕ່ເຮັດມັນຢູ່ໃນ [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) ຫຼື [Linux](https://docs.docker.com/desktop/install/linux-install/).

ສ້າງຮູບພາບ 'laravel-blog' ດ້ວຍຄໍາສັ່ງຕໍ່ໄປນີ້:

```bash
docker compose build --no-cache
```

> ຄຳສັ່ງນີ້ອາດຈະໃຊ້ເວລາສອງສາມນາທີເພື່ອໃຫ້ສຳເລັດ.

ເມື່ອ​ການ​ກໍ່​ສ້າງ​ສໍາ​ເລັດ​, ທ່ານ​ສາ​ມາດ​ດໍາ​ເນີນ​ການ​ສະ​ພາບ​ແວດ​ລ້ອມ​ໃນ​ຮູບ​ແບບ​ພື້ນ​ຖານ​ທີ່​ມີ​:

```bash
docker compose up -d
```

ຕອນນີ້ພວກເຮົາຈະດໍາເນີນການ `composer install` ເພື່ອຕິດຕັ້ງການຂຶ້ນກັບແອັບພລິເຄຊັນ:

```bash
docker compose exec app composer install
```

ສຳເນົາການຕັ້ງຄ່າສະພາບແວດລ້ອມ:

```bash
docker compose exec app cp .env.local .env
```

ຕັ້ງລະຫັດການເຂົ້າລະຫັດດ້ວຍເຄື່ອງມືເສັ້ນຄໍາສັ່ງ `artisan` Laravel:

```bash
docker compose exec app ./artisan key:generate --ansi
```

ຍ້າຍຂໍ້ມູນປອມ DB ແລະແກ່ນ:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

ແລະເພີ່ມ Filament admin user:

```bash
docker compose exec app ./artisan make:filament-user
```

ແລະເປີດ http://127.0.0.1:8000 ໃນຕົວທ່ອງເວັບທີ່ທ່ານມັກ. ມີຄວາມສຸກກັບການໃຊ້ Laravel Blog!

## ວິທີການເຂົ້າໄປໃນຖັງ?

ການເຂົ້າເຖິງກ່ອງບັນຈຸ Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## ໃບອະນຸຍາດ

ນີ້ແມ່ນຊອບແວແຫຼ່ງເປີດທີ່ໄດ້ຮັບອະນຸຍາດພາຍໃຕ້ [ໃບອະນຸຍາດ MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![ການປ່ອຍ GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
