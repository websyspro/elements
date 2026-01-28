<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconDetails
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m168-172 312-561 312 561H168Zm48-28h250v-450L216-200Zm278 0h250L494-650v450Z" ],
			200 => [ "0 -960 960 960", "M147.69-160 480-757.69 812.31-160H147.69ZM216-200h244v-439.15L216-200Zm284 0h244L500-639.15V-200Z" ],
			300 => [ "0 -960 960 960", "M113.85-140 480-798.84 846.15-140h-732.3ZM216-200h234v-421.08L216-200Zm294 0h234L510-621.08V-200Z" ],
			400 => [ "0 -960 960 960", "m80-120 400-720 400 720H80Zm136-80h224v-403L216-200Zm304 0h224L520-603v403Z" ],
			500 => [ "0 -960 960 960", "M65.41-111.87 480-857.94l414.59 746.07H65.41Zm154.66-91H434.5v-385.78L220.07-202.87Zm305.43 0h214.43L525.5-588.65v385.78Z" ],
			600 => [ "0 -960 960 960", "M45.52-100.78 480-882.39l434.48 781.61H45.52Zm180.09-106H427v-362.31L225.61-206.78Zm307.39 0h201.39L533-569.09v362.31Z" ],
			700 => [ "0 -960 960 960", "m19-86 461-829L941-86H19Zm214-126h184v-331L233-212Zm310 0h184L543-543v331Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconDetails" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
