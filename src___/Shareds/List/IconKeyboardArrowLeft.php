<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconKeyboardArrowLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M560-276 356-480l204-204 20 20-184 184 184 184-20 20Z" ],
			200 => [ "0 -960 960 960", "M560-267.69 347.69-480 560-692.31 588.31-664l-184 184 184 184L560-267.69Z" ],
			300 => [ "0 -960 960 960", "M560-253.85 333.85-480 560-706.15 602.15-664l-184 184 184 184L560-253.85Z" ],
			400 => [ "0 -960 960 960", "M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" ],
			500 => [ "0 -960 960 960", "M560-232.35 312.35-480 560-727.65 623.65-664l-184 184 184 184L560-232.35Z" ],
			600 => [ "0 -960 960 960", "M560-221.91 301.91-480 560-738.09 634.09-664l-184 184 184 184L560-221.91Z" ],
			700 => [ "0 -960 960 960", "M560-208 288-480l272-272 88 88-184 184 184 184-88 88Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconKeyboardArrowLeft" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
