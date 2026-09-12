<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconCollapseContent
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M440-440v188h-28v-160H252v-28h188Zm108-268v160h160v28H520v-188h28Z" ],
			200 => [ "0 -960 960 960", "M440-440v200h-40v-160H240v-40h200Zm120-280v160h160v40H520v-200h40Z" ],
			300 => [ "0 -960 960 960", "M440-440v220h-60v-160H220v-60h220Zm140-300v160h160v60H520v-220h60Z" ],
			400 => [ "0 -960 960 960", "M440-440v240h-80v-160H200v-80h240Zm160-320v160h160v80H520v-240h80Z" ],
			500 => [ "0 -960 960 960", "M442.87-443.11v251h-91v-160h-160v-91h251Zm165.26-325.02v160h160v91h-251v-251h91Z" ],
			600 => [ "0 -960 960 960", "M446.78-447.35v266h-106v-160h-160v-106h266Zm172.44-331.87v160h160v106h-266v-266h106Z" ],
			700 => [ "0 -960 960 960", "M452-453v286H326v-160H166v-126h286Zm182-341v160h160v126H508v-286h126Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconCollapseContent" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
