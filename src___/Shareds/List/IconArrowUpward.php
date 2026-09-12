<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowUpward
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-212v-482L232-460l-20-20 268-268 268 268-20 20-234-234v482h-28Z" ],
			200 => [ "0 -960 960 960", "M460-200v-483.15L228.31-451.46 200-480l280-280 280 280-28.31 28.54L500-683.15V-200h-40Z" ],
			300 => [ "0 -960 960 960", "M450-180v-485.08L222.15-437.23 180-480l300-300 300 300-42.15 42.77L510-665.08V-180h-60Z" ],
			400 => [ "0 -960 960 960", "M440-160v-487L216-423l-56-57 320-320 320 320-56 57-224-224v487h-80Z" ],
			500 => [ "0 -960 960 960", "M434.5-151.87v-481.98L215.76-415.11 151.87-480 480-808.13 808.13-480l-63.89 64.89L525.5-633.85v481.98h-91Z" ],
			600 => [ "0 -960 960 960", "M427-140.78v-475.13L215.43-404.35 140.78-480 480-819.22 819.22-480l-74.65 75.65L533-615.91v475.13H427Z" ],
			700 => [ "0 -960 960 960", "M417-126v-466L215-390l-89-90 354-354 354 354-89 90-202-202v466H417Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowUpward" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
