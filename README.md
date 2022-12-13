# laravel-apm
PHP Elastic APM for Laravel
This package is compatible with laravel >= 5.2

## Install
```
composer require llamazesty/laravel-apm
```

## Provider and Aliases
Add this line to provider and aliases array in `config/app.php`
```php
'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        // ... more provider

        faridcs\ApmLaravel\Providers\ElasticApmServiceProvider::class,
    ],
    
'aliases' => [

        // more aliases
        
        'ElasticApm' => faridcs\ApmLaravel\Facades\ElasticApm::class,
    ],
```

## Config

```
php artisan vendor:publish --provider="alopeyk\ApmLaravel\Providers\ElasticApmServiceProvider" --tag="config"
```

## Middleware

Register the middleware in `app/Http/Kernel.php`
```php
protected $middleware = [
    // ... more middleware
    \faridcs\ApmLaravel\Middleware\RecordTransaction::class,
];
```

## Error/Exception Handling

### Laravel

In `app/Exceptions/Handler`, add the following to the `report` method:

```php
ElasticApm::captureThrowable($exception);
ElasticApm::send();
```

Make sure to import the facade at the top of your file:

```php
use ElasticApm;
```
