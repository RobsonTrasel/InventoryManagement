
# Gerenciador de Estoque

Um sistema feito para gerenciar o estoque controlando a parte financeira e logistica para facilitar o uso dos colaboradores

O sistema foi feito em Laravel, um framework completo de PHP.

Tecnologias usadas:

* Laravel 
* PHP 8.1.3
* Bootstrap
* MySQL

### Oque esse sistema pode fazer ?

Aqui esta algumas das questões que o sistema pode fazer

* Gerenciar usuarios
* Gerenciar cargos
* Gerenciamento de estoque
* Gerenciamento de rentabilidade
* Registro de vendas
* Registro de pagamentos

### Como instalar esse sistema

Para instalar o programa em seu equipamento, você tera que seguir os passos abaixos

1) Clonar repositorio

```bash
git clone https://github.com/RobsonTrasel/InventoryManagement.git
```
2) Instale as dependencias

```bash
cd InventoryManagement
composer install
```
3) Execute os comandos abaixo
```bash
cp .env.example .env
php artisan key:generate
```

4) Configure as variaveis do .env

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=root
DB_PASSWORD=
```

5) Ligue seu banco de dados e rode as migrações

```bash
php artisan migrate
```
6) Rode o servidor

```bash
php artisan serve
```

7) Se conecte ao IP da aplicação e desfrute

```bash
http://localhost:8000
```

