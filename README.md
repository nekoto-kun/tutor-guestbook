# Example CRUD project with Laravel

This is a repository of Laravel project to demonstrate a development of basic CRUD application.

## Important commands

1. Installing dependencies.

```
composer install
npm i
```

2. Run Vite server for hot-reloading.
```
npm run dev
```

3. Serve app.
```
php artisan serve
```

4. Creating a resource controller with additional migration file and model.
```
php artisan make:model [ModelName] -mcr
```

5. Migration.
```
php artisan migrate:fresh
php artisan migrate:fresh --seed
```

6. Database seeding.
```
php artisan db:seed
```
