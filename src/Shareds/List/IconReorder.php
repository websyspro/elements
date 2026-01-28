<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconReorder
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-252v-28h616v28H172Zm0-143v-28h616v28H172Zm0-142v-28h616v28H172Zm0-143v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-240v-40h640v40H160Zm0-146.92v-40h640v40H160Zm0-146.16v-40h640v40H160ZM160-680v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-220v-60h680v60H140Zm0-153.46v-60h680v60H140Zm0-153.08v-60h680v60H140ZM140-680v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-200v-80h720v80H120Zm0-160v-80h720v80H120Zm0-160v-80h720v80H120Zm0-160v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-191.87v-88.61h736.26v88.61H111.87Zm0-162.63v-88.61h736.26v88.61H111.87Zm0-162.39v-88.61h736.26v88.61H111.87Zm0-162.63v-88.61h736.26v88.61H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-180.78v-100.35h758.44v100.35H100.78Zm0-166.22v-100.35h758.44V-347H100.78Zm0-165.65V-613h758.44v100.35H100.78Zm0-166.22v-100.35h758.44v100.35H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-166v-116h788v116H86Zm0-171v-116h788v116H86Zm0-170v-116h788v116H86Zm0-171v-116h788v116H86Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconReorder" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
