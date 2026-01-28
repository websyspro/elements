<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowTopLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M680-212v-374H266l154 154-20 20-188-188 188-188 20 20-154 154h442v402h-28Z" ],
			200 => [ "0 -960 960 960", "M680-200v-380H276.85l151.69 151.69-28.31 28.54L200-600l200-200 28.54 28.54L276.85-620H720v420h-40Z" ],
			300 => [ "0 -960 960 960", "M680-180v-390H294.92l147.85 147.85-42.15 42.76L180-600l220-220 42.77 42.77L294.92-630H740v450h-60Z" ],
			400 => [ "0 -960 960 960", "M680-160v-400H313l144 144-56 57-241-241 240-240 57 57-144 143h447v480h-80Z" ],
			500 => [ "0 -960 960 960", "M677.13-151.87V-554.5H325.91l138.74 138.74-63.89 64.65L151.87-600 400-848.13l64.65 64.65L325.91-645.5h442.22v493.63h-91Z" ],
			600 => [ "0 -960 960 960", "M673.22-140.78V-547h-329.7l131.57 131.57-74.66 75.08L140.78-600 400-859.22l75.09 75.09L343.52-653h435.7v512.22h-106Z" ],
			700 => [ "0 -960 960 960", "M668-126v-411H367l122 122-89 89-274-274 274-274 89 89-122 122h427v537H668Z" ],
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
