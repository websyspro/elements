<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconTurnRight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M305-212v-302q0-25 17.5-42.5T365-574h369l-90-90 20-20 124 124-124 124-20-20 90-90H365q-14 0-23 9t-9 23v302h-28Z" ],
			200 => [ "0 -960 960 960", "M299.23-200v-315.38q0-26.85 18.89-45.74Q337-580 363.85-580h359.53l-84-84 28.31-28.31L800-560 667.69-427.69 639.38-456l84-84H363.85q-10.77 0-17.7 6.92-6.92 6.93-6.92 17.7V-200h-40Z" ],
			300 => [ "0 -960 960 960", "M289.62-180v-337.69q0-29.92 21.19-51.12Q332-590 361.92-590h343.77l-74-74 42.16-42.15L820-560 673.85-413.85 631.69-456l74-74H361.92q-5.38 0-8.84 3.46-3.47 3.46-3.47 8.85V-180h-59.99Z" ],
			400 => [ "0 -960 960 960", "M280-160v-360q0-33 23.5-56.5T360-600h328l-64-64 56-56 160 160-160 160-56-56 64-64H360v360h-80Z" ],
			500 => [ "0 -960 960 960", "M274.5-151.87V-514.5q0-37.54 26.73-64.27 26.73-26.73 64.27-26.73h309.35l-63.76-63.76 63.89-63.89L848.13-560 674.98-386.85l-63.89-63.89 63.76-63.76H365.5v362.63h-91Z" ],
			600 => [ "0 -960 960 960", "M267-140.78V-507q0-43.72 31.14-74.86T373-613h283.91l-63.43-63.44 74.65-74.65L859.22-560 668.13-368.91l-74.65-74.65L656.91-507H373v366.22H267Z" ],
			700 => [ "0 -960 960 960", "M257-126v-371q0-51.97 37.01-88.99Q331.02-623 383-623h250l-63-63 89-89 215 215-215 215-89-89 63-63H383v371H257Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconTurnRight" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
