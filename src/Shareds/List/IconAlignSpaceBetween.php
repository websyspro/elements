<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAlignSpaceBetween
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M306-732v-68H132v-28h696v28H654v68H306ZM132-132v-28h174v-68h348v68h174v28H132Z" ],
			200 => [ "0 -960 960 960", "M300-720v-80H120v-40h720v40H660v80H300ZM120-120v-40h180v-80h360v80h180v40H120Z" ],
			300 => [ "0 -960 960 960", "M290-700v-100H100v-60h760v60H670v100H290ZM100-100v-60h190v-100h380v100h190v60H100Z" ],
			400 => [ "0 -960 960 960", "M280-680v-120H80v-80h800v80H680v120H280ZM80-80v-80h200v-120h400v120h200v80H80Z" ],
			500 => [ "0 -960 960 960", "M274.5-666.13v-131H71.87v-91h816.26v91H685.5v131h-411ZM71.87-71.87v-91H274.5v-131h411v131h202.63v91H71.87Z" ],
			600 => [ "0 -960 960 960", "M267-647.22v-146H60.78v-106h838.44v106H693v146H267ZM60.78-60.78v-106H267v-146h426v146h206.22v106H60.78Z" ],
			700 => [ "0 -960 960 960", "M257-622v-166H46v-126h868v126H703v166H257ZM46-46v-126h211v-166h446v166h211v126H46Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAlignSpaceBetween" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
