<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconMetro
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-616h105l203 537 202-537h106v616h-60v-562L511-172h-63L232-730v558h-60Z" ],
			200 => [ "0 -960 960 960", "M160-160v-640h118.15L480-266.46 680.62-800H800v640h-73.85v-545.38L515.62-160h-72L233.85-701.61V-160H160Z" ],
			300 => [ "0 -960 960 960", "M140-140v-680h140.08L480-292.23 678.31-820H820v680h-96.92v-517.7L523.31-140h-87L236.92-654.31V-140H140Z" ],
			400 => [ "0 -960 960 960", "M120-120v-720h162l198 522 196-522h164v720H720v-490L531-120H429L240-607v487H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-736.26h179.46L480-339.04l187.15-509.09h180.98v736.26H713.78v-472.78L536.5-111.87H423.02l-176.8-469.78v469.78H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-758.44h203.26L480-367.74l175.09-491.48h204.13v758.44H705.3v-449.3L544-100.78H414.87L254.7-547.08v446.3H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-86v-788h235l159 468 159-468h235v788H694v-418L554-86H404L266-501v415H86Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconMetro" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
