<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconClearAll
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-338v-28h469v28H172Zm73-128v-28h469v28H245Zm74-128v-28h469v28H319Z" ],
			200 => [ "0 -960 960 960", "M160-324.62v-40h490v40H160ZM234.62-460v-40h490v40h-490ZM310-595.38v-40h490v40H310Z" ],
			300 => [ "0 -960 960 960", "M140-302.31v-60h525v60H140ZM217.31-450v-60h525v60h-525ZM295-597.69v-60h525v60H295Z" ],
			400 => [ "0 -960 960 960", "M120-280v-80h560v80H120Zm80-160v-80h560v80H200Zm80-160v-80h560v80H280Z" ],
			500 => [ "0 -960 960 960", "M111.87-263.74v-90.76h569.56v90.76H111.87Zm83.35-170.76v-90.76h569.56v90.76H195.22Zm83.35-170.76v-90.76h569.56v90.76H278.57Z" ],
			600 => [ "0 -960 960 960", "M100.78-241.56V-347h582.61v105.44H100.78ZM188.7-427v-105.44h582.6V-427H188.7Zm87.91-185.44v-105.43h582.61v105.43H276.61Z" ],
			700 => [ "0 -960 960 960", "M86-212v-125h600v125H86Zm94-205v-125h600v125H180Zm94-205v-125h600v125H274Z" ],
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
