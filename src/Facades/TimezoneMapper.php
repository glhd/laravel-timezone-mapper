<?php

namespace Galahad\TimezoneMapper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string mapCoordinates(float $latitude, float $longitude, string $fallback = null)
 */
class TimezoneMapper extends Facade
{
	protected static function getFacadeAccessor() : string
	{
		return \Galahad\TimezoneMapper\TimezoneMapper::class;
	}
}
