# FilaAppSetting

Filament app setting plugin, contain basic functionality required in every project.

## Installation

You can install the package via composer:

```bash
composer require asayhome/fila-app-setting
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="fila-app-setting-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="fila-app-setting-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="fila-app-setting-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$variable = new AsayHome\FilaAppSetting();
echo $variable->echoPhrase('Hello, VendorName!');
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

- [abdosaeed](https://github.com/abdosaeedelhassan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
