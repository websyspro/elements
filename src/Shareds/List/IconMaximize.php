<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconMaximize
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-760v-28h536v28H212Z" ],
			200 => [ "0 -960 960 960", "M200-760v-40h560v40H200Z" ],
			300 => [ "0 -960 960 960", "M180-760v-60h600v60H180Z" ],
			400 => [ "0 -960 960 960", "M160-760v-80h640v80H160Z" ],
			500 => [ "0 -960 960 960", "M151.87-757.13v-91h656.26v91H151.87Z" ],
			600 => [ "0 -960 960 960", "M140.78-753.22v-106h678.44v106H140.78Z" ],
			700 => [ "0 -960 960 960", "M126-748v-126h708v126H126Z" ],
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
