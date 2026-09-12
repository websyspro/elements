<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconCallMissedOutgoing
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M475-300 171-604l20-20 284 284 265-265H520v-28h268v268h-28v-220L475-300Z" ],
			200 => [ "0 -960 960 960", "M476.15-291.46 159.23-608.38l28.31-28.54 288.61 288.61 255.54-255.54H520v-40h280v280h-40v-211.46L476.15-291.46Z" ],
			300 => [ "0 -960 960 960", "M478.08-277.23 139.62-615.69l42.15-42.77 296.31 296.31 239.77-239.77H520v-60h300v300h-60v-197.24L478.08-277.23Z" ],
			400 => [ "0 -960 960 960", "M480-263 120-623l56-57 304 304 224-224H520v-80h320v320h-80v-183L480-263Z" ],
			500 => [ "0 -960 960 960", "M481.2-255.35 111.87-624.43l63.89-64.66L481.2-383.65l212.04-212.28H517.13v-91h331v331h-91v-175.35L481.2-255.35Z" ],
			600 => [ "0 -960 960 960", "M482.83-244.91 100.78-626.39l74.65-75.09 307.4 307.39 195.73-196.3H513.22v-106h346v346h-106V-515.3L482.83-244.91Z" ],
			700 => [ "0 -960 960 960", "M485-231 86-629l89-89 310 310 174-175H508v-126h366v366H748v-151L485-231Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconCallMissedOutgoing" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
