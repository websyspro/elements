<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFastForward
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M183-312v-336l252 168-252 168Zm342 0v-336l252 168-252 168ZM211-480Zm342 0ZM211-364l174-116-174-116v232Zm342 0 174-116-174-116v232Z" ],
			200 => [ "0 -960 960 960", "M163.85-295.38v-369.24L440.77-480 163.85-295.38Zm355.38 0v-369.24L796.15-480 519.23-295.38ZM203.85-480Zm355.38 0ZM203.85-370l165.23-110-165.23-110v220Zm355.38 0 165.23-110-165.23-110v220Z" ],
			300 => [ "0 -960 960 960", "M131.93-267.69v-424.62L450.38-480 131.93-267.69Zm377.69 0v-424.62L828.07-480 509.62-267.69ZM191.92-480Zm377.69 0ZM191.92-380l150.62-100-150.62-100v200Zm377.69 0 150.62-100-150.62-100v200Z" ],
			400 => [ "0 -960 960 960", "M100-240v-480l360 240-360 240Zm400 0v-480l360 240-360 240ZM180-480Zm400 0Zm-400 90 136-90-136-90v180Zm400 0 136-90-136-90v180Z" ],
			500 => [ "0 -960 960 960", "M79.91-224.93v-510.14L462.63-480 79.91-224.93Zm417.46 0v-510.14L880.09-480 497.37-224.93ZM170.91-480Zm417.46 0Zm-417.46 84.5L298.78-480l-127.87-84.5v169Zm417.46 0L716.48-480l-128.11-84.5v169Z" ],
			600 => [ "0 -960 960 960", "M52.52-204.39v-551.22L466.22-480 52.52-204.39Zm441.26 0v-551.22L907.48-480l-413.7 275.61ZM158.52-480Zm441.26 0Zm-441.26 77 116.78-77-116.78-77v154Zm441.26 0 117.35-77-117.35-77v154Z" ],
			700 => [ "0 -960 960 960", "M16-177v-606l455 303L16-177Zm473 0v-606l455 303-455 303ZM142-480Zm473 0Zm-473 67 102-67-102-67v134Zm473 0 103-67-103-67v134Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFastForward" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
