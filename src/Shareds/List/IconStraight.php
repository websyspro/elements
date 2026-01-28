<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconStraight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-172v-564l-91 91-19-19 124-124 124 124-19 19-91-91v564h-28Z" ],
			200 => [ "0 -960 960 960", "M460-160v-564.69l-84.77 84.54-27.54-27.54L480-800l132.31 132.31-27.54 27.54L500-724.69V-160h-40Z" ],
			300 => [ "0 -960 960 960", "M450-140v-565.85l-74.38 73.77-41.77-41.77L480-820l146.15 146.15-41.77 41.77L510-705.85V-140h-60Z" ],
			400 => [ "0 -960 960 960", "M440-120v-567l-64 63-56-56 160-160 160 160-56 56-64-63v567h-80Z" ],
			500 => [ "0 -960 960 960", "M434.5-111.87v-562.46l-64 63-63.65-63.65L480-848.13l173.15 173.15-63.65 63.65-64-63v562.46h-91Z" ],
			600 => [ "0 -960 960 960", "M427-100.78v-556.26l-64 63-74.09-74.09L480-859.22l191.09 191.09L597-594.04l-64-63v556.26H427Z" ],
			700 => [ "0 -960 960 960", "M417-86v-548l-64 63-88-88 215-215 215 215-88 88-64-63v548H417Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconStraight" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
