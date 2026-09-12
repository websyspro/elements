<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconCallMissed
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M485-300 200-585v220h-28v-268h268v28H220l265 265 284-284 20 20-304 304Z" ],
			200 => [ "0 -960 960 960", "M483.85-291.46 200-575.31v211.46h-40v-280h280v40H228.31l255.54 255.54 288.61-288.61 28.31 28.54-316.92 316.92Z" ],
			300 => [ "0 -960 960 960", "M481.92-277.23 200-559.16v197.24h-60v-300h300v60H242.15l239.77 239.77 296.31-296.31 42.15 42.77-338.46 338.46Z" ],
			400 => [ "0 -960 960 960", "M480-263 200-543v183h-80v-320h320v80H256l224 224 304-304 56 57-360 360Z" ],
			500 => [ "0 -960 960 960", "M478.8-255.35 202.87-531.28v175.35h-91v-331h331v91H266.76L478.8-383.65l305.44-305.44 63.89 64.66L478.8-255.35Z" ],
			600 => [ "0 -960 960 960", "M477.17-244.91 206.78-515.3v164.91h-106v-346h346v106H281.44l195.73 196.3 307.4-307.39 74.65 75.09-382.05 381.48Z" ],
			700 => [ "0 -960 960 960", "M475-231 212-494v151H86v-366h366v126H301l174 175 310-310 89 89-399 398Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconCallMissed" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
