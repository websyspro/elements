<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowInsert
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M715-277 305-686v380h-28v-428h428v28H325l409 410-19 19Z" ],
			200 => [ "0 -960 960 960", "m712.46-268.46-404-403.23V-300h-40v-440h440v40H336.77L740-296l-27.54 27.54Z" ],
			300 => [ "0 -960 960 960", "m708.23-254.23-394-393.62V-290h-60v-460h460v60H356.38L750-296l-41.77 41.77Z" ],
			400 => [ "0 -960 960 960", "M704-240 320-624v344h-80v-480h480v80H376l384 384-56 56Z" ],
			500 => [ "0 -960 960 960", "m701.61-232.11-378.5-378.5v336.11h-91v-491h491v91H387L765.5-296l-63.89 63.89Z" ],
			600 => [ "0 -960 960 960", "m698.35-221.35-371-371V-267h-106v-506h506v106H402l371 371-74.65 74.65Z" ],
			700 => [ "0 -960 960 960", "M694-207 333-568v311H207v-526h526v126H422l361 361-89 89Z" ],
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
