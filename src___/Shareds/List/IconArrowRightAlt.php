<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowRightAlt
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m544-276-20-20 170-170H212v-28h482L524-664l20-20 204 204-204 204Z" ],
			200 => [ "0 -960 960 960", "m547.69-267.69-28.31-28.77L682.92-460H200v-40h482.92L519.38-663.54l28.31-28.77L760-480 547.69-267.69Z" ],
			300 => [ "0 -960 960 960", "m553.85-253.85-42.16-43.38L664.46-450H180v-60h484.46L511.69-662.77l42.16-43.38L780-480 553.85-253.85Z" ],
			400 => [ "0 -960 960 960", "m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z" ],
			500 => [ "0 -960 960 960", "m560.24-232.35-63.65-65.17L633.56-434.5H151.87v-91h481.69L496.59-662.48l63.65-65.17L808.13-480 560.24-232.35Z" ],
			600 => [ "0 -960 960 960", "m560.57-221.91-74.09-74.96L616.61-427H140.78v-106h475.83L486.48-663.13l74.09-74.96L819.22-480 560.57-221.91Z" ],
			700 => [ "0 -960 960 960", "m561-208-88-88 121-121H126v-126h468L473-664l88-88 273 272-273 272Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowRightAlt" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
