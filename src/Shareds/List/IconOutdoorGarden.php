<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconOutdoorGarden
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M106-146v-561l134-101 120 90 120-90 120 90 120-90 134 101v561H106Zm28-28h212v-519l-106-80-106 80v519Zm240 0h212v-519l-106-80-106 80v519Zm240 0h212v-519l-106-80-106 80v519Z" ],
			200 => [ "0 -960 960 960", "M100-140v-570l140-105.38 120 90 120-90 120 90 120-90L860-710v570H100Zm40-40h200v-510l-100-75.38L140-690v510Zm240 0h200v-510l-100-75.38L380-690v510Zm240 0h200v-510l-100-75.38L620-690v510Z" ],
			300 => [ "0 -960 960 960", "M90-130v-585l150-112.69 120 90 120-90 120 90 120-90L870-715v585H90Zm60-60h180v-495l-90-67.69L150-685v495Zm240 0h180v-495l-90-67.69L390-685v495Zm240 0h180v-495l-90-67.69L630-685v495Z" ],
			400 => [ "0 -960 960 960", "M80-120v-600l160-120 120 90 120-90 120 90 120-90 160 120v600H80Zm80-80h160v-480l-80-60-80 60v480Zm240 0h160v-480l-80-60-80 60v480Zm240 0h160v-480l-80-60-80 60v480Z" ],
			500 => [ "0 -960 960 960", "M72.59-112.59v-611L240-849.09l120 90 120-90 120 90 120-90 167.41 125.5v611H72.59Zm91-91h152.82v-474.5L240-735.46l-76.41 57.37v474.5Zm240 0h152.82v-474.5L480-735.46l-76.41 57.37v474.5Zm240 0h152.82v-474.5L720-735.46l-76.41 57.37v474.5Z" ],
			600 => [ "0 -960 960 960", "M62.48-102.48v-626l177.52-133 120 90 120-90 120 90 120-90 177.52 133v626H62.48Zm106-106h143.04v-467L240-729.26l-71.52 53.78v467Zm240 0h143.04v-467L480-729.26l-71.52 53.78v467Zm240 0h143.04v-467L720-729.26l-71.52 53.78v467Z" ],
			700 => [ "0 -960 960 960", "M49-89v-646l191-143 120 90 120-90 120 90 120-90 191 143v646H49Zm126-126h130v-457l-65-49-65 49v457Zm240 0h130v-457l-65-49-65 49v457Zm240 0h130v-457l-65-49-65 49v457Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconOutdoorGarden" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
