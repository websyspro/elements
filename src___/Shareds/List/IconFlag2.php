<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFlag2
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M252-132v-656h536l-85 162 85 162H280v332h-28Zm28-360h461l-70-134 70-134H280v268Zm0 0v-268 268Z" ],
			200 => [ "0 -960 960 960", "M240-120v-680h560l-83.85 170.77L800-458.46H280V-120h-40Zm40-378.46h456.62l-64.93-130.77L736.62-760H280v261.54Zm0 0V-760v261.54Z" ],
			300 => [ "0 -960 960 960", "M220-100v-720h600l-81.92 185.39L820-449.23H280V-100h-60Zm60-409.23h449.31l-56.46-125.38L729.31-760H280v250.77Zm0 0V-760-509.23Z" ],
			400 => [ "0 -960 960 960", "M200-80v-760h640l-80 200 80 200H280v360h-80Zm80-440h442l-48-120 48-120H280v240Zm0 0v-240 240Z" ],
			500 => [ "0 -960 960 960", "M191.87-71.87v-776.26h656.26l-86.7 209.8 86.7 209.57H282.87v356.89h-91Zm91-447.65h428.85l-48.96-118.81 48.96-118.8H282.87v237.61Zm0 0v-237.61 237.61Z" ],
			600 => [ "0 -960 960 960", "M180.78-60.78v-798.44h678.44l-95.83 223.18 95.83 222.61H286.78v352.65h-106Zm106-458.09h410.91l-50.26-117.17 50.26-117.18H286.78v234.35Zm0 0v-234.35V-518.87Z" ],
			700 => [ "0 -960 960 960", "M166-46v-828h708L766-633l108 240H292v347H166Zm126-472h387l-52-115 52-115H292v230Zm0 0v-230 230Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFlag2" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
