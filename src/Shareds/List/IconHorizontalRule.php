<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconHorizontalRule
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-466v-28h536v28H212Z" ],
			200 => [ "0 -960 960 960", "M200-460v-40h560v40H200Z" ],
			300 => [ "0 -960 960 960", "M180-450v-60h600v60H180Z" ],
			400 => [ "0 -960 960 960", "M160-440v-80h640v80H160Z" ],
			500 => [ "0 -960 960 960", "M151.87-434.5v-91h656.26v91H151.87Z" ],
			600 => [ "0 -960 960 960", "M140.78-427v-106h678.44v106H140.78Z" ],
			700 => [ "0 -960 960 960", "M126-417v-126h708v126H126Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconHorizontalRule" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
