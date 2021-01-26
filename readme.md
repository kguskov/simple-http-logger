# Simple Logger
[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-http-logger.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-http-logger)

This package adds a middleware which can parse and log requests to the daily log driver

## Installation

You can install the package via composer:

```bash
composer require guskov/simple-logger
```

Optionally you can publish the configfile with:

```bash
php artisan vendor:publish --provider="Guskov\Logger\LoggerServiceProvider" --tag="simple-logger" 
```

This is the contents of the published config file:

```php
return [
    /*
     * Enable/disable logging
     */
    'enable' => true,

    /*
     * Filter out body fields which will never be logged.
     */
    'except' => [
        'password',
        'confirmation',
        'token'
    ],

];   
```

## Usage
This packages provides a middleware which can be added as a single route or as group route. Use 'log' alias in middleware.

```php
// in a single route
 Route::get('/home', function () {
})->middleware('log');

// in a group route
 Route::group([
            'prefix' => 'admin',
            'as' => 'admin.',
            'middleware' => ['auth', 'admin' , 'log'],
        ], function () {
        //...
        }
        );
```

## License
[MIT](https://choosealicense.com/licenses/mit/)