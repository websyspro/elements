<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconMinimize
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M266-172v-28h428v28H266Z" ],
			200 => [ "0 -960 960 960", "M260-160v-40h440v40H260Z" ],
			300 => [ "0 -960 960 960", "M250-140v-60h460v60H250Z" ],
			400 => [ "0 -960 960 960", "M240-120v-80h480v80H240Z" ],
			500 => [ "0 -960 960 960", "M234.5-111.87v-91h491v91h-491Z" ],
			600 => [ "0 -960 960 960", "M227-100.78v-106h506v106H227Z" ],
			700 => [ "0 -960 960 960", "M217-86v-126h526v126H217Z" ],
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
