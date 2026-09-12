<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconPowerInput
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-386v-28h151v28H132Zm0-160v-28h656v28H132Zm251 160v-28h154v28H383Zm254 0v-28h151v28H637Z" ],
			200 => [ "0 -960 960 960", "M120-380v-40h162.31v40H120Zm0-160v-40h680v40H120Zm257.69 160v-40h164.62v40H377.69Zm260 0v-40H800v40H637.69Z" ],
			300 => [ "0 -960 960 960", "M100-370v-60h181.15v60H100Zm0-160v-60h720v60H100Zm268.85 160v-60h182.3v60h-182.3Zm270 0v-60H820v60H638.85Z" ],
			400 => [ "0 -960 960 960", "M80-360v-80h200v80H80Zm0-160v-80h760v80H80Zm280 160v-80h200v80H360Zm280 0v-80h200v80H640Z" ],
			500 => [ "0 -960 960 960", "M71.87-349v-91h205.02v91H71.87Zm0-171v-91h776.26v91H71.87Zm285.02 171v-91h206.46v91H356.89Zm286.46 0v-91h204.78v91H643.35Z" ],
			600 => [ "0 -960 960 960", "M60.78-334v-106h211.87v106H60.78Zm0-186v-106h798.44v106H60.78Zm291.87 186v-106h215.26v106H352.65Zm295.26 0v-106h211.31v106H647.91Z" ],
			700 => [ "0 -960 960 960", "M46-314v-126h221v126H46Zm0-206v-126h828v126H46Zm301 206v-126h227v126H347Zm307 0v-126h220v126H654Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconPowerInput" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
