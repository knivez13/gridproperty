composer install
setup database on .env file
php artisan key:generate
php artisan migrate:refresh --seed
php artisan serve