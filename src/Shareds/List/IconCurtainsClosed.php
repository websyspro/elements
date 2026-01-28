<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconCurtainsClosed
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-172v-28h80v-588h536v588h80v28H132Zm108-28h159v-560H240v560Zm187 0h106v-560H427v560Zm134 0h159v-560H561v560Zm-321 0v-560 560Zm480 0v-560 560Z" ],
			200 => [ "0 -960 960 960", "M120-160v-40h80v-600h560v600h80v40H120Zm120-40h150v-560H240v560Zm190 0h100v-560H430v560Zm140 0h150v-560H570v560Zm-330 0v-560 560Zm480 0v-560 560Z" ],
			300 => [ "0 -960 960 960", "M100-140v-60h80v-620h600v620h80v60H100Zm140-60h135v-560H240v560Zm195 0h90v-560h-90v560Zm150 0h135v-560H585v560Zm-345 0v-560 560Zm480 0v-560 560Z" ],
			400 => [ "0 -960 960 960", "M80-120v-80h80v-640h640v640h80v80H80Zm160-80h120v-560H240v560Zm200 0h80v-560h-80v560Zm160 0h120v-560H600v560Zm-360 0v-560 560Zm480 0v-560 560Z" ],
			500 => [ "0 -960 960 960", "M69.24-109.24v-91h80v-650.52h661.52v650.52h80v91H69.24Zm171-91h115.22v-559.52H240.24v559.52Zm201.43 0h76.66v-559.52h-76.66v559.52Zm162.87 0h115.22v-559.52H604.54v559.52Zm-364.3 0v-559.52 559.52Zm479.52 0v-559.52 559.52Z" ],
			600 => [ "0 -960 960 960", "M54.56-94.56v-106.01h80v-664.87h690.88v664.87h80v106.01H54.56Zm186.01-106.01h108.69v-558.86H240.57v558.86Zm203.39 0h72.08v-558.86h-72.08v558.86Zm166.78 0h108.69v-558.86H610.74v558.86Zm-370.17 0v-558.86 558.86Zm478.86 0v-558.86 558.86Z" ],
			700 => [ "0 -960 960 960", "M35-75v-126h80v-684h730v684h80v126H35Zm206-126h100v-558H241v558Zm206 0h66v-558h-66v558Zm172 0h100v-558H619v558Zm-378 0v-558 558Zm478 0v-558 558Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconCurtainsClosed" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
