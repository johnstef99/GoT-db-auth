## Get started

After cloning the repo you need to run `composer install` to get all the
necessary packages

### Get schema 

Run: 
```
php artisan migrate:fresh
php artisan schema:dump
```
After that you can find the sql script for the schema at `./database/schema/`
