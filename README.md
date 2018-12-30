# laravel-apm
PHP Elastic APM for Laravel

## Install
```
composer require faridcs/laravel-apm
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