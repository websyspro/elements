<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFastRewind
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M777-312 525-480l252-168v336Zm-342 0L183-480l252-168v336Zm-28-168Zm342 0ZM407-364v-232L233-480l174 116Zm342 0v-232L575-480l174 116Z" ],
			200 => [ "0 -960 960 960", "M796.15-295.38 519.23-480l276.92-184.62v369.24Zm-355.38 0L163.85-480l276.92-184.62v369.24Zm-40-184.62Zm355.38 0ZM400.77-370v-220L235.54-480l165.23 110Zm355.38 0v-220L590.92-480l165.23 110Z" ],
			300 => [ "0 -960 960 960", "M828.07-267.69 509.62-480l318.45-212.31v424.62Zm-377.69 0L131.93-480l318.45-212.31v424.62ZM390.39-480Zm377.69 0ZM390.39-380v-200L239.77-480l150.62 100Zm377.69 0v-200L617.46-480l150.62 100Z" ],
			400 => [ "0 -960 960 960", "M860-240 500-480l360-240v480Zm-400 0L100-480l360-240v480Zm-80-240Zm400 0Zm-400 90v-180l-136 90 136 90Zm400 0v-180l-136 90 136 90Z" ],
			500 => [ "0 -960 960 960", "M880.09-224.93 497.37-480l382.72-255.07v510.14Zm-417.46 0L79.91-480l382.72-255.07v510.14Zm-91-255.07Zm417.46 0Zm-417.46 84.5v-169L243.52-480l128.11 84.5Zm417.46 0v-169L661.22-480l127.87 84.5Z" ],
			600 => [ "0 -960 960 960", "M907.48-204.39 493.78-480l413.7-275.61v551.22Zm-441.26 0L52.52-480l413.7-275.61v551.22ZM360.22-480Zm441.26 0Zm-441.26 77v-154l-117.35 77 117.35 77Zm441.26 0v-154L684.7-480l116.78 77Z" ],
			700 => [ "0 -960 960 960", "M944-177 489-480l455-303v606Zm-473 0L16-480l455-303v606ZM345-480Zm473 0Zm-473 67v-134l-103 67 103 67Zm473 0v-134l-102 67 102 67Z" ],
		};
	}

	public static function create(
		int $size,
		int $weight = 300,
		string $fill = "#000"
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->add( Path::create(
				$path
			))
			->props(
				[
					"xmlns" => "http://www.w3.org/2000/svg",
					"viewBox" => "{$viewBox}",
					"height" => "{$size}",
					"width" => "{$size}",
					"fill" => "{$fill}"
				]
			);
	}
}
