<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconVerticalDistribute
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-132v-40h696v40H132Zm174-314v-68h348v68H306ZM132-788v-40h696v40H132Z" ],
			200 => [ "0 -960 960 960", "M120-120v-49.23h720V-120H120Zm180-320v-80h360v80H300ZM120-790.77V-840h720v49.23H120Z" ],
			300 => [ "0 -960 960 960", "M100-100v-64.62h760V-100H100Zm190-330v-100h380v100H290ZM100-795.38V-860h760v64.62H100Z" ],
			400 => [ "0 -960 960 960", "M80-80v-80h800v80H80Zm200-340v-120h400v120H280ZM80-800v-80h800v80H80Z" ],
			500 => [ "0 -960 960 960", "M71.87-71.87v-91h816.26v91H71.87ZM274.5-414.5v-131h411v131h-411ZM71.87-797.13v-91h816.26v91H71.87Z" ],
			600 => [ "0 -960 960 960", "M60.78-60.78v-106h838.44v106H60.78ZM267-407v-146h426v146H267ZM60.78-793.22v-106h838.44v106H60.78Z" ],
			700 => [ "0 -960 960 960", "M46-46v-126h868v126H46Zm211-351v-166h446v166H257ZM46-788v-126h868v126H46Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconVerticalDistribute" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
