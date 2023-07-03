# Laravel Timezone Mapper

This package maps coordinates to a timezone string. Based heavily on [TimezoneMapperPHP](https://github.com/webmasterar/TimezoneMapperPHP) and [LatLongToTimezone](https://github.com/drtimcooper/LatLongToTimezone) and adopted for use in a Laravel project.

It's not likely to be 100% correct every time, but if you need to map lots of coordinates and don't want to make API calls each time, it's a good way to get reasonable defaults.

## Usage:

```php
$mapped_timezone = TimezoneMapper::mapCoordinates(
  latitude: 51.50853,
  longitude: -0.12574,
  fallback: 'America/New_York', // Optional -- used if unable to map coords
);

// Returns "Europe/London"
```
