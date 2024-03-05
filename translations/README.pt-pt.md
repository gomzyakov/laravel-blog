![Blog Laravel com painel de administração Filament](../docs/social-preview-en.png)

# Blog Laravel com painel de administração Filament

Este é o projeto do kit inicial do blog [Laravel](https://laravel.com) com painel de administração do [Filament](https://filamentphp.com).

O objetivo deste repositório é mostrar boas práticas de desenvolvimento do [Laravel](https://laravel.com) com uma aplicação simples.

## Características

- 📚 Criação e edição de postagens
- 🥑 Categorias
- :fire: Postagens populares
- :hatched_chick: Painel de administração construído em [Filament](https://filamentphp.com)

## Solicitando recursos

Abra um [novo problema](https://github.com/gomzyakov/laravel-blog/issues/new) para solicitar um recurso (ou se encontrar um bug).

## Como administrar um blog localmente?

Clone o projeto:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Acredito que você já tenha o Docker instalado. Caso contrário, faça isso no [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) ou [Linux](https://docs.docker.com/desktop/install/linux-install/).

Construa a imagem `laravel-blog` com o seguinte comando:

```bash
docker compose build --no-cache
```

>Este comando pode levar alguns minutos para ser concluído.

Quando a compilação for concluída, você poderá executar o ambiente em modo de segundo plano com:

```bash
docker compor -d
```

Agora executaremos `composer install` para instalar as dependências do aplicativo:

```bash
docker compose exec app compositor instalar
```

Copie as configurações do ambiente:

```bash
docker compor aplicativo executivo cp .env.local .env
```

Defina a chave de criptografia com a ferramenta de linha de comando `artisan` do Laravel:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Migrar banco de dados e propagar dados falsos:

```bash
docker compose exec app ./artisan Migrate:fresh --seed
```

E adicione o usuário administrador do Filament:

```bash
docker compose exec app ./artisan make:filament-user
```

E abra http://127.0.0.1:8000 no seu navegador favorito. Feliz usando o Laravel Blog!

## Como entrar no container?

Acesso ao contêiner Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Licença

Este é um software de código aberto licenciado sob a [Licença MIT](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Lançamento do GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![licença](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)