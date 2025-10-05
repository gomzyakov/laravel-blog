>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>[영어](/README.md) README 파일과 일치하려면 이 파일을 업데이트해야 합니다.

![Filament 관리 패널이 포함된 Laravel 블로그](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# 필라멘트 관리 패널이 있는 Laravel 블로그

이것은 [Filament](https://ilavelphp.com) 관리자 패널이 포함된 [Laravel](https://laravel.com) 블로그 스타터 키트 프로젝트입니다.

이 저장소의 목표는 간단한 애플리케이션으로 좋은 [Laravel](https://laravel.com) 개발 사례를 보여주는 것입니다.

## 특징

- 📚 게시물 작성 및 편집
- 🥑 카테고리
- 🔥 인기 게시물
- 🎉 [Filament](https://pillamentphp.com)를 기반으로 구축된 관리자 패널

## 기능 요청 중

기능을 요청하려면(또는 버그를 발견한 경우) [새 문제](https://github.com/gomzyakov/laravel-blog/issues/new)를 엽니다.

## 블로그를 로컬에서 어떻게 운영하나요?

프로젝트를 복제합니다.

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

이미 Docker가 설치되어 있다고 생각합니다. 그렇지 않다면 [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows)에서 하세요. -install/) 또는 [Linux](https://docs.docker.com/desktop/install/linux-install/).

다음 명령을 사용하여 `laravel-blog` 이미지를 빌드합니다.

```bash
docker compose build --no-cache
```

>이 명령을 완료하는 데 몇 분 정도 걸릴 수 있습니다.

빌드가 완료되면 다음을 사용하여 백그라운드 모드에서 환경을 실행할 수 있습니다.

```bash
docker compose up -d
```

이제 `composer install`을 실행하여 애플리케이션 종속성을 설치하겠습니다.

```bash
docker compose exec app composer install
```

환경 설정을 복사합니다.

```bash
docker compose exec app cp .env.local .env
```

`artisan` Laravel 명령줄 도구를 사용하여 암호화 키를 설정하세요.

```bash
docker compose exec app ./artisan key:generate --ansi
```

DB 마이그레이션 및 가짜 데이터 시드:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

그리고 Filament 관리자를 추가하세요:

```bash
docker compose exec app ./artisan make:filament-user
```

그리고 즐겨 사용하는 브라우저에서 http://127.0.0.1:8000을 엽니다. Laravel 블로그를 이용해 주셔서 감사합니다!

## 컨테이너 안으로 어떻게 들어가나요?

Docker 컨테이너에 액세스:

```bash
docker exec -ti laravel-blog-app bash
```

## 라이선스

이는 [MIT 라이선스](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE)에 따라 라이선스가 부여된 오픈 소스 소프트웨어입니다.


[![GitHub 릴리스](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![라이선스](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel 블로그)
