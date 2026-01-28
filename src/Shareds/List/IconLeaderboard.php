<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconLeaderboard
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M160-200h195v-320H160v320Zm223 0h194v-560H383v560Zm222 0h195v-240H605v240Zm-473 28v-376h223v-240h250v320h223v296H132Z" ],
			200 => [ "0 -960 960 960", "M160-200h186.92v-320H160v320Zm226.92 0h186.16v-560H386.92v560Zm226.16 0H800v-240H613.08v240ZM120-160v-400h226.92v-240h266.16v320H840v320H120Z" ],
			300 => [ "0 -960 960 960", "M160-200h173.46v-320H160v320Zm233.46 0h173.08v-560H393.46v560Zm233.08 0H800v-240H626.54v240ZM100-140v-440h233.46v-240h293.08v320H860v360H100Z" ],
			400 => [ "0 -960 960 960", "M160-200h160v-320H160v320Zm240 0h160v-560H400v560Zm240 0h160v-240H640v240ZM80-120v-480h240v-240h320v320h240v400H80Z" ],
			500 => [ "0 -960 960 960", "M162.87-202.87h150.67v-314.26H162.87v314.26Zm241.67 0h150.92v-554.26H404.54v554.26Zm241.92 0h150.67v-234.26H646.46v234.26Zm-574.59 91v-496.26h241.67v-240h332.92v320h241.67v416.26H71.87Z" ],
			600 => [ "0 -960 960 960", "M166.78-206.78h137.96v-306.44H166.78v306.44Zm243.96 0h138.52v-546.44H410.74v546.44Zm244.52 0h137.96v-226.44H655.26v226.44Zm-594.48 106v-518.44h243.96v-240h350.52v320h243.96v438.44H60.78Z" ],
			700 => [ "0 -960 960 960", "M172-212h121v-296H172v296Zm247 0h122v-536H419v536Zm248 0h121v-216H667v216ZM46-86v-548h247v-240h374v320h247v468H46Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconLeaderboard" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
