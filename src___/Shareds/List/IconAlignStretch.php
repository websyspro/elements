<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAlignStretch
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M306-586v-214H132v-28h696v28H654v214H306ZM132-132v-28h174v-214h348v214h174v28H132Z" ],
			200 => [ "0 -960 960 960", "M300-580v-220H120v-40h720v40H660v220H300ZM120-120v-40h180v-220h360v220h180v40H120Z" ],
			300 => [ "0 -960 960 960", "M290-570v-230H100v-60h760v60H670v230H290ZM100-100v-60h190v-230h380v230h190v60H100Z" ],
			400 => [ "0 -960 960 960", "M280-560v-240H80v-80h800v80H680v240H280ZM80-80v-80h200v-240h400v240h200v80H80Z" ],
			500 => [ "0 -960 960 960", "M274.5-554.5v-242.63H71.87v-91h816.26v91H685.5v242.63h-411ZM71.87-71.87v-91H274.5V-405.5h411v242.63h202.63v91H71.87Z" ],
			600 => [ "0 -960 960 960", "M267-547v-246.22H60.78v-106h838.44v106H693V-547H267ZM60.78-60.78v-106H267V-413h426v246.22h206.22v106H60.78Z" ],
			700 => [ "0 -960 960 960", "M257-537v-251H46v-126h868v126H703v251H257ZM46-46v-126h211v-251h446v251h211v126H46Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAlignStretch" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
