<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSoundDetectionGlassBreak
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-616h616v616H172Zm28-588v397l180-181 161 161 219-246v-131H200Zm0 560h560v-387L539-339 380-498 200-317v117Z" ],
			200 => [ "0 -960 960 960", "M160-160v-640h640v640H160Zm40-600v388.46l180-181 160.77 160.77L760-638v-122H200Zm0 560h560v-378L539.23-330.23 380-489.46l-180 181V-200Z" ],
			300 => [ "0 -960 960 960", "M140-140v-680h680v680H140Zm60-620v374.23l180-181 160.38 160.39L760-653v-107H200Zm0 560h560v-363L539.62-315.62 380-475.23l-180 181V-200Z" ],
			400 => [ "0 -960 960 960", "M120-120v-720h720v720H120Zm80-640v360l180-181 160 160 220-247v-92H200Zm0 560h560v-348L540-301 380-461 200-280v80Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-736.26h736.26v736.26H111.87Zm91-645.26v346.37L380-588.65l159.76 159.52 217.37-243.89v-84.11H202.87Zm0 554.26h554.26v-333.65L540.24-292.87 380-453.35 202.87-275.22v72.35Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-758.44h758.44v758.44H100.78Zm106-652.44v327.78L380-599.09l159.43 158.87 213.79-239.65v-73.35H206.78Zm0 546.44h546.44v-314.09L540.57-281.78 380-442.91 206.78-268.7v61.92Z" ],
			700 => [ "0 -960 960 960", "M86-86v-788h788v788H86Zm126-662v303l168-168 159 158 209-234v-59H212Zm0 536h536v-288L541-267 380-429 212-260v48Z" ],
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
