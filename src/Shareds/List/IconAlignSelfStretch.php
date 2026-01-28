<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignSelfStretch
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-800v-28h696v28H132Zm0 668v-28h696v28H132Zm314-180v-356h68v356h-68Z" ],
			200 => [ "0 -960 960 960", "M120-800v-40h720v40H120Zm0 680v-40h720v40H120Zm320-180v-380h80v380h-80Z" ],
			300 => [ "0 -960 960 960", "M100-800v-60h760v60H100Zm0 700v-60h760v60H100Zm330-180v-420h100v420H430Z" ],
			400 => [ "0 -960 960 960", "M80-800v-80h800v80H80Zm0 720v-80h800v80H80Zm340-180v-460h120v460H420Z" ],
			500 => [ "0 -960 960 960", "M71.87-797.13v-91h816.26v91H71.87Zm0 725.26v-91h816.26v91H71.87ZM414.5-254.5v-471h131v471h-131Z" ],
			600 => [ "0 -960 960 960", "M60.78-793.22v-106h838.44v106H60.78Zm0 732.44v-106h838.44v106H60.78ZM407-247v-486h146v486H407Z" ],
			700 => [ "0 -960 960 960", "M46-788v-126h868v126H46Zm0 742v-126h868v126H46Zm351-191v-506h166v506H397Z" ],
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
