# Projeto Integrador

Este é o repositório do Projeto Integrador.

## Instalação

Para começar, siga estas etapas:

1. Clone o repositório:

    ```bash
    git clone https://github.com/MatheusCervantes/ProjetoIntegrador.git
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd ProjetoIntegrador
    ```

3. Instale as dependências do Composer:

    ```bash
    composer install
    ```

4. Copie o arquivo de ambiente de exemplo `.env.example` para `.env`:

    ```bash
    cp .env.example .env
    ```

5. Gere a chave de aplicativo:

    ```bash
    php artisan key:generate
    ```

6. Configure o arquivo `.env` com as informações do seu banco de dados.

7. Execute as migrações do banco de dados para criar as tabelas necessárias:

    ```bash
    php artisan migrate
    ```

## Uso

Após a instalação e configuração, você pode iniciar o servidor de desenvolvimento local executando o seguinte comando:

```bash
php artisan serve
```

Isso iniciará um servidor de desenvolvimento local em `http://localhost:8000`, onde você poderá acessar seu aplicativo no navegador.
