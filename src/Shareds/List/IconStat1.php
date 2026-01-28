<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconStat1
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m296-380-20-20 204-204 204 204-20 20-184-184-184 184Z" ],
			200 => [ "0 -960 960 960", "m296-371.92-28.31-28.31L480-612.54l212.31 212.31L664-371.92 480-555.69 296-371.92Z" ],
			300 => [ "0 -960 960 960", "m296-358.46-42.15-42.16L480-626.77l226.15 226.15L664-358.46 480-541.85 296-358.46Z" ],
			400 => [ "0 -960 960 960", "m296-345-56-56 240-240 240 240-56 56-184-183-184 183Z" ],
			500 => [ "0 -960 960 960", "m296-337.59-63.65-63.65L480-648.89l247.65 247.65L664-337.59l-184-183-184 183Z" ],
			600 => [ "0 -960 960 960", "m296-327.48-74.09-74.09L480-659.65l258.09 258.08L664-327.48l-184-183-184 183Z" ],
			700 => [ "0 -960 960 960", "m296-314-88-88 272-272 272 272-88 88-184-183-184 183Z" ],
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
