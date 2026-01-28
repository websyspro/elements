<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignItemsStretch
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M306-266v-428h68v428h-68Zm280 0v-428h68v428h-68ZM132-800v-28h696v28H132Zm0 668v-28h696v28H132Z" ],
			200 => [ "0 -960 960 960", "M300-260v-440h80v440h-80Zm280 0v-440h80v440h-80ZM120-800v-40h720v40H120Zm0 680v-40h720v40H120Z" ],
			300 => [ "0 -960 960 960", "M290-250v-460h100v460H290Zm280 0v-460h100v460H570ZM100-800v-60h760v60H100Zm0 700v-60h760v60H100Z" ],
			400 => [ "0 -960 960 960", "M280-240v-480h120v480H280Zm280 0v-480h120v480H560ZM80-800v-80h800v80H80Zm0 720v-80h800v80H80Z" ],
			500 => [ "0 -960 960 960", "M274.5-234.5v-491h131v491h-131Zm280 0v-491h131v491h-131ZM71.87-797.13v-91h816.26v91H71.87Zm0 725.26v-91h816.26v91H71.87Z" ],
			600 => [ "0 -960 960 960", "M267-227v-506h146v506H267Zm280 0v-506h146v506H547ZM60.78-793.22v-106h838.44v106H60.78Zm0 732.44v-106h838.44v106H60.78Z" ],
			700 => [ "0 -960 960 960", "M257-217v-526h166v526H257Zm280 0v-526h166v526H537ZM46-788v-126h868v126H46Zm0 742v-126h868v126H46Z" ],
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
