<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconExposureNeg1
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M374-432H146v-28h228v28Zm286 178v-414l-104 72-16-22 126-88h22v452h-28Z" ],
			200 => [ "0 -960 960 960", "M380-424.62H140v-40h240v40Zm273.08 183.08v-419.54l-101.23 70.62-22.93-33.08 134.77-94.92h31.69v476.92h-42.3Z" ],
			300 => [ "0 -960 960 960", "M390-412.31H130v-60h260v60Zm251.54 191.54v-428.77l-96.62 68.31-34.46-51.54 149.39-106.46h47.84v518.46h-66.15Z" ],
			400 => [ "0 -960 960 960", "M400-400H120v-80h280v80Zm230 200v-438l-92 66-46-70 164-118h64v560h-90Z" ],
			500 => [ "0 -960 960 960", "M403.59-396.41H116.41v-87.18h287.18v87.18ZM630-192.59v-447.32l-92 66-49.59-75.5 164-118h76.68v574.82H630Z" ],
			600 => [ "0 -960 960 960", "M408.48-391.52H111.52v-96.96h296.96v96.96ZM630-182.48v-460.04l-92 66-54.48-83 164-118h93.96v595.04H630Z" ],
			700 => [ "0 -960 960 960", "M415-385H105v-110h310v110Zm215 216v-477l-92 66-61-93 164-118h117v622H630Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconExposureNeg1" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
