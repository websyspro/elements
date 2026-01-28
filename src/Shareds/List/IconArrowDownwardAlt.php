<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowDownwardAlt
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-276 276-480l20-20 170 170v-404h28v404l170-170 20 20-204 204Z" ],
			200 => [ "0 -960 960 960", "M480-267.69 267.69-480 296-508.31l164 164V-740h40v395.69l164-164L692.31-480 480-267.69Z" ],
			300 => [ "0 -960 960 960", "M480-253.85 253.85-480 296-522.15l154 154V-750h60v381.85l154-154L706.15-480 480-253.85Z" ],
			400 => [ "0 -960 960 960", "M480-240 240-480l56-56 144 144v-368h80v368l144-144 56 56-240 240Z" ],
			500 => [ "0 -960 960 960", "M480-232.35 232.35-480 296-543.65l138.5 138.5V-765.5h91v360.35L664-543.65 727.65-480 480-232.35Z" ],
			600 => [ "0 -960 960 960", "M480-221.91 221.91-480 296-554.09l131 131V-773h106v349.91l131-131L738.09-480 480-221.91Z" ],
			700 => [ "0 -960 960 960", "M480-208 208-480l88-88 121 121v-336h126v336l121-121 88 88-272 272Z" ],
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
