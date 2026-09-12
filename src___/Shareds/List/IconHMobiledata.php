<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconHMobiledata
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M306-280v-400h28v186h292v-186h28v400h-28v-186H334v186h-28Z" ],
			200 => [ "0 -960 960 960", "M300-280v-400h40v180h280v-180h40v400h-40v-180H340v180h-40Z" ],
			300 => [ "0 -960 960 960", "M290-280v-400h60v170h260v-170h60v400h-60v-170H350v170h-60Z" ],
			400 => [ "0 -960 960 960", "M280-280v-400h80v160h240v-160h80v400h-80v-160H360v160h-80Z" ],
			500 => [ "0 -960 960 960", "M278.09-278.09v-403.82h83.82v160h236.18v-160h83.82v403.82h-83.82v-160H361.91v160h-83.82Z" ],
			600 => [ "0 -960 960 960", "M275.48-275.48v-409.04h89.04v160h230.96v-160h89.04v409.04h-89.04v-160H364.52v160h-89.04Z" ],
			700 => [ "0 -960 960 960", "M272-272v-416h96v160h224v-160h96v416h-96v-160H368v160h-96Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconHMobiledata" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
