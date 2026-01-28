<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowRight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M426-342v-276l138 138-138 138Z" ],
			200 => [ "0 -960 960 960", "M420-327.69v-304.62L572.31-480 420-327.69Z" ],
			300 => [ "0 -960 960 960", "M410-303.85v-352.3L586.15-480 410-303.85Z" ],
			400 => [ "0 -960 960 960", "M400-280v-400l200 200-200 200Z" ],
			500 => [ "0 -960 960 960", "M394.5-266.85v-426.3L607.65-480 394.5-266.85Z" ],
			600 => [ "0 -960 960 960", "M387-248.91v-462.18L618.09-480 387-248.91Z" ],
			700 => [ "0 -960 960 960", "M377-225v-510l255 255-255 255Z" ],
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
