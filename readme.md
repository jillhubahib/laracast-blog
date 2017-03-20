Followed tutorial from Jeffrey Way's [Laravel 5.4 From Scratch](https://laracasts.com/series/laravel-from-scratch-2017)

### Setup

- Copy or rename `.env.example` file to `.env` then provide your database credentials.

- Install necessary dependencies
```
compose install
```

- Perform database migration
```
php artisan migrate
```

- Generate the application key locally
```
php artisan key:generate
```