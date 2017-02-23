Run commands below to install app:

clone repository , rename to "your project dir"

cd  "your project dir"

composer update 

sudo chmod -R 777 storage  bootstrap/cache

mv .env.example .env

php artisan key:generate 

php artisan config:clear

Change DB conf in .env file

php artisan migrate

php artisan db:seed


And you can register new user or login with the test credentials test1@gmail.com  test2017


Also you can get author info by site_url/api/v1/author/{id}