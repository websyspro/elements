<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconPlayArrow
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M372-294v-372l292 186-292 186Zm28-186Zm0 134 212-134-212-134v268Z" ],
			200 => [ "0 -960 960 960", "M360-272.31v-415.38L686.15-480 360-272.31ZM400-480Zm0 134 211.54-134L400-614v268Z" ],
			300 => [ "0 -960 960 960", "M340-236.16v-487.68L723.07-480 340-236.16ZM400-480Zm0 134 210.77-134L400-614v268Z" ],
			400 => [ "0 -960 960 960", "M320-200v-560l440 280-440 280Zm80-280Zm0 134 210-134-210-134v268Z" ],
			500 => [ "0 -960 960 960", "M311.87-185.41v-589.18L775.07-480l-463.2 294.59Zm91-294.59Zm0 128.5L604.5-480 402.87-608.5v257Z" ],
			600 => [ "0 -960 960 960", "M300.78-165.52v-628.96L795.61-480 300.78-165.52Zm106-314.48Zm0 121L597-480 406.78-601v242Z" ],
			700 => [ "0 -960 960 960", "M286-139v-682l537 341-537 341Zm126-341Zm0 111 175-111-175-111v222Z" ],
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
