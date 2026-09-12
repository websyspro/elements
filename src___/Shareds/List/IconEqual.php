<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconEqual
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-332v-68h536v68H212Zm0-228v-68h536v68H212Z" ],
			200 => [ "0 -960 960 960", "M200-320v-80h560v80H200Zm0-240v-80h560v80H200Z" ],
			300 => [ "0 -960 960 960", "M180-300v-100h600v100H180Zm0-260v-100h600v100H180Z" ],
			400 => [ "0 -960 960 960", "M160-280v-120h640v120H160Zm0-280v-120h640v120H160Z" ],
			500 => [ "0 -960 960 960", "M151.87-274.5v-131h656.26v131H151.87Zm0-280v-131h656.26v131H151.87Z" ],
			600 => [ "0 -960 960 960", "M140.78-267v-146h678.44v146H140.78Zm0-280v-146h678.44v146H140.78Z" ],
			700 => [ "0 -960 960 960", "M126-257v-166h708v166H126Zm0-280v-166h708v166H126Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconEqual" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
