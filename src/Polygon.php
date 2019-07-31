<?php

namespace Galahad\TimezoneMapper;

class Polygon
{
	protected $points = [];
	
	public function __construct(...$points)
	{
		$this->points = $points;
	}
	
	public function contains($testy, $testx) : bool
	{
		$n = count($this->points);
		
		$yj = $this->points[$n - 2];
		$xj = $this->points[$n - 1];
		
		$inside = false;
		
		for ($i = 0; $i < $n;) {
			$yi = $this->points[$i++];
			$xi = $this->points[$i++];
			if ((($yi > $testy) !== ($yj > $testy)) && ($testx < ($xj - $xi) * ($testy - $yi) / ($yj - $yi) + $xi - 0.0001)) {
				$inside = !$inside;
			}
			$xj = $xi;
			$yj = $yi;
		}
		
		return $inside;
	}
}
