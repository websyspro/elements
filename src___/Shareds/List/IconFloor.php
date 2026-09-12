<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFloor
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M146-106v-28h140v-180h180v-180h180v-180h180v-140h28v168H674v180H494v180H314v180H146Z" ],
			200 => [ "0 -960 960 960", "M140-100v-40h140v-180h180v-180h180v-180h180v-140h40v180H680v180H500v180H320v180H140Z" ],
			300 => [ "0 -960 960 960", "M130-90v-60h140v-180h180v-180h180v-180h180v-140h60v200H690v180H510v180H330v180H130Z" ],
			400 => [ "0 -960 960 960", "M120-80v-80h140v-180h180v-180h180v-180h180v-140h80v220H700v180H520v180H340v180H120Z" ],
			500 => [ "0 -960 960 960", "M114.5-74.5v-91h140v-180h180v-180h180v-180h180v-140h91v231h-180v180h-180v180h-180v180h-231Z" ],
			600 => [ "0 -960 960 960", "M107-67v-106h140v-180h180v-180h180v-180h180v-140h106v246H713v180H533v180H353v180H107Z" ],
			700 => [ "0 -960 960 960", "M97-57v-126h140v-180h180v-180h180v-180h180v-140h126v266H723v180H543v180H363v180H97Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFloor" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
