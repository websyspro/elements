<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSquare
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-616h616v616H172Zm28-28h560v-560H200v560Zm0 0v-560 560Z" ],
			200 => [ "0 -960 960 960", "M160-160v-640h640v640H160Zm40-40h560v-560H200v560Zm0 0v-560 560Z" ],
			300 => [ "0 -960 960 960", "M140-140v-680h680v680H140Zm60-60h560v-560H200v560Zm0 0v-560 560Z" ],
			400 => [ "0 -960 960 960", "M120-120v-720h720v720H120Zm80-80h560v-560H200v560Zm0 0v-560 560Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-736.26h736.26v736.26H111.87Zm91-91h554.26v-554.26H202.87v554.26Zm0 0v-554.26 554.26Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-758.44h758.44v758.44H100.78Zm106-106h546.44v-546.44H206.78v546.44Zm0 0v-546.44 546.44Z" ],
			700 => [ "0 -960 960 960", "M86-86v-788h788v788H86Zm126-126h536v-536H212v536Zm0 0v-536 536Z" ],
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
