<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowDropDown
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-396 342-534h276L480-396Z" ],
			200 => [ "0 -960 960 960", "M480-387.69 327.69-540h304.62L480-387.69Z" ],
			300 => [ "0 -960 960 960", "M480-373.85 303.85-550h352.3L480-373.85Z" ],
			400 => [ "0 -960 960 960", "M480-360 280-560h400L480-360Z" ],
			500 => [ "0 -960 960 960", "M480-352.35 266.85-565.5h426.3L480-352.35Z" ],
			600 => [ "0 -960 960 960", "M480-341.91 248.91-573h462.18L480-341.91Z" ],
			700 => [ "0 -960 960 960", "M480-328 225-583h510L480-328Z" ],
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
