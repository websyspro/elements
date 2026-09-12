<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconTurnLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M627-212v-302q0-14-9-23t-23-9H226l90 90-20 20-124-124 124-124 20 20-90 90h369q25 0 42.5 17.5T655-514v302h-28Z" ],
			200 => [ "0 -960 960 960", "M620.77-200v-315.38q0-10.77-6.92-17.7-6.93-6.92-17.7-6.92H236.62l84 84-28.31 28.31L160-560l132.31-132.31L320.62-664l-84 84h359.53q26.85 0 45.73 18.88 18.89 18.89 18.89 45.74V-200h-40Z" ],
			300 => [ "0 -960 960 960", "M610.39-180v-337.69q0-5.39-3.47-8.85-3.46-3.46-8.84-3.46H254.31l74 74-42.16 42.15L140-560l146.15-146.15L328.31-664l-74 74h343.77q29.92 0 51.11 21.19 21.19 21.2 21.19 51.12V-180h-59.99Z" ],
			400 => [ "0 -960 960 960", "M600-160v-360H272l64 64-56 56-160-160 160-160 56 56-64 64h328q33 0 56.5 23.5T680-520v360h-80Z" ],
			500 => [ "0 -960 960 960", "M594.5-151.87V-514.5H285.15l63.76 63.76-63.89 63.89L111.87-560l173.15-173.15 63.89 63.89-63.76 63.76H594.5q37.54 0 64.27 26.73 26.73 26.73 26.73 64.27v362.63h-91Z" ],
			600 => [ "0 -960 960 960", "M587-140.78V-507H303.09l63.43 63.44-74.65 74.65L100.78-560l191.09-191.09 74.65 74.65L303.09-613H587q43.72 0 74.86 31.14T693-507v366.22H587Z" ],
			700 => [ "0 -960 960 960", "M577-126v-371H327l63 63-89 89L86-560l215-215 89 89-63 63h250q51.97 0 88.99 37.01Q703-548.97 703-497v371H577Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconTurnLeft" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
