<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconKeyboardArrowUp
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-564 296-380l-20-20 204-204 204 204-20 20-184-184Z" ],
			200 => [ "0 -960 960 960", "m480-555.69-184 184L267.69-400 480-612.31 692.31-400 664-371.69l-184-184Z" ],
			300 => [ "0 -960 960 960", "m480-541.85-184 184L253.85-400 480-626.15 706.15-400 664-357.85l-184-184Z" ],
			400 => [ "0 -960 960 960", "M480-528 296-344l-56-56 240-240 240 240-56 56-184-184Z" ],
			500 => [ "0 -960 960 960", "m480-520.35-184 184L232.35-400 480-647.65 727.65-400 664-336.35l-184-184Z" ],
			600 => [ "0 -960 960 960", "m480-509.91-184 184L221.91-400 480-658.09 738.09-400 664-325.91l-184-184Z" ],
			700 => [ "0 -960 960 960", "M480-496 296-312l-88-88 272-272 272 272-88 88-184-184Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconKeyboardArrowUp" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
