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

Para utilizar a API, primeiramente é necessário clonar o projeto do GitHub num diretório de sua preferência, entrar no mesmo e criar o arquivo .env:

```shell
cd "diretorio de sua preferencia"

git clone https://github.com/ghguilherme/BuscaCEP

cd BuscaCEP

cp .env.example .env
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

Após rodar o comando, a URL da api ficará disponível em:
http://localhost:8085

### Consumindo a API

Caso tenha executado com o docker ou com make, é possível consultar os detalhes dos endpoints disponíveis na seguinte URL:
http://localhost:8082

Mas, estão disponíveis os seguinte endpoints:

- Consulta através do CEP

    http://localhost:8085/v1/cep/{CEP}

    Informar o cep desejado ao invés de {CEP}

- Consulta através do Endereço

    http://localhost:8085/v1/endereco/{UF}/{Município}/{Rua/Avenida}

    Informar o os dados da UF, Município e Rua/Avenida ao invés de {UF}, {Município} e {Rua/Avenida}, respectivamente.
