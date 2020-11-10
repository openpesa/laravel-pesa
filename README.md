# Laravel Pesa

Easy intergation Mpesa OpenAPI in your Laravel applications.

## Installation

Begin by adding in the package through Composer.

```sh
composer require openpesa/laravel-pesa
```


If you need to modify the configuations, you can run:

```sh
php artisan vendor:publish --provider="Openpesa\PesaServiceProvider"
```

## Usage

### Simple usage example

Within your controllers, before you perform a redirect, make a call to the `pesa()` function.

```php
public function store()
{
    $data = [
        'input_Amount'=>5000,
        // ...
    ];

    try {
        pesa()->c2b($data);
    } catch(\Throwable $th) {
    }

    return back();
}
```


### Security

If you discover any security related issues, please email [alphaolomi@gmail.com](mailto:alphaolomi@gmail.com) instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
