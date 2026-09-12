<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconMenu
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-278v-28h616v28H172Zm0-188v-28h616v28H172Zm0-188v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-269.23v-40h640v40H160ZM160-460v-40h640v40H160Zm0-190.77v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-254.62v-59.99h680v59.99H140ZM140-450v-60h680v60H140Zm0-195.39v-59.99h680v59.99H140Z" ],
			400 => [ "0 -960 960 960", "M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-228.28v-91h736.26v91H111.87Zm0-206.22v-91h736.26v91H111.87Zm0-206.22v-91h736.26v91H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-212.3v-106h758.44v106H100.78Zm0-214.7v-106h758.44v106H100.78Zm0-214.7v-106h758.44v106H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-191v-126h788v126H86Zm0-226v-126h788v126H86Zm0-226v-126h788v126H86Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconMenu" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
