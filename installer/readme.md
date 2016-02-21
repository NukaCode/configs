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
    php artisan db:seed --class=UserSeeder
    php artisan db:seed --class=AclSeeder
```

# Social AUthentication

To use social authentication, you will need to perform a few extra steps.

* Get your social provider
    * [Default Laravel Socialite Drivers](https://laravel.com/docs/5.1/authentication#social*authentication)
    * [Socialite Providers Collection](https://socialiteproviders.github.io/)
* Set `enable_social` to true in `config/nukacode-user.php`.
* Set the driver in `config/nukacode-user.php` in the `social` array.
   * Add any scopes or extras you need here as well.

# Events

The users package comes with 2 built in events.  `UserLoggedIn` and `UserRegistered`.  These will already be in your `EventServiceProvider`.  Each event contains a single property for the `user` that triggered the event.  If you want to do anything with them, simply add your listeners.
