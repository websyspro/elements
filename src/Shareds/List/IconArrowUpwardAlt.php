<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowUpwardAlt
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-276v-404L296-510l-20-20 204-204 204 204-20 20-170-170v404h-28Z" ],
			200 => [ "0 -960 960 960", "M460-267.69v-395.69l-164 164-28.31-28.31L480-740l212.31 212.31L664-499.38l-164-164v395.69h-40Z" ],
			300 => [ "0 -960 960 960", "M450-253.85v-381.84l-154 154-42.15-42.16L480-750l226.15 226.15L664-481.69l-154-154v381.84h-60Z" ],
			400 => [ "0 -960 960 960", "M440-240v-368L296-464l-56-56 240-240 240 240-56 56-144-144v368h-80Z" ],
			500 => [ "0 -960 960 960", "M434.5-232.35V-592.7L296-454.2l-63.65-63.65L480-765.5l247.65 247.65L664-454.2 525.5-592.7v360.35h-91Z" ],
			600 => [ "0 -960 960 960", "M427-221.91v-349.91l-131 131-74.09-74.09L480-773l258.09 258.09L664-440.82l-131-131v349.91H427Z" ],
			700 => [ "0 -960 960 960", "M417-208v-336L296-423l-88-88 272-272 272 272-88 88-121-121v336H417Z" ],
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
