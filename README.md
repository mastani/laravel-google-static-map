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

## Usage

```php
$map = new GoogleStaticMap('Place google map API key or leave it empty');
$url = $map->setCenter('Tehran')
           ->setMapType(MapType::RoadMap)
           ->setZoom(14)
           ->setSize(600, 600)
           ->setFormat(Format::JPG)
           ->addMarker('Tehran', '1', 'red', Size::Small)
           ->addMarkerLatLng(35.6907488, 51.3919293, '1', 'red', Size::Small)
           ->make(); // Return url contain map address.
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
| setFormat(format as Format) | Set map format. |
| addMarker(center, label, color, size) | Add marker to map. |
| addMarkerLatLng(latitude, longitude, label, color, size) | Add marker to map with latitude and longitude. |
| addMarkerWithIcon(center, icon, shadow) | Add custom marker to map. |
| addMarkerLatLngWithIcon(latitude, longitude, icon, shadow) | Add marker to map with latitude and longitude. |
| make() | Make url string. |

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
