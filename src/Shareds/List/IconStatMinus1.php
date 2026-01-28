<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconStatMinus1
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-380 276-584l20-20 184 184 184-184 20 20-204 204Z" ],
			200 => [ "0 -960 960 960", "M480-371.92 267.69-584.23 296-612.54l184 183.77 184-183.77 28.31 28.31L480-371.92Z" ],
			300 => [ "0 -960 960 960", "M480-358.46 253.85-584.62 296-626.77l184 183.39 184-183.39 42.15 42.15L480-358.46Z" ],
			400 => [ "0 -960 960 960", "M480-345 240-585l56-56 184 183 184-183 56 56-240 240Z" ],
			500 => [ "0 -960 960 960", "M480-337.59 232.35-585.24 296-648.89l184 183.24 184-183.24 63.65 63.65L480-337.59Z" ],
			600 => [ "0 -960 960 960", "M480-327.48 221.91-585.57 296-659.65l184 183.56 184-183.56 74.09 74.08L480-327.48Z" ],
			700 => [ "0 -960 960 960", "M480-314 208-586l88-88 184 184 184-184 88 88-272 272Z" ],
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
