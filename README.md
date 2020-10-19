# Laravel Pesa



This composer package offers a OpenAPI easy intergation for your Laravel applications.

## Installation

Begin by pulling in the package through Composer.

```bash
composer require openpesa/laravel-pesa
```


## Usage

### Simple usage example

Within your controllers, before you perform a redirect, make a call to the `forodha()` function.

```php
public function store()
{
    $data = [
        'input_Amount'=>5000,
        // ...
    ];
    
    try {
        forodha()->transact('c2b',$data);
    } catch(\Throwable $th) {        
    }

    return home();
}
```


If you need to modify the configuations, you can run:

```bash
php artisan vendor:publish --provider="Openpesa\ForodhaServiceProvider"
```


### Security

If you discover any security related issues, please email [alphaolomi@gmail.com](mailto:alphaolomi@gmail.com) instead of using the issue tracker.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

