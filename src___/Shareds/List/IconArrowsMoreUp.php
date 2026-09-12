<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowsMoreUp
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M532-252v-360H172v-28h388v388h-28Zm148-147v-360H320v-28h388v388h-28Z" ],
			200 => [ "0 -960 960 960", "M520-240v-360H160v-40h400v400h-40Zm160-159.23v-360H320v-40h400v400h-40Z" ],
			300 => [ "0 -960 960 960", "M500-220v-360H140v-60h420v420h-60Zm180-179.62v-360H320v-59.99h420v419.99h-60Z" ],
			400 => [ "0 -960 960 960", "M480-200v-360H120v-80h440v440h-80Zm200-200v-360H320v-80h440v440h-80Z" ],
			500 => [ "0 -960 960 960", "M473.54-193.54v-360h-360v-91h451v451h-91Zm201.44-201.44v-360h-360v-91h451v451h-91Z" ],
			600 => [ "0 -960 960 960", "M464.74-184.74v-360h-360v-106h466v466h-106Zm203.39-203.39v-360h-360v-106h466v466h-106Z" ],
			700 => [ "0 -960 960 960", "M453-173v-360H93v-126h486v486H453Zm206-206v-360H299v-126h486v486H659Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowsMoreUp" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
