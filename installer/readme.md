# Installation

* Installer
    * laravel new <project name>
* Manual
    * `git clone <url> <project path>`

# Setup

```
    composer install
    npm install
    bower install
    cp .env.example .env
    php artisan key:generate
    php artisan vendor:publish
```

At this point, look in `config/nukacode-user.php` and set everything up how you would like it.

```
    php artisan migrate
    php artisan db:seed --class=UsersTableSeeder
    php artisan db:seed --class=AclSeeder
```
