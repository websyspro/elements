<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignFlexStart
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-800v-28h696v28H132Zm314 640v-508h68v508h-68Z" ],
			200 => [ "0 -960 960 960", "M120-800v-40h720v40H120Zm320 640v-520h80v520h-80Z" ],
			300 => [ "0 -960 960 960", "M100-800v-60h760v60H100Zm330 640v-540h100v540H430Z" ],
			400 => [ "0 -960 960 960", "M80-800v-80h800v80H80Zm340 640v-560h120v560H420Z" ],
			500 => [ "0 -960 960 960", "M71.87-797.13v-91h816.26v91H71.87ZM414.5-162.87V-725.5h131v562.63h-131Z" ],
			600 => [ "0 -960 960 960", "M60.78-793.22v-106h838.44v106H60.78ZM407-166.78V-733h146v566.22H407Z" ],
			700 => [ "0 -960 960 960", "M46-788v-126h868v126H46Zm351 616v-571h166v571H397Z" ],
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
