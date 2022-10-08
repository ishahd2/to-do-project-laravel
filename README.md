# To install the application

1- Clone the repo : git clone https://github.com/ishahd2/to-do-project-laravel.git

2- Copy .env-example as .env file

3- Create database and modify .env file with db name and db account details

4- Install venodr packages : composer install

5- npm install

6- npm run dev

7- Database Migrate : php artisan migrate

8- Run : php artisan key:generate

9- modify .env file url as  APP_URL=http://127.0.0.1/to-do-project-laravel/public
 

10- modify config.app.php file url as 'url' => env('APP_URL', 'http://127.0.0.1/to-do-project-laravel/public'),

11- Run : php artisan config:cache

12- Open the project in browser and register one user to be able to run seeder in the next step
