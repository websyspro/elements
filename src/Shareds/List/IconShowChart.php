<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconShowChart
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m140-256-20-20 264-264 160 160 278-320 20 18-296 344-162-162-244 244Z" ],
			200 => [ "0 -960 960 960", "m140-247.69-29.23-29.23 272.31-272.31 160 160 279.38-320 28.31 26.77-306.15 353.23-161.54-161.54L140-247.69Z" ],
			300 => [ "0 -960 960 960", "m140-233.85-44.61-44.61 286.15-286.15 160 160 281.69-320 42.15 41.38-323.07 368.61-160.77-160.77L140-233.85Z" ],
			400 => [ "0 -960 960 960", "m140-220-60-60 300-300 160 160 284-320 56 56-340 384-160-160-240 240Z" ],
			500 => [ "0 -960 960 960", "M140-212.35 72.35-280 380-587.65l159.52 159.52 284-320 64.13 63.65-347.17 392.61L380-452.35l-240 240Z" ],
			600 => [ "0 -960 960 960", "M140-201.91 61.91-280 380-598.09l158.87 158.87 284-320 75.22 74.09-356.96 404.35L380-441.91l-240 240Z" ],
			700 => [ "0 -960 960 960", "m140-188-92-92 332-332 158 158 284-320 90 88-370 420-162-162-240 240Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconShowChart" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
