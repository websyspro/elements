<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconEast
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m583-235-20-19 213-213H132v-28h645L564-708l19-19 246 246-246 246Z" ],
			200 => [ "0 -960 960 960", "m586.92-226.92-28.54-27.54 206.31-206.31H120v-40h645.46L559.38-707.08l27.54-27.54 253.85 253.85-253.85 253.85Z" ],
			300 => [ "0 -960 960 960", "m593.46-213.46-42.77-41.77 195.16-195.16H100v-59.99h646.23L551.69-705.54l41.77-41.77 266.92 266.93-266.92 266.92Z" ],
			400 => [ "0 -960 960 960", "m600-200-57-56 184-184H80v-80h647L544-704l56-56 280 280-280 280Z" ],
			500 => [ "0 -960 960 960", "m600-191.63-64.65-63.89L714.56-434.5H72.35v-91h642.21L536.11-704.48 600-768.13 888.13-480 600-191.63Z" ],
			600 => [ "0 -960 960 960", "m600-180.22-75.09-74.65L697.61-427H61.91v-106h635.7L525.35-705.13 600-779.22 899.22-480 600-180.22Z" ],
			700 => [ "0 -960 960 960", "m600-165-89-89 164-163H48v-126h627L511-706l89-88 314 314-314 315Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconEast" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
