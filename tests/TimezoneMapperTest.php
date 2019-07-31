<?php

namespace Galahad\TimezoneMapper\Tests;

use Galahad\TimezoneMapper\Facades\TimezoneMapper;

class TimezoneMapperTest extends TestCase
{
	public function test_it_returns_the_correct_timezone_for_denver() : void
	{
		$boulder_latitude = 40.0404710;
		$boulder_longitude = -105.2542210;
		
		$mapped_timezone = TimezoneMapper::mapCoordinates($boulder_latitude, $boulder_longitude);
		
		$this->assertEquals('America/Denver', $mapped_timezone);
	}
	
	public function test_it_returns_the_correct_timezone_for_philadelphia() : void
	{
		$philly_latitude = 39.952583;
		$philly_longitude = -75.165222;
		
		$mapped_timezone = TimezoneMapper::mapCoordinates($philly_latitude, $philly_longitude);
		
		$this->assertEquals('America/New_York', $mapped_timezone);
	}
	
	public function test_it_returns_the_correct_timezone_for_london() : void
	{
		$london_latitude = 51.50853;
		$london_longitude = -0.12574;
		
		$mapped_timezone = TimezoneMapper::mapCoordinates($london_latitude, $london_longitude);
		
		$this->assertEquals('Europe/London', $mapped_timezone);
	}
	
	public function test_it_returns_the_correct_timezone_for_shanghai() : void
	{
		$shanghai_latitude = 31.22222;
		$shanghai_longitude = 121.45806;
		
		$mapped_timezone = TimezoneMapper::mapCoordinates($shanghai_latitude, $shanghai_longitude);
		
		$this->assertEquals('Asia/Shanghai', $mapped_timezone);
	}
}
