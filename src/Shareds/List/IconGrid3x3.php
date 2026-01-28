<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconGrid3x3
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M372-212v-160H212v-28h160v-160H212v-28h160v-160h28v160h160v-160h28v160h160v28H588v160h160v28H588v160h-28v-160H400v160h-28Zm28-188h160v-160H400v160Z" ],
			200 => [ "0 -960 960 960", "M360-200v-160H200v-40h160v-160H200v-40h160v-160h40v160h160v-160h40v160h160v40H600v160h160v40H600v160h-40v-160H400v160h-40Zm40-200h160v-160H400v160Z" ],
			300 => [ "0 -960 960 960", "M340-180v-160H180v-60h160v-160H180v-60h160v-160h60v160h160v-160h60v160h160v60H620v160h160v60H620v160h-60v-160H400v160h-60Zm60-220h160v-160H400v160Z" ],
			400 => [ "0 -960 960 960", "M320-160v-160H160v-80h160v-160H160v-80h160v-160h80v160h160v-160h80v160h160v80H640v160h160v80H640v160h-80v-160H400v160h-80Zm80-240h160v-160H400v160Z" ],
			500 => [ "0 -960 960 960", "M310.91-154.5v-156.41H154.5v-91h156.41v-156.18H154.5v-91h156.41V-805.5h91v156.41h156.18V-805.5h91v156.41H805.5v91H649.09v156.18H805.5v91H649.09v156.41h-91v-156.41H401.91v156.41h-91Zm91-247.41h156.18v-156.18H401.91v156.18Z" ],
			600 => [ "0 -960 960 960", "M298.52-147v-151.52H147v-106h151.52v-150.96H147v-106h151.52V-813h106v151.52h150.96V-813h106v151.52H813v106H661.48v150.96H813v106H661.48V-147h-106v-151.52H404.52V-147h-106Zm106-257.52h150.96v-150.96H404.52v150.96Z" ],
			700 => [ "0 -960 960 960", "M282-137v-145H137v-126h145v-144H137v-126h145v-145h126v145h144v-145h126v145h145v126H678v144h145v126H678v145H552v-145H408v145H282Zm126-271h144v-144H408v144Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconGrid3x3" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
