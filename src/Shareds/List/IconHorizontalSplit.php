<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconHorizontalSplit
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-252v-240h616v240H172Zm0-320v-28h616v28H172Zm0-108v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-240v-240h640v240H160Zm0-320v-40h640v40H160Zm0-120v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-220v-240h680v240H140Zm0-320v-60h680v60H140Zm0-140v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-200v-240h720v240H120Zm0-320v-80h720v80H120Zm0-160v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-192.59v-240h736.26v240H111.87Zm0-316.41v-91h736.26v91H111.87Zm0-167.41v-91h736.26v91H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-182.48v-240h758.44v240H100.78Zm0-311.52v-106h758.44v106H100.78Zm0-177.52v-106h758.44v106H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-169v-240h788v240H86Zm0-305v-126h788v126H86Zm0-191v-126h788v126H86Z" ],
		};
	}

	public static function create(
		int $size,
		int $weight = 300,
		string $fill = "#000"
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->add( Path::create(
				$path
			))
			->props(
				[
					"xmlns" => "http://www.w3.org/2000/svg",
					"viewBox" => "{$viewBox}",
					"height" => "{$size}",
					"width" => "{$size}",
					"fill" => "{$fill}"
				]
			);
	}
}
