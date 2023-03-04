# Mentoria Laravel Archtect - [Beer And Code](https://github.com/beerandcodeteam)


## descrição do Projeto

Projeto desenvolvido durante o curso Laravel Archtect, do básico ao avançado no framework laravel.

<hr>

## Framework

- [**Laravel 10**](https://laravel.com/)

## Ferramentas utilizadas

- [**Docker Engine**](https://docs.docker.com/engine/)
- [**Git**](https://git-scm.com/)
- [**VS Code**](https://code.visualstudio.com/)

<hr>

## Como rodar a aplicação

Cópie o repositório:

```
git clone git@github.com:Elivandro/Laravel-MLA.git
```

Para instalar as dependências do composer rode no terminal (Processo pode demorar):

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

renomeie arquivo de variaveis env

```
cp .env.example .env
```
configure no arquivo .env

```
APP_NAME=

DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

rode o servidor
```
./vendor/bin/sail up -d
```

Gere uma chave para aplicação

```
./vendor/bin/sail artisan key:generate
```

Rode as migrações

```
./vendor/bin/sail artisan migrate
```

Pare o servidor
```
./vendor/bin/sail down -v
```