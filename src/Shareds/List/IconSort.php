<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSort
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-292v-28h175v28H172Zm0-174v-28h395v28H172Zm0-174v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-280v-40h190v40H160Zm0-180v-40h414.62v40H160Zm0-180v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-260v-60h215v60H140Zm0-190v-60h447.31v60H140Zm0-190v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-240v-80h240v80H120Zm0-200v-80h480v80H120Zm0-200v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-223.74v-90.76h252.2v90.76h-252.2Zm0-210.76v-90.76h494.11v90.76H111.87Zm0-210.76v-90.76h736.26v90.76H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-201.56V-307h268.83v105.44H100.78Zm0-225.44v-105.44h513.35V-427H100.78Zm0-225.44v-105.43h758.44v105.43H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-172v-125h291v125H86Zm0-245v-125h539v125H86Zm0-245v-125h788v125H86Z" ],
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
