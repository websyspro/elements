<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconDragHandle
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-386v-28h536v28H212Zm0-160v-28h536v28H212Z" ],
			200 => [ "0 -960 960 960", "M200-380v-40h560v40H200Zm0-160v-40h560v40H200Z" ],
			300 => [ "0 -960 960 960", "M180-370v-60h600v60H180Zm0-160v-60h600v60H180Z" ],
			400 => [ "0 -960 960 960", "M160-360v-80h640v80H160Zm0-160v-80h640v80H160Z" ],
			500 => [ "0 -960 960 960", "M151.87-349v-91h656.26v91H151.87Zm0-171v-91h656.26v91H151.87Z" ],
			600 => [ "0 -960 960 960", "M140.78-334v-106h678.44v106H140.78Zm0-186v-106h678.44v106H140.78Z" ],
			700 => [ "0 -960 960 960", "M126-314v-126h708v126H126Zm0-206v-126h708v126H126Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconDragHandle" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
