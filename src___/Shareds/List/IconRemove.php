<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconRemove
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M252-466v-28h456v28H252Z" ],
			200 => [ "0 -960 960 960", "M240-460v-40h480v40H240Z" ],
			300 => [ "0 -960 960 960", "M220-450v-60h520v60H220Z" ],
			400 => [ "0 -960 960 960", "M200-440v-80h560v80H200Z" ],
			500 => [ "0 -960 960 960", "M191.87-434.5v-91h576.26v91H191.87Z" ],
			600 => [ "0 -960 960 960", "M180.78-427v-106h598.44v106H180.78Z" ],
			700 => [ "0 -960 960 960", "M166-417v-126h628v126H166Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconRemove" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
