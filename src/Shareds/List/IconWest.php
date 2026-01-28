<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconWest
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M378-235 132-481l246-246 19 19-213 213h645v28H185l213 213-20 19Z" ],
			200 => [ "0 -960 960 960", "M373.85-226.92 120-480.77l253.85-253.85 27.53 27.54-206.07 206.31h645.46v40H196.08l206.3 206.31-28.53 27.54Z" ],
			300 => [ "0 -960 960 960", "M366.92-213.46 100-480.38l266.92-266.93 41.77 41.77-194.54 195.16h646.23v59.99H214.54l195.15 195.16-42.77 41.77Z" ],
			400 => [ "0 -960 960 960", "M360-200 80-480l280-280 56 56-183 184h647v80H233l184 184-57 56Z" ],
			500 => [ "0 -960 960 960", "M360.48-191.63 72.35-480l288.13-288.13 63.89 63.65L245.91-525.5h642.22v91H245.91l179.22 178.98-64.65 63.89Z" ],
			600 => [ "0 -960 960 960", "M361.13-180.22 61.91-480l299.22-299.22 74.65 74.09L263.52-533h635.7v106h-635.7l172.7 172.13-75.09 74.65Z" ],
			700 => [ "0 -960 960 960", "M362-165 48-480l314-314 89 88-164 163h627v126H287l164 163-89 89Z" ],
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
