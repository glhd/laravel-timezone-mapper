<?php

namespace Galahad\TimezoneMapper;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class TimezoneMapperProvider extends ServiceProvider implements DeferrableProvider
{
	public function register() : void
	{
		$this->app->singleton(TimezoneMapper::class);
	}
	
	public function provides() : array
	{
		return [
			TimezoneMapper::class,
		];
	}
}
