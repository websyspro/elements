<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconStairs2
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-252v-28h222.5v-214H577v-214h251v28H605.5v214H383v214H132Z" ],
			200 => [ "0 -960 960 960", "M120-240v-40h226.54v-220h226.54v-220H840v40H613.46v220H386.92v220H120Z" ],
			300 => [ "0 -960 960 960", "M100-220v-60h233.27v-230h233.27v-230H860v60H626.73v230H393.46v230H100Z" ],
			400 => [ "0 -960 960 960", "M80-200v-80h240v-240h240v-240h320v80H640v240H400v240H80Z" ],
			500 => [ "0 -960 960 960", "M71.87-191.87v-91h241.67v-242.87h241.68v-242.39h332.91v91H646.22v242.39H404.54v242.87H71.87Z" ],
			600 => [ "0 -960 960 960", "M60.78-180.78v-106h243.96v-246.79H548.7v-245.65h350.52v106H654.7v245.66H410.74v246.78H60.78Z" ],
			700 => [ "0 -960 960 960", "M46-166v-126h247v-252h247v-250h374v126H666v250H419v252H46Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconStairs2" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
