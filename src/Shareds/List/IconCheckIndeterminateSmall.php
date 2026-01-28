<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconCheckIndeterminateSmall
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M292-466v-28h376v28H292Z" ],
			200 => [ "0 -960 960 960", "M280-460v-40h400v40H280Z" ],
			300 => [ "0 -960 960 960", "M260-450v-60h440v60H260Z" ],
			400 => [ "0 -960 960 960", "M240-440v-80h480v80H240Z" ],
			500 => [ "0 -960 960 960", "M231.87-434.5v-91h496.26v91H231.87Z" ],
			600 => [ "0 -960 960 960", "M220.78-427v-106h518.44v106H220.78Z" ],
			700 => [ "0 -960 960 960", "M206-417v-126h548v126H206Z" ],
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
