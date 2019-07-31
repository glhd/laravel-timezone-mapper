<?php

namespace Galahad\TimezoneMapper\Tests;

use Galahad\TimezoneMapper\Facades\TimezoneMapper;
use Galahad\TimezoneMapper\TimezoneMapperProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
	protected function getPackageProviders($app) : array
	{
		return [
			TimezoneMapperProvider::class,
		];
	}
	
	protected function getPackageAliases($app) : array
	{
		return [
			'TimezoneMapper' => TimezoneMapper::class,
		];
	}
}
