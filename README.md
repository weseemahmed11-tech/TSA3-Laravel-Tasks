# Tasks for Today — IT0049 TSA3

Tasks for Today is the IT0049 TSA3 Laravel activity. It rebuilds the Tasks for Today Management System using Laravel migrations, Eloquent models, controllers, seeders, and Blade views.

## Laravel version

This project uses Laravel 12.

## Requirements

- PHP 8.2 or later
- Composer
- Node.js and npm
- MySQL

## Setup

Install the PHP dependencies:

```powershell
composer install
```

Copy the example environment file and generate the application key:

```powershell
copy .env.example .env
php artisan key:generate
```

Configure the MySQL database in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_tsa3
DB_USERNAME=root
DB_PASSWORD=
```

Install and build the frontend assets:

```powershell
npm install
npm run build
```

Run the migrations and seed the sample records:

```powershell
php artisan migrate --seed
```

To completely reset the local database and seed it again:

```powershell
php artisan migrate:fresh --seed
```

Start the application:

```powershell
php artisan serve
```

Then open the local URL shown by Artisan.

## Application pages

- `/` — Welcome page showing only tasks scheduled for today
- `/tasks` — complete task list ordered by task date
- `/profile` — profile page showing the single seeded user
- `/about` — static project information and developer page

## Database and seeded data

The project uses Laravel migrations and Eloquent models to manage the application data.

The database seeder creates:

- At least eight task records.
- Tasks scheduled across multiple dates.
- Tasks scheduled for the current date.
- Exactly one user record.

Task dates are generated relative to the current date so that the Welcome page continues to display today's tasks correctly.

## Application behavior

The Welcome page queries the database and displays only tasks whose `task_date` matches today's date.

The Task List page displays every task and orders the records by task date.

The Profile page displays the single user record loaded through the Eloquent User model.

The About page is a static Blade view that identifies the project and developer.

## Authentication note

Authentication is not required for the TSA3 home, task list, profile, or about pages. The Laravel starter authentication routes may remain available, but the TSA3 activity focuses on migrations, Eloquent models, database seeders, date filtering, and Blade views.

## Verification

Useful verification commands:

```powershell
php artisan route:list
php artisan test
vendor/bin/pint --test
git diff --check
```

## Submission

The final submission must include:

- A GitHub repository containing the raw project files, migrations, and seeder.
- A hosted working version of the application.