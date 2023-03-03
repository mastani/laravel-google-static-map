# Google Static Map Generator

Generate static map using Google Map API in Laravel.

[![Total Downloads](https://poser.pugx.org/mastani/laravel-google-static-map/downloads)](https://packagist.org/packages/mastani/laravel-google-static-map)
[![Latest Stable Version](https://poser.pugx.org/mastani/laravel-google-static-map/v/stable)](https://packagist.org/packages/mastani/laravel-google-static-map)
[![Latest Unstable Version](https://poser.pugx.org/mastani/laravel-google-static-map/v/unstable)](https://packagist.org/packages/mastani/laravel-google-static-map)
[![License](https://poser.pugx.org/mastani/laravel-google-static-map/license)](https://packagist.org/packages/mastani/laravel-google-static-map)

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
    Mastani\GoogleStaticMap\GoogleStaticMapServiceProvider::class,
];
```

### Installation without Laravel

Another way is install the component through [composer](https://getcomposer.org/download/).

Either run
```bash
$ composer require mastani/laravel-google-static-map
```
or add
```json
"mastani/laravel-google-static-map": "dev-master"
```
to the require section of your composer.json.

## Usage

```php
$map = new \Mastani\GoogleStaticMap\GoogleStaticMap('Place google map API key or leave it empty');
$url = $map->setCenter('Tehran')
           ->setMapType(\Mastani\GoogleStaticMap\MapType::RoadMap)
           ->setZoom(14)
           ->setSize(600, 600)
           ->setFormat(\Mastani\GoogleStaticMap\Format::JPG)
           ->addMarker('Tehran', '1', 'red', \Mastani\GoogleStaticMap\Size::Small)
           ->addMarkerLatLng(35.6907488, 51.3919293, '1', 'red', \Mastani\GoogleStaticMap\Size::Small)
           ->make(); // Return url contain map address.
           // or
           ->download($path); // Download map image
```

## Function

| Function | Description |
| :--- | :--- |
| setSecret(secret) | Set signing secret key. |
| setCenter(location) | Set map center with address. |
| setCenterLatLng(latitude, longitude) | Set map center with latitude and longitude. |
| setZoom(zoom) | Set map zoom. |
| setScale(scale) | Set map scale. |
| setSize(width, height) | Set map size. |
| setMapType(type as MapType) | Set map type. |
| setMapId(id) | Set a map ID previously created in Cloud Console.  |
| setFormat(format as Format) | Set map format. |
| addMarker(center, label, color, size) | Add marker to map. |
| addMarkerLatLng(latitude, longitude, label, color, size) | Add marker to map with latitude and longitude. |
| addMarkerWithIcon(center, icon, shadow) | Add custom marker to map. |
| addMarkerLatLngWithIcon(latitude, longitude, icon, shadow) | Add marker to map with latitude and longitude. |
| make() | Make url string. |
| download($path = 'current path', $name_length = 10) | Download map image in provided path. |

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
