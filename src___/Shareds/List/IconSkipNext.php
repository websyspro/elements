<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSkipNext
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M648-312v-336h28v336h-28Zm-364 0v-336l252 168-252 168Zm28-168Zm0 116 174-116-174-116v232Z" ],
			200 => [ "0 -960 960 960", "M650.77-295.38v-369.24h40v369.24h-40Zm-381.54 0v-369.24L546.15-480 269.23-295.38Zm40-184.62Zm0 110 165.23-110-165.23-110v220Z" ],
			300 => [ "0 -960 960 960", "M655.38-267.69v-424.62h60v424.62h-60Zm-410.76 0v-424.62L563.08-480 244.62-267.69Zm60-212.31Zm0 100 150.61-100-150.61-100v200Z" ],
			400 => [ "0 -960 960 960", "M660-240v-480h80v480h-80Zm-440 0v-480l360 240-360 240Zm80-240Zm0 90 136-90-136-90v180Z" ],
			500 => [ "0 -960 960 960", "M664.07-224.93v-510.14h91v510.14h-91Zm-459.14 0v-510.14L587.65-480 204.93-224.93Zm91-255.07Zm0 84.5L423.8-480l-127.87-84.5v169Z" ],
			600 => [ "0 -960 960 960", "M669.61-204.39v-551.22h106v551.22h-106Zm-485.22 0v-551.22L598.09-480l-413.7 275.61Zm106-275.61Zm0 77 116.78-77-116.78-77v154Z" ],
			700 => [ "0 -960 960 960", "M677-177v-606h126v606H677Zm-520 0v-606l455 303-455 303Zm126-303Zm0 67 102-67-102-67v134Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSkipNext" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
