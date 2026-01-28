<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowBackIos
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M400-116 36-480l364-364 34 34-330 330 330 330-34 34Z" ],
			200 => [ "0 -960 960 960", "M400-107.69 27.69-480 400-852.31l42.54 42.54L112.77-480l329.77 329.77L400-107.69Z" ],
			300 => [ "0 -960 960 960", "M400-93.85 13.85-480 400-866.15l56.77 56.77L127.38-480l329.39 329.38L400-93.85Z" ],
			400 => [ "0 -960 960 960", "M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z" ],
			500 => [ "0 -960 960 960", "M407.65-72.35 0-480l407.65-407.65L486.3-809l-329 329 329 329-78.65 78.65Z" ],
			600 => [ "0 -960 960 960", "M418.09-61.91 0-480l418.09-418.09L507.18-809l-329 329 329 329-89.09 89.09Z" ],
			700 => [ "0 -960 960 960", "M432-48 0-480l432-432 103 103-329 329 329 329L432-48Z" ],
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
