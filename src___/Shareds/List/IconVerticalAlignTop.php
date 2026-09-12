<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconVerticalAlignTop
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-760v-28h536v28H212Zm254 588v-418L336-460l-20-20 164-164 164 164-20 20-130-130v418h-28Z" ],
			200 => [ "0 -960 960 960", "M200-760v-40h560v40H200Zm260 600v-415.69l-124 124L307.69-480 480-652.31 652.31-480 624-451.69l-124-124V-160h-40Z" ],
			300 => [ "0 -960 960 960", "M180-760v-60h600v60H180Zm270 620v-411.85l-114 114L293.85-480 480-666.15 666.15-480 624-437.85l-114-114V-140h-60Z" ],
			400 => [ "0 -960 960 960", "M160-760v-80h640v80H160Zm280 640v-408L336-424l-56-56 200-200 200 200-56 56-104-104v408h-80Z" ],
			500 => [ "0 -960 960 960", "M151.87-757.13v-91h656.26v91H151.87ZM434.5-111.87v-393.41l-98.5 98.5-63.65-63.65L480-678.09l207.65 207.66L624-406.78l-98.5-98.5v393.41h-91Z" ],
			600 => [ "0 -960 960 960", "M140.78-753.22v-106h678.44v106H140.78ZM427-100.78V-474.3l-91 91-74.09-74.09L480-675.48l218.09 218.09L624-383.3l-91-91v373.52H427Z" ],
			700 => [ "0 -960 960 960", "M126-748v-126h708v126H126ZM417-86v-347l-81 81-88-88 232-232 232 232-88 88-81-81v347H417Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconVerticalAlignTop" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
