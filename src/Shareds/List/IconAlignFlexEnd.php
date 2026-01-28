<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignFlexEnd
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-132v-28h696v28H132Zm314-160v-508h68v508h-68Z" ],
			200 => [ "0 -960 960 960", "M120-120v-40h720v40H120Zm320-160v-520h80v520h-80Z" ],
			300 => [ "0 -960 960 960", "M100-100v-60h760v60H100Zm330-160v-540h100v540H430Z" ],
			400 => [ "0 -960 960 960", "M80-80v-80h800v80H80Zm340-160v-560h120v560H420Z" ],
			500 => [ "0 -960 960 960", "M71.87-71.87v-91h816.26v91H71.87ZM414.5-234.5v-562.63h131v562.63h-131Z" ],
			600 => [ "0 -960 960 960", "M60.78-60.78v-106h838.44v106H60.78ZM407-227v-566.22h146V-227H407Z" ],
			700 => [ "0 -960 960 960", "M46-46v-126h868v126H46Zm351-171v-571h166v571H397Z" ],
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
