>[!IMPORTANTE]
>Esse projeto ainda está sob desenvolvimento. Nem todas as funcionalidades estão finalizadas e muito ainda pode ser melhorado. Se você quiser ajudar com o desenvolvimento desse projeto, você pode selecionar uma [issue](https://github.com/gomzyakov/laravel-blog/issues), e abrir uma PR.

![Aplicativo de blog pessoal simples feito em Laravel e MySQL](/docs/social-preview-en.png)

### Leia em [outros idiomas](./translations/Translations.md):

[ગુજરાતી](translations/README.guj.md)
&middot; [हिन्दी](translations/README.hi.md)
&middot; [मराठी](translations/README.mr.md)
&middot; [മലയാളം](translations/README.ml.md)
&middot; [ಕನ್ನಡ](translations/README.ka.md)
&middot; [తెలుగు](translations/README.te.md)
&middot; [ଓଡିଆ](translations/README.od.md)
&middot; [ਪੰਜਾਬੀ](translations/README.pb.md)
&middot; [বাংলা](translations/README.bn.md)
&middot; [தமிழ்](translations/README.ta.md)
&middot; [မြန်မာ](translations/README.mm_unicode.md)
&middot; [Bahasa Indonesia](translations/README.id.md)
&middot; [Català](translations/README.ca.md)
&middot; [English](/README.md)
&middot; [Español](translations/README.es.md)
&middot; [Nederlands](translations/README.nl.md)
&middot; [Русский](translations/README.ru.md)
&middot; [Bulgarian](translations/README.bg.md)
&middot; [Македонски](translations/README.mk.md)
&middot; [Magyar](translations/README.hu.md)
&middot; [Slovenčina](translations/README.slk.md)
&middot; [日本語](translations/README.ja.md)
&middot; [Tiếng Việt](translations/README.vn.md)
&middot; [Polski](translations/README.pl.md)
&middot; [فارسی](translations/README.fa.md)
&middot; [Lietuvių kalba](translations/README.lt.md)
&middot; [한국어](translations/README.ko.md)
&middot; [Deutsch](translations/README.de.md)
&middot; [中文(Simplified)](translations/README.zh-cn.md)
&middot; [中文(Traditional)](translations/README.zh-tw.md)
&middot; [ελληνικά](translations/README.gr.md)
&middot; [العربية](translations/README.ar.md)
&middot; [Українська](translations/README.ua.md)
&middot; [Português (Portugal)](translations/README.pt-pt.md)
&middot; [Italiano](translations/README.it.md)
&middot; [ภาษาไทย](translations/README.th.md)
&middot; [Galego](translations/README.gl.md)
&middot; [नेपाली](translations/README.np.md)
&middot; [اردو](translations/README.ur.md)
&middot; [Limba Română](translations/README.ro.md)
&middot; [English](README.md)
&middot; [Türkçe](translations/README.tr.md)
&middot; [עברית](translations/README.hb.md)
&middot; [Czech](translations/README.cs.md)
&middot; [Slovenščina](translations/README.sl.md)
&middot; [Norsk](translations/README.no.md)
&middot; [Svenska](translations/README.se.md)
&middot; [Dansk](translations/README.da.md)
&middot; [Wikang Filipino](translations/README.tl.md)
&middot; [Қазақша](translations/README.kz.md)
&middot; [Afrikaans (South Africa)](translations/README.afk.md)
&middot; [Zulu (South Africa)](translations/README.zul.md)
&middot; [Kiswahili (Kenya)](translations/README.kws.md)
&middot; [ქართული](translations/README.ge.md)
&middot; [Igbo (Nigeria)](translations/README.igb.md)
&middot; [Yoruba (Nigeria)](translations/README.yor.md)
&middot; [Hausa (Nigeria)](translations/README.hau.md)
&middot; [Suomeksi](translations/README.fi.md)
&middot; [Español de México](translations/README.mx.md)
&middot; [Српски](translations/README.sr.md)
&middot; [Latvia](translations/README.lv.md)
&middot; [Shqip](translations/README.al.md)
&middot; [Беларуская мова](translations/README.by.md)
&middot; [Azərbaycan dili](translations/README.aze.md)
&middot; [Bosanski](translations/README.bih.md)
&middot; [پښتو - Pashto](translations/README.ps.md)
&middot; [ພາສາລາວ](translations/README.la.md)
&middot; [Af-soomaali](translations/README.so.md)
&middot; [አማርኛ(Ethiopia)](translations/README.am.md)
&middot; [සිංහල(Sri Lanka)](translations/README.si.md)
&middot; [հայերեն](translations/README.arm.md)

# Aplicativo de blog pessoal simples baseado em Laravel

O objetivo desse repositório é mostrar boas práticas de desenvolvimento em [Laravel](https://laravel.com) com um aplicativo simples.

## Funcionalidades

- 📚 Criar e editar posts
- 🥑 Categorias
- 🔥 Posts populares
- 🎉 Painel de administradores
- Gerencie usuários, postagens, categorias e tags
- Cargos: leitor e administrador
- Conta pessoal
- Comentários e likes
- Editor visual de posts

## Prévias

![Blog](/docs/screenshot-main-page.png)

## Solicitar funcionalidades

Abra uma nova [issue](https://github.com/gomzyakov/laravel-blog/issues) para solicitar uma funcionalidade (ou se você encontrar um bug).

## Como rodar o blog localmente? 

Clone o projeto:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Acredito que você já tenha o Docker instalado. Se não, apenas o instale no [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows-install/) ou [Linux](https://docs.docker.com/desktop/install/linux-install/).

Monte a imagem `laravel-blog` com o seguinte comando:

```bash
docker compose build --no-cache
```

>Esse comando pode pode levar alguns minutos para ser concluido.

Quando a montagem for concluida, você pode executar o ambiente no modo de fundo com:

```bash
docker compose up -d
```

Agora executaremos `composer install` para instalar as dependências do aplicativo:

```bash
docker compose exec app composer install
```

Copie as variáveis de ambiente:

```bash
docker compose exec app cp .env.local .env
```

Defina a chave de criptografia com a ferramenta de linha de comando do Laravel `artisan`:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Migre a base de dados e defina uma seed com dados falsos:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

E abra http://127.0.0.1:8000 em seu navegador favorito. Seja feliz usando o Laravel Blog!

## Como acessar o container?

Accesso ao container Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Licença

Esse é um software em código aberto licenciado sob a [Licença MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![GitHub release](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![license](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/laravel-blog)
