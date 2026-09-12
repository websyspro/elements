<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconVerticalShadesClosed
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-172v-28h80v-588h536v588h80v28H132Zm108-28h99v-560h-99v560Zm127 0h99v-560h-99v560Zm127 0h99v-560h-99v560Zm127 0h99v-560h-99v560Z" ],
			200 => [ "0 -960 960 960", "M120-160v-40h80v-600h560v600h80v40H120Zm120-40h90v-560h-90v560Zm130 0h90v-560h-90v560Zm130 0h90v-560h-90v560Zm130 0h90v-560h-90v560Z" ],
			300 => [ "0 -960 960 960", "M100-140v-60h80v-620h600v620h80v60H100Zm140-60h75v-560h-75v560Zm135 0h75v-560h-75v560Zm135 0h75v-560h-75v560Zm135 0h75v-560h-75v560Z" ],
			400 => [ "0 -960 960 960", "M80-120v-80h80v-640h640v640h80v80H80Zm160-80h60v-560h-60v560Zm140 0h60v-560h-60v560Zm140 0h60v-560h-60v560Zm140 0h60v-560h-60v560Z" ],
			500 => [ "0 -960 960 960", "M69.24-109.24v-91h80v-650.52h661.52v650.52h80v91H69.24Zm171-91h55.22v-559.52h-55.22v559.52Zm141.43 0h55.22v-559.52h-55.22v559.52Zm141.44 0h55.22v-559.52h-55.22v559.52Zm141.43 0h55.22v-559.52h-55.22v559.52Z" ],
			600 => [ "0 -960 960 960", "M54.56-94.56v-106.01h80v-664.87h690.88v664.87h80v106.01H54.56Zm186.01-106.01h48.69v-558.86h-48.69v558.86Zm143.39 0h48.69v-558.86h-48.69v558.86Zm143.39 0h48.69v-558.86h-48.69v558.86Zm143.39 0h48.69v-558.86h-48.69v558.86Z" ],
			700 => [ "0 -960 960 960", "M35-75v-126h80v-684h730v684h80v126H35Zm206-126h40v-558h-40v558Zm146 0h40v-558h-40v558Zm146 0h40v-558h-40v558Zm146 0h40v-558h-40v558Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconVerticalShadesClosed" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
