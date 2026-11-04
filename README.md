# CounterPoint POS

CounterPoint POS is a beginner-friendly IT0049 TFA6 Laravel activity: a small four-page application that demonstrates routes, controllers, Eloquent models, database seeders, and Blade views in a simple point-of-sale theme.

## Laravel version

This project uses Laravel 12.

## Setup

```bash
composer install
copy .env.example .env
php artisan key:generate
```

The application uses the MySQL database configured in `.env`:

```dotenv
DB_CONNECTION=mysql
DB_DATABASE=laravel_tfa6
DB_USERNAME=root
DB_PASSWORD=
```

Run the migrations and seed the sample records:

```bash
php artisan migrate
php artisan db:seed
```

## Run the application

```bash
php artisan serve
```

Then open the local URL shown by Artisan.

## Available routes

- `/` — landing page
- `/about` — project overview
- `/customers` — sample customer accounts
- `/users` — sample store users

The customer and user pages use Blade `@foreach` loops to display every Eloquent record supplied by their controllers.
