# BuscaCEP

Esse projeto permite consultar os dados de CEPs a partir da informação do CEP ou do endereço completo (Rua, Cidade e UF).

## 🛠️ Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Docker](https://www.docker.com/)

## ⚙️ Pré-requisitos

Para utilizar a API é necessário que esteja instalado o seguinte:

* Docker **OU** PHP + Composer
    - [Instação PHP](https://www.php.net/manual/pt_BR/install.php)
    - [Instação Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)
    - [Instação Docker](https://docs.docker.com/get-docker/)
* Makefile (Opcional)

## 🚀 Utilizar a API

Para utilizar a API, primeiramente é necessário clonar o projeto do GitHub num diretório de sua preferência e entrar no mesmo:

```shell
cd "diretorio de sua preferencia"

git clone https://github.com/ghguilherme/BuscaCEP

cd BuscaCEP
```

### Instalando as dependências

Após o projeto clonado e estando na raiz do projeto, é necessário instalar todas as dependências para correta execução do mesmo.

Com PHP:

```shell
composer install
```

Com Docker:

```shell
docker-compose run --rm php composer install -d ./../../
```

Com Make:

```shell
make composer
```

### Subindo a API

Finalizado o passo de instalação das as dependências, agora podemos subir a API:

Com PHP:

```shell
cd public

php -S localhost:8085
```

Com Docker:

```shell
docker-compose up --build
```

Com Make:

```shell
make up
```

Após rodar o comando , ir até a seguinte URL no browser:
http://localhost:8085