Run commands below to install app:

clone repository , rename to "your project dir"

cd  "your project dir"

composer update 

sudo chmod -R 777 storage  bootstrap/cache

mv .env.example .env

php artisan key:generate 

php artisan config:clear

php artisan migrate

php artisan db:seed


Change DB conf in .env file