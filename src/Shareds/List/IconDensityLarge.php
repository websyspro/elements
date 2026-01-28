<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconDensityLarge
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-28h616v28H172Zm0-588v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-160v-40h640v40H160Zm0-600v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-140v-60h680v60H140Zm0-620v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-120v-80h720v80H120Zm0-640v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-88.61h736.26v88.61H111.87Zm0-647.65v-88.61h736.26v88.61H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-100.35h758.44v100.35H100.78Zm0-658.09v-100.35h758.44v100.35H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-86v-116h788v116H86Zm0-672v-116h788v116H86Z" ],
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
