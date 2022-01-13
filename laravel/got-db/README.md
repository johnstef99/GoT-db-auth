## Requirements

-   php >= 7.4
-   node >= 16
-   [composer](https://getcomposer.org/)
-   MySQL Database (ex. mariadb)

## Get started

After cloning the repo you need to run `composer install` to get all the
necessary packages

### Run the project

You need to copy the `.env.example` file to `.env` and change these fields
according to your database set up

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=database_user
DB_PASSWORD=database_user_password
```

After doing that and the database is up and running you need to run:

```bash
# get node packages like tailwindcss
npm install && npm run dev

# create tables and seed them with fake data
php artisan migrate:fresh --seed

# host the app locally
php artisan serve
```

### Get schema

Run:

```
php artisan migrate:fresh
php artisan schema:dump
```

After that you can find the sql script for the schema at `./database/schema/`
