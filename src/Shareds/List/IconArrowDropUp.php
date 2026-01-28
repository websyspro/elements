<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowDropUp
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m342-426 138-138 138 138H342Z" ],
			200 => [ "0 -960 960 960", "M327.69-420 480-572.31 632.31-420H327.69Z" ],
			300 => [ "0 -960 960 960", "M303.85-410 480-586.15 656.15-410h-352.3Z" ],
			400 => [ "0 -960 960 960", "m280-400 200-200 200 200H280Z" ],
			500 => [ "0 -960 960 960", "M266.85-394.5 480-607.65 693.15-394.5h-426.3Z" ],
			600 => [ "0 -960 960 960", "M248.91-387 480-618.09 711.09-387H248.91Z" ],
			700 => [ "0 -960 960 960", "m225-377 255-255 255 255H225Z" ],
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
