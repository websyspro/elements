<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconChevronForward
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M540-480 356-664l20-20 204 204-204 204-20-20 184-184Z" ],
			200 => [ "0 -960 960 960", "m531.69-480-184-184L376-692.31 588.31-480 376-267.69 347.69-296l184-184Z" ],
			300 => [ "0 -960 960 960", "m517.85-480-184-184L376-706.15 602.15-480 376-253.85 333.85-296l184-184Z" ],
			400 => [ "0 -960 960 960", "M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" ],
			500 => [ "0 -960 960 960", "m496.35-480-184-184L376-727.65 623.65-480 376-232.35 312.35-296l184-184Z" ],
			600 => [ "0 -960 960 960", "m485.91-480-184-184L376-738.09 634.09-480 376-221.91 301.91-296l184-184Z" ],
			700 => [ "0 -960 960 960", "M472-480 288-664l88-88 272 272-272 272-88-88 184-184Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconChevronForward" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
