# Provably Fair Casino
### Installing

Copy all environment files
```bash
cp .docker/env-example .docker/.env
cp .env.example .env
```

Build 
```bash
cd .docker
docker-compose build
```

Install Composer packages
```bash
docker-compose run php bash
composer install
php artisan key:generate
php artisan migrate
```

Install node modules
```bash
npm install
```
