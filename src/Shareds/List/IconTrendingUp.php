<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconTrendingUp
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m152-287-20-20 239-241 160 160 251-247H640v-28h188v188h-28v-140L531-346 371-506 152-287Z" ],
			200 => [ "0 -960 960 960", "M148.31-276.15 120-304.46l252.15-254.16 160 160 241.08-237.53H640v-40h200v200h-40v-131.7L532.15-340l-160-160-223.84 223.85Z" ],
			300 => [ "0 -960 960 960", "M142.15-258.08 100-300.23l274.08-276.08 160 160 224.54-221.77H640v-60h220v220h-60v-117.84L534.08-330l-160-160-231.93 231.92Z" ],
			400 => [ "0 -960 960 960", "m136-240-56-56 296-298 160 160 208-206H640v-80h240v240h-80v-104L536-320 376-480 136-240Z" ],
			500 => [ "0 -960 960 960", "m135.76-232.83-63.89-63.65L377.2-603.57l160 160 196.04-194.52H631.87v-91h256.26v256.02h-91v-101.36L537.2-314.26l-160-160-241.44 241.43Z" ],
			600 => [ "0 -960 960 960", "m135.43-223.04-74.65-74.09 318.05-319.48 160 160 179.73-178.87h-97.78v-106h278.44v277.87h-106v-97.78L538.83-306.43l-160-160-243.4 243.39Z" ],
			700 => [ "0 -960 960 960", "m135-210-89-88 335-336 160 160 158-158h-93v-126h308v307H788v-93L541-296 381-456 135-210Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconTrendingUp" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
