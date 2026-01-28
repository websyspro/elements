<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconNorth
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-132v-645L253-564l-19-19 246-246 246 246-19 20-213-213v644h-28Z" ],
			200 => [ "0 -960 960 960", "M460-120v-645.46L253.69-559.38l-27.54-27.54L480-840.77l253.85 253.85-27.54 28.54L500-764.69V-120h-40Z" ],
			300 => [ "0 -960 960 960", "M450-100v-646.23L254.85-551.69l-41.77-41.77L480-860.38l266.92 266.92-41.77 42.77L510-745.85V-100h-60Z" ],
			400 => [ "0 -960 960 960", "M440-80v-647L256-544l-56-56 280-280 280 280-56 57-184-184v647h-80Z" ],
			500 => [ "0 -960 960 960", "M434.5-71.87v-642.22L255.52-535.63l-63.65-63.89L480-887.65l288.37 288.13-63.89 64.65L525.5-714.09v642.22h-91Z" ],
			600 => [ "0 -960 960 960", "M427-60.78v-635.7L254.87-524.22l-74.09-74.65L480-898.09l299.78 299.22-74.65 75.09L533-696.48v635.7H427Z" ],
			700 => [ "0 -960 960 960", "M417-46v-627L254-509l-88-89 314-314 315 314-89 89-163-164v627H417Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconNorth" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
