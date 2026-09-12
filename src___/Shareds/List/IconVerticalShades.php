<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconVerticalShades
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-172v-28h80v-588h536v588h80v28H132Zm108-28h119v-560H240v560Zm147 0h186v-560H387v560Zm214 0h119v-560H601v560Zm-361 0v-560 560Zm480 0v-560 560Z" ],
			200 => [ "0 -960 960 960", "M120-160v-40h80v-600h560v600h80v40H120Zm120-40h110v-560H240v560Zm150 0h180v-560H390v560Zm220 0h110v-560H610v560Zm-370 0v-560 560Zm480 0v-560 560Z" ],
			300 => [ "0 -960 960 960", "M100-140v-60h80v-620h600v620h80v60H100Zm140-60h95v-560h-95v560Zm155 0h170v-560H395v560Zm230 0h95v-560h-95v560Zm-385 0v-560 560Zm480 0v-560 560Z" ],
			400 => [ "0 -960 960 960", "M80-120v-80h80v-640h640v640h80v80H80Zm160-80h80v-560h-80v560Zm160 0h160v-560H400v560Zm240 0h80v-560h-80v560Zm-400 0v-560 560Zm480 0v-560 560Z" ],
			500 => [ "0 -960 960 960", "M69.24-109.24v-91h80v-650.52h661.52v650.52h80v91H69.24Zm171-91h75.22v-559.52h-75.22v559.52Zm161.43 0h156.66v-559.52H401.67v559.52Zm242.87 0h75.22v-559.52h-75.22v559.52Zm-404.3 0v-559.52 559.52Zm479.52 0v-559.52 559.52Z" ],
			600 => [ "0 -960 960 960", "M54.56-94.56v-106.01h80v-664.87h690.88v664.87h80v106.01H54.56Zm186.01-106.01h68.69v-558.86h-68.69v558.86Zm163.39 0h152.08v-558.86H403.96v558.86Zm246.78 0h68.69v-558.86h-68.69v558.86Zm-410.17 0v-558.86 558.86Zm478.86 0v-558.86 558.86Z" ],
			700 => [ "0 -960 960 960", "M35-75v-126h80v-684h730v684h80v126H35Zm206-126h60v-558h-60v558Zm166 0h146v-558H407v558Zm252 0h60v-558h-60v558Zm-418 0v-558 558Zm478 0v-558 558Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconVerticalShades" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
