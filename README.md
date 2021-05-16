# docker-laravel

- PHP8・Laravel8・mysql・Nginx 用の docker 設定です

# Installation

Docker デスクトップアプリを起動

```
git clone https://github.com/masayan1126/docker-laravel.git
```

```
cd docker-laravel
```

```
docker-compose up -d
```

```
docker-compose exec php sh
```

```
cd docker-laravel
```

```
composer install
```

```
cp .env.example .env && vi .env
```

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:MkKNCKh/jW0CIr3OkgjgkidhYry026WRfzk4Y2efkxA=
APP_DEBUG=true
APP_URL=

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
# mysqlコンテナのサービス名(✖︎container_name)
DB_HOST=db
DB_PORT=3306
# ymlファイルのMYSQL_DATABASEと合わせる
DB_DATABASE=test_db
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=database
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

```
php artisan key:generate
```

```
php artisan migrate && php artisan db:seed
```

The application can then be accessed at http://localhost:8000/
