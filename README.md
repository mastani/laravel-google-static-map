# Google Static Map Generator

Generate static map using Google Map API in Laravel.

### Installation in Laravel 5.5 and up

```bash
$ composer require mastani/laravel-google-static-map
```

The package will automatically register itself.

### Installation in Laravel 5.4

```bash
$ composer require mastani/laravel-google-static-map
```

Next up, the service provider must be registered:

```php
// config/app.php

'providers' => [
    ...
    mastani\GoogleStaticMap\GoogleStaticMapServiceProvider::class,
];
```

If you want to make use of the facade you must install it as well:

```php
// config/app.php

'aliases' => [
    ...
    'GoogleStaticMap' => NMFCODES\GoogleStaticMap\GoogleStaticMapFacade::class,
];
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
