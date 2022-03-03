# Laravel Pesa

[![Latest Version on Packagist](https://img.shields.io/packagist/v/openpesa/laravel-pesa.svg?style=flat-square)](https://packagist.org/packages/openpesa/laravel-pesa)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/openpesa/laravel-pesa/run-tests?label=tests)](https://github.com/openpesa/laravel-pesa/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/openpesa/laravel-pesa/Check%20&%20fix%20styling?label=code%20style)](https://github.com/openpesa/laravel-pesa/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/openpesa/laravel-pesa.svg?style=flat-square)](https://packagist.org/packages/openpesa/laravel-pesa)

Easy integration to Mobile Money operators like Vodacom's Mpesa in your Laravel application.

## Documentation 

🚧 Work in progress

## Example 

For more instuction on package usage see example readme here https://github.com/alphaolomi/laravel-pesa-demo

## Installation

You can install the package via composer:

```bash
composer require openpesa/laravel-pesa
```


## Usage
### Using Facades

```php
use Openpesa\Pesa\Facades\Pesa;
// This route will be mapped to  =>  `your-URL/api/charge`
Route::get('/charge', function () {
    $response =  Pesa::c2b([
        'input_Amount' => 5000, // Amount to be charged
        'input_Country' => 'TZN',
        'input_Currency' => 'TZS',
        'input_CustomerMSISDN' => '000000000001', // replace with your phone number
        'input_ServiceProviderCode' => '000000', // replace with your service provider code given by M-Pesa
        'input_ThirdPartyConversationID' => 'rasderekf', // unique
        'input_TransactionReference' => 'asdodfdferre', // unique
        'input_PurchasedItemsDesc' => 'Test  Item'
    ]);


    return $response;
});
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alpha Olomi](https://github.com/openpesa)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
