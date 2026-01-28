<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconCheckSmall
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M400-341 277-464l19-19 104 104 264-264 19 19-283 283Z" ],
			200 => [ "0 -960 960 960", "M400-332.46 268.46-464 296-491.54l104 104 264-264L691.54-624 400-332.46Z" ],
			300 => [ "0 -960 960 960", "M400-318.23 254.23-464 296-505.77l104 104 264-264L705.77-624 400-318.23Z" ],
			400 => [ "0 -960 960 960", "M400-304 240-464l56-56 104 104 264-264 56 56-320 320Z" ],
			500 => [ "0 -960 960 960", "m400-296.11-165.5-165.5 63.89-63.89L400-423.89 661.61-685.5l63.89 63.89L400-296.11Z" ],
			600 => [ "0 -960 960 960", "m400-285.35-173-173L301.65-533 400-434.65 658.35-693 733-618.35l-333 333Z" ],
			700 => [ "0 -960 960 960", "M400-271 217-454l89-89 94 94 254-254 89 89-343 343Z" ],
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
