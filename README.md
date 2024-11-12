
<center> <h1>💻 Bem vindo 💻</h1> </center>

## Como instalar o projeto
1- Clone o repositorio em sua maquina
 ```bash
   git clone "URL DO PROJETO"
   ```

2- Instale as  dependencias do projeto com os seguintes comandos:

   ```bash
    composer install
    npm install
   ```

3- Configure o .env
siga este modelo de .env

```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:wCeA8G2K5U+NEgYo4ZUB1gGCKC1x0TG8yZDB5yxo9Lc=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=sqlite


SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=landing_page_db
DB_USERNAME=seu_users     # Nome do usuário criado ou já existente no MySQL
DB_PASSWORD=sua_senha   # Senha configurada para o usuário MySQL
```

4- Rode as migrations

   ```bash
php artisan migrate

```

5- Após isto rode o comando para abrir o server
   ```bash

após isto rode o comando para abrir o server

php artisan serve


   ```

<h3> Usuários📌</h3>
Caso não queira criar um usário use este:

 ```bash
login: admin@exemplo.com
senha: 123456
   ```


--------------------

<h3> Imagens funcionamento📌</h3>
<img src="/LandingPageProject/public/imagens/1.png" width="400px;" alt="1"/>
<img src="/LandingPageProject/public/imagens/2.png" width="400px;" alt="2"/>
<img src="/LandingPageProject/public/imagens/3.png" width="400px;" alt="3"/>
<img src="/LandingPageProject/public/imagens/4.png" width="400px;" alt="4"/>
<img src="/LandingPageProject/public/imagens/5.png" width="400px;" alt="5"/>
<img src="/LandingPageProject/public/imagens/6.png" width="400px;" alt="6"/>
<img src="/LandingPageProject/public/imagens/7.png" width="400px;" alt="7"/>
<img src="/LandingPageProject/public/imagens/8.png" width="400px;" alt="1"/>



## Autor

Feito por Matheus Torsoni👋🏽 Entre em contato!

[![Twitter Badge](https://img.shields.io/badge/-@tcmatheus-1ca0f1?style=flat-square&labelColor=1ca0f1&logo=twitter&logoColor=white&link=https://twitter.com/tcmatheus_)](https://twitter.com/tcmatheus_) [![Linkedin Badge](https://img.shields.io/badge/-Matheus-Torsoni?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/matheus-torsoni-b33957156/)](https://www.linkedin.com/in/matheus-torsoni-b33957156/) 
[![Outlook Badge](https://img.shields.io/badge/matheus_tcampos@hotmail.com-c14438?style=flat-square&logo=outlook&logoColor=white&link=mailto:matheus_tcampos@hotmail.com)](matheus_tcampos@hotmail.com)
