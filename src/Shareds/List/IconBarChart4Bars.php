<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconBarChart4Bars
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-172v-28h696v28H132Zm40-108v-188h68v188h-68Zm182 0v-388h68v388h-68Zm183 0v-268h68v268h-68Zm183 0v-508h68v508h-68Z" ],
			200 => [ "0 -960 960 960", "M120-160v-40h720v40H120Zm40-110.77V-480h80v209.23h-80Zm186.15 0V-680h80v409.23h-80Zm186.93 0V-560h80v289.23h-80Zm186.92 0V-800h80v529.23h-80Z" ],
			300 => [ "0 -960 960 960", "M100-140v-60h760v60H100Zm40-115.39V-500h100v244.61H140Zm193.08 0V-700h100v444.61h-100Zm193.46 0V-580h100v324.61h-100Zm193.46 0V-820h100v564.61H720Z" ],
			400 => [ "0 -960 960 960", "M80-120v-80h800v80H80Zm40-120v-280h120v280H120Zm200 0v-480h120v480H320Zm200 0v-360h120v360H520Zm200 0v-600h120v600H720Z" ],
			500 => [ "0 -960 960 960", "M71.87-111.87v-91h816.26v91H71.87Zm40-135.78v-280.48h131v280.48h-131Zm201.67 0v-480.48h131v480.48h-131Zm201.68 0v-360.48h131v360.48h-131Zm201.91 0v-600.48h131v600.48h-131Z" ],
			600 => [ "0 -960 960 960", "M60.78-100.78v-106h838.44v106H60.78Zm40-157.31v-281.13h146v281.13h-146Zm203.96 0v-481.13h146v481.13h-146Zm203.96 0v-361.13h146v361.13h-146Zm204.52 0v-601.13h146v601.13h-146Z" ],
			700 => [ "0 -960 960 960", "M46-86v-126h868v126H46Zm40-186v-282h166v282H86Zm207 0v-482h166v482H293Zm207 0v-362h166v362H500Zm208 0v-602h166v602H708Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconBarChart4Bars" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
