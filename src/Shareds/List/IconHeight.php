<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconHeight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M479-172 356-295l19-19 90 88v-509l-89 89-19-19 123-123 123 123-20 20-90-89v508l90-88 19 19-123 123Z" ],
			200 => [ "0 -960 960 960", "M479.23-160 347.69-291.54l27.54-27.54 84 82.23v-487.07l-83.23 83-27.54-27.54L480-800l131.54 131.54-28.31 28.54-84-83.23v486.3l84-82.23 27.54 27.54L479.23-160Z" ],
			300 => [ "0 -960 960 960", "M479.62-140 333.85-285.77l41.77-41.77 74 72.62v-450.54l-73.62 73-41.77-41.77L480-820l145.77 145.77-42.15 42.77-74.01-73.62v450.16l74.01-72.62 41.76 41.77L479.62-140Z" ],
			400 => [ "0 -960 960 960", "M480-120 320-280l56-56 64 63v-414l-64 63-56-56 160-160 160 160-56 57-64-64v414l64-63 56 56-160 160Z" ],
			500 => [ "0 -960 960 960", "M480-111.87 307.56-284.3l63.66-63.9 63.28 62.29v-388.42l-63.28 62.77-63.89-63.9L480-848.13l172.67 172.67-63.89 64.42-63.28-63.05v388.18l63.52-62.29 63.65 63.66L480-111.87Z" ],
			600 => [ "0 -960 960 960", "M480-100.78 290.61-290.17l74.09-74.66 62.3 61.31v-353.52l-62.3 62.43-74.66-74.65L480-859.22l189.96 189.96-74.66 74.52-62.3-61.74v352.96l62.87-61.31 74.09 74.09L480-100.78Z" ],
			700 => [ "0 -960 960 960", "M480-86 268-298l88-89 61 60v-307l-61 62-89-89 213-213 213 213-89 88-61-60v306l62-60 88 88L480-86Z" ],
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
