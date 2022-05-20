# About
This is Hito, an extensible intranet platform.

# Development

## Pre-requirements
* Docker Engine 19.03
* Docker Compose

## Setup
* Copy `docker-compose.example.yml` to `docker-compose.override.yml` and update the config however you want
* Copy `src/.env.example` to `src/.env`
* Run `docker-compose up -d`
* After the container is started, connect to the container using `docker-compose exec app sh` and run:
  * `npm install` to install the npm dependencies
  * `npm run prod` to create a production build for the UI
  * `composer install` to install the composer dependencies
  * `php artisan key:generate` to generate an encryption key
  * `php artisan migrate` to migrate the database
  * `php artisan app:seed-permissions` to seed the user permissions
  * `php artisan db:seed` to seed the database
  * `php artisan db:seed --class=DemoSeeder` to seed demo data (optional)

## Debug
* Create a server mapping in your IDE
* Enable listening for xdebug in your IDE
* Access an url you want to debug and append XDEBUG_TRIGGER as a parameter (GET, POST or COOKIE)

# Contributing
If you want to contribute to this repository read [CONTRIBUTING.md](CONTRIBUTING.md)
