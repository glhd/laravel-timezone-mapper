<?php

namespace Galahad\TimezoneMapper\Tests;

use Galahad\TimezoneMapper\Facades\TimezoneMapper;
use Galahad\TimezoneMapper\TimezoneMapper as TimezoneMapperClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class TimezoneMapperTest extends TestCase
{
	#[Test]
	#[DataProvider('coordinateProvider')]
	public function it_maps_coordinates_to_the_correct_timezone(float $latitude, float $longitude, string $expected): void
	{
		$this->assertEquals($expected, TimezoneMapper::mapCoordinates($latitude, $longitude));
	}

	public static function coordinateProvider(): array
	{
		return [
			// North America
			'Boulder, Colorado' => [40.0404710, -105.2542210, 'America/Denver'],
			'Philadelphia, Pennsylvania' => [39.952583, -75.165222, 'America/New_York'],
			'Los Angeles, California' => [34.052235, -118.243683, 'America/Los_Angeles'],
			'Chicago, Illinois' => [41.878113, -87.629799, 'America/Chicago'],
			'Anchorage, Alaska' => [61.218056, -149.900278, 'America/Anchorage'],
			'Honolulu, Hawaii' => [21.306944, -157.858333, 'Pacific/Honolulu'],
			'Toronto, Canada' => [43.653225, -79.383186, 'America/Toronto'],
			'Mexico City, Mexico' => [19.432608, -99.133209, 'America/Mexico_City'],

			// Europe
			'London, United Kingdom' => [51.50853, -0.12574, 'Europe/London'],
			'Paris, France' => [48.856614, 2.352222, 'Europe/Paris'],
			'Berlin, Germany' => [52.520007, 13.404954, 'Europe/Berlin'],
			'Moscow, Russia' => [55.755826, 37.617300, 'Europe/Moscow'],
			'Madrid, Spain' => [40.416775, -3.703790, 'Europe/Madrid'],
			'Rome, Italy' => [41.902784, 12.496366, 'Europe/Rome'],
			'Stockholm, Sweden' => [59.329323, 18.068581, 'Europe/Stockholm'],
			'Athens, Greece' => [37.983810, 23.727539, 'Europe/Athens'],

			// Asia
			'Shanghai, China' => [31.22222, 121.45806, 'Asia/Shanghai'],
			'Tokyo, Japan' => [35.689487, 139.691706, 'Asia/Tokyo'],
			'Mumbai, India' => [19.075984, 72.877656, 'Asia/Kolkata'],
			'Dubai, UAE' => [25.204849, 55.270783, 'Asia/Dubai'],
			'Singapore' => [1.352083, 103.819836, 'Asia/Singapore'],
			'Seoul, South Korea' => [37.566535, 126.977969, 'Asia/Seoul'],
			'Bangkok, Thailand' => [13.756331, 100.501765, 'Asia/Bangkok'],

			// Southern Hemisphere
			'Sydney, Australia' => [-33.868820, 151.209296, 'Australia/Sydney'],
			'São Paulo, Brazil' => [-23.550520, -46.633309, 'America/Sao_Paulo'],
			'Buenos Aires, Argentina' => [-34.603684, -58.381559, 'America/Argentina/Buenos_Aires'],
			'Cape Town, South Africa' => [-33.924869, 18.424055, 'Africa/Johannesburg'],
			'Auckland, New Zealand' => [-36.848461, 174.763336, 'Pacific/Auckland'],

			// Africa
			'Cairo, Egypt' => [30.044420, 31.235712, 'Africa/Cairo'],
			'Lagos, Nigeria' => [6.524379, 3.379206, 'Africa/Lagos'],
			'Nairobi, Kenya' => [-1.292066, 36.821946, 'Africa/Nairobi'],
		];
	}

	#[Test]
	public function it_works_without_the_facade(): void
	{
		$mapper = new TimezoneMapperClass();

		$this->assertEquals('America/Denver', $mapper->mapCoordinates(40.0404710, -105.2542210));
	}

	#[Test]
	public function it_resolves_from_the_container_as_a_singleton(): void
	{
		$first = $this->app->make(TimezoneMapperClass::class);
		$second = $this->app->make(TimezoneMapperClass::class);

		$this->assertSame($first, $second);
	}

	#[Test]
	public function it_can_map_multiple_coordinates_sequentially(): void
	{
		$mapper = new TimezoneMapperClass();

		$this->assertEquals('America/Denver', $mapper->mapCoordinates(40.0404710, -105.2542210));
		$this->assertEquals('Europe/London', $mapper->mapCoordinates(51.50853, -0.12574));
		$this->assertEquals('Asia/Tokyo', $mapper->mapCoordinates(35.689487, 139.691706));
	}
}
