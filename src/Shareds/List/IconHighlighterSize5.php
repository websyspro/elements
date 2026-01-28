<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconHighlighterSize5
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M428-88 88-428q-4-4-4-10t4-10l424-424q4-4 10-3.5t10 4.5l340 339q4 4 4 10t-4 10L448-88q-4 4-10 4t-10-4Z" ],
			200 => [ "0 -960 960 960", "m423.85-83.85-340-340q-5.62-5.61-5.62-14.15t5.62-14.15l424-424q5.61-5.62 14.03-5.23 8.43.38 14.27 6.23l340 339q5.62 5.61 5.62 14.15t-5.62 14.15l-424 424q-5.61 5.62-14.15 5.62t-14.15-5.62Z" ],
			300 => [ "0 -960 960 960", "m416.92-76.92-340-340q-8.3-8.31-8.3-21.08 0-12.77 8.3-21.08l424-424q8.31-8.3 20.77-8.11 12.46.19 21.39 9.11l340 339q8.3 8.31 8.3 21.08 0 12.77-8.3 21.08l-424 424q-8.31 8.3-21.08 8.3-12.77 0-21.08-8.3Z" ],
			400 => [ "0 -960 960 960", "M410-70 70-410q-11-11-11-28t11-28l424-424q11-11 27.5-11t28.5 12l340 339q11 11 11 28t-11 28L466-70q-11 11-28 11t-28-11Z" ],
			500 => [ "0 -960 960 960", "m406.17-66.17-340-340Q53.5-418.85 53.5-438t12.67-31.83l424-424q12.68-12.67 31.33-12.67t32.33 13.67l340 339Q906.5-541.15 906.5-522t-12.67 31.83l-424 424Q457.15-53.5 438-53.5t-31.83-12.67Z" ],
			600 => [ "0 -960 960 960", "m400.96-60.96-340-340Q46-415.91 46-438t14.96-37.04l424-424Q499.91-914 521.5-914t37.54 15.96l340 339Q914-544.09 914-522t-14.96 37.04l-424 424Q460.09-46 438-46t-37.04-14.96Z" ],
			700 => [ "0 -960 960 960", "M394-54 54-394q-18-18-18-44t18-44l424-424q18-18 43.5-18t44.5 19l340 339q18 18 18 44t-18 44L482-54q-18 18-44 18t-44-18Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconHighlighterSize5" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
