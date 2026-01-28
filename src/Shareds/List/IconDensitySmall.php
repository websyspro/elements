<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconDensitySmall
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-132v-28h616v28H172Zm0-223v-28h616v28H172Zm0-222v-28h616v28H172Zm0-223v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-120v-40h640v40H160Zm0-226.92v-40h640v40H160Zm0-226.16v-40h640v40H160ZM160-800v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-100v-60h680v60H140Zm0-233.46v-60h680v60H140Zm0-233.08v-60h680v60H140ZM140-800v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-80v-80h720v80H120Zm0-240v-80h720v80H120Zm0-240v-80h720v80H120Zm0-240v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-71.87v-91h736.26v91H111.87Zm0-241.67v-91h736.26v91H111.87Zm0-241.92v-91h736.26v91H111.87Zm0-241.67v-91h736.26v91H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-60.78v-106h758.44v106H100.78Zm0-243.96v-106h758.44v106H100.78Zm0-244.52v-106h758.44v106H100.78Zm0-243.96v-106h758.44v106H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-46v-126h788v126H86Zm0-247v-126h788v126H86Zm0-248v-126h788v126H86Zm0-247v-126h788v126H86Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconDensitySmall" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
