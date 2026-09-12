<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconLineEndSquare
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M550-370h220v-220H550v220Zm-28 28v-124H136v-28h386v-124h276v276H522Zm138-138Z" ],
			200 => [ "0 -960 960 960", "M543.08-363.08h233.84v-233.84H543.08v233.84Zm-40 40V-460h-380v-40h380v-136.92h313.84v313.84H503.08ZM660-480Z" ],
			300 => [ "0 -960 960 960", "M531.54-351.54h256.92v-256.92H531.54v256.92Zm-60 60V-450h-370v-60h370v-158.46h376.92v376.92H471.54ZM660-480Z" ],
			400 => [ "0 -960 960 960", "M520-340h280v-280H520v280Zm-80 80v-180H80v-80h360v-180h440v440H440Zm220-220Z" ],
			500 => [ "0 -960 960 960", "M527.17-347.17h265.66v-265.66H527.17v265.66Zm-91 91V-434.5H74.5v-91h361.67v-178.33h447.66v447.66H436.17ZM660-480Z" ],
			600 => [ "0 -960 960 960", "M536.96-356.96h246.08v-246.08H536.96v246.08Zm-106 106V-427H67v-106h363.96v-176.04h458.08v458.08H430.96ZM660-480Z" ],
			700 => [ "0 -960 960 960", "M550-370h220v-220H550v220ZM424-244v-173H57v-126h367v-173h472v472H424Zm236-236Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconLineEndSquare" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
