<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconKeep
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m588-458 58 58v28H494v188l-14 14-14-14v-188H314v-28l58-58v-302h-40v-28h296v28h-40v302Zm-234 58h252l-46-46v-314H400v314l-46 46Zm126 0Z" ],
			200 => [ "0 -960 960 960", "M600-463.08 663.08-400v40H500v200l-20 20-20-20v-200H296.92v-40L360-463.08V-760h-40v-40h320v40h-40v296.92ZM354-400h252l-46-46v-314H400v314l-46 46Zm126 0Z" ],
			300 => [ "0 -960 960 960", "M620-471.54 691.54-400v60H510v220l-30 30-30-30v-220H268.46v-60L340-471.54V-760h-40v-60h360v60h-40v288.46ZM354-400h252l-46-46v-314H400v314l-46 46Zm126 0Z" ],
			400 => [ "0 -960 960 960", "m640-480 80 80v80H520v240l-40 40-40-40v-240H240v-80l80-80v-280h-40v-80h400v80h-40v280Zm-286 80h252l-46-46v-314H400v314l-46 46Zm126 0Z" ],
			500 => [ "0 -960 960 960", "m648.13-488.37 80 80v91.24H525.5v239.04L480-32.59l-45.5-45.5v-239.04H231.87v-91.24l80-80v-273.78h-40v-91h416.26v91h-40v273.78Zm-287.2 80.24h238.14l-41.94-41.94v-312.08H402.87v312.08l-41.94 41.94Zm119.07 0Z" ],
			600 => [ "0 -960 960 960", "m659.22-499.78 80 80v106.56H533v237.74l-53 53-53-53v-237.74H220.78v-106.56l80-80v-265.31h-40v-106h438.44v106h-40v265.31Zm-288.83 80.56h219.22l-36.39-36.39v-309.48H406.78v309.48l-36.39 36.39Zm109.61 0Z" ],
			700 => [ "0 -960 960 960", "m674-515 80 80v127H543v236L480-9l-63-63v-236H206v-127l80-80v-254h-40v-126h468v126h-40v254Zm-291 81h194l-29-29v-306H412v306l-29 29Zm97 0Z" ],
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
