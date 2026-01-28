<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconCode
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M320-276 116-480l204-204 20 20-184 184 184 184-20 20Zm320 0-20-20 184-184-184-184 20-20 204 204-204 204Z" ],
			200 => [ "0 -960 960 960", "M320-267.69 107.69-480 320-692.31l28.54 28.54-184 184L348.31-296 320-267.69Zm320 0-28.54-28.54 184-184L611.69-664 640-692.31 852.31-480 640-267.69Z" ],
			300 => [ "0 -960 960 960", "M320-253.85 93.85-480 320-706.15l42.77 42.77-184 184L362.15-296 320-253.85Zm320 0-42.77-42.77 184-184L597.85-664 640-706.15 866.15-480 640-253.85Z" ],
			400 => [ "0 -960 960 960", "M320-240 80-480l240-240 57 57-184 184 183 183-56 56Zm320 0-57-57 184-184-183-183 56-56 240 240-240 240Z" ],
			500 => [ "0 -960 960 960", "M316.41-232.35 68.52-480l247.89-247.89 64.89 64.65-184 184 183 183-63.89 63.89Zm327.18.24-64.89-64.65 184-184-183-183 63.89-63.89L891.48-480 643.59-232.11Z" ],
			600 => [ "0 -960 960 960", "M311.52-221.91 52.87-480l258.65-258.65 75.65 75.08-184 184 183 183-74.65 74.66Zm336.96.56-75.65-75.08 184-184-183-183 74.65-74.66L907.13-480 648.48-221.35Z" ],
			700 => [ "0 -960 960 960", "M305-208 32-480l273-273 90 89-184 184 183 183-89 89Zm350 1-90-89 184-184-183-183 89-89 273 272-273 273Z" ],
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
