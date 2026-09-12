<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSpaceBar
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-412v-188h28v160h480v-160h28v188H212Z" ],
			200 => [ "0 -960 960 960", "M200-400v-200h40v160h480v-160h40v200H200Z" ],
			300 => [ "0 -960 960 960", "M180-380v-220h60v160h480v-160h60v220H180Z" ],
			400 => [ "0 -960 960 960", "M160-360v-240h80v160h480v-160h80v240H160Z" ],
			500 => [ "0 -960 960 960", "M151.87-351.87V-600h91v157.13h474.26V-600h91v248.13H151.87Z" ],
			600 => [ "0 -960 960 960", "M140.78-340.78V-600h106v153.22h466.44V-600h106v259.22H140.78Z" ],
			700 => [ "0 -960 960 960", "M126-326v-274h126v148h456v-148h126v274H126Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSpaceBar" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
