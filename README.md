# simple pos

tfa6 builds on tfa5 with eloquent models, migrations, and five sample customers and users.

requires php 8.3+, composer, and sqlite support.

```sh
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

open http://localhost:8000. pages: home, about, customers, users.

run tests: `php artisan test`.
