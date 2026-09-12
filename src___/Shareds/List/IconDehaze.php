<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconDehaze
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-680v-28h616v28H172Zm0 428v-28h616v28H172Zm0-214v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-680v-40h640v40H160Zm0 440v-40h640v40H160Zm0-220v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-680v-60h680v60H140Zm0 460v-60h680v60H140Zm0-230v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-680v-80h720v80H120Zm0 480v-80h720v80H120Zm0-240v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-678.33v-91h736.26v91H111.87Zm0 487.66v-91h736.26v91H111.87Zm0-243.83v-91h736.26v91H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-676.04v-106h758.44v106H100.78Zm0 498.08v-106h758.44v106H100.78Zm0-249.04v-106h758.44v106H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-673v-126h788v126H86Zm0 512v-126h788v126H86Zm0-256v-126h788v126H86Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconDehaze" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
