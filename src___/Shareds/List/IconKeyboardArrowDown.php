<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconKeyboardArrowDown
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-380 276-584l20-20 184 184 184-184 20 20-204 204Z" ],
			200 => [ "0 -960 960 960", "M480-371.69 267.69-584 296-612.31l184 184 184-184L692.31-584 480-371.69Z" ],
			300 => [ "0 -960 960 960", "M480-357.85 253.85-584 296-626.15l184 184 184-184L706.15-584 480-357.85Z" ],
			400 => [ "0 -960 960 960", "M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" ],
			500 => [ "0 -960 960 960", "M480-336.35 232.35-584 296-647.65l184 184 184-184L727.65-584 480-336.35Z" ],
			600 => [ "0 -960 960 960", "M480-325.91 221.91-584 296-658.09l184 184 184-184L738.09-584 480-325.91Z" ],
			700 => [ "0 -960 960 960", "M480-312 208-584l88-88 184 184 184-184 88 88-272 272Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconKeyboardArrowDown" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
