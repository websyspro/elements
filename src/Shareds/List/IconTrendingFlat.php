<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconTrendingFlat
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m684-336-20-20 110-110H172v-28h602L664-604l20-20 144 144-144 144Z" ],
			200 => [ "0 -960 960 960", "M687.69-327.69 659.15-356l104-104H160v-40h603.15L659.38-604l28.54-28.31L840-480 687.69-327.69Z" ],
			300 => [ "0 -960 960 960", "M693.85-313.85 651.08-356l94-94H140v-60h605.08l-93.39-94 42.77-42.15L860-480 693.85-313.85Z" ],
			400 => [ "0 -960 960 960", "m700-300-57-56 84-84H120v-80h607l-83-84 57-56 179 180-180 180Z" ],
			500 => [ "0 -960 960 960", "M696.89-288.52 632-352.41l82.09-82.09H111.87v-91h602.22l-81.33-82.09 64.89-63.89L888.13-480 696.89-288.52Z" ],
			600 => [ "0 -960 960 960", "M692.65-272.87 617-347.52 696.48-427h-595.7v-106h595.7l-79.05-79.48 75.66-74.65L899.22-480 692.65-272.87Z" ],
			700 => [ "0 -960 960 960", "m687-252-90-89 76-76H86v-126h587l-76-76 90-89 227 228-227 228Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconTrendingFlat" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
