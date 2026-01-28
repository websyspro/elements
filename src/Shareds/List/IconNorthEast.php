<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconNorthEast
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m232-212-20-20 448-448H360v-28h348v348h-28v-300L232-212Z" ],
			200 => [ "0 -960 960 960", "M228.31-200 200-228.31 651.69-680H360v-40h360v360h-40v-291.69L228.31-200Z" ],
			300 => [ "0 -960 960 960", "M222.15-180 180-222.15 637.85-680H360v-60h380v380h-60v-277.85L222.15-180Z" ],
			400 => [ "0 -960 960 960", "m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z" ],
			500 => [ "0 -960 960 960", "M215.52-152.35 151.87-216l460.89-460.89H356.41v-91h411v411h-91v-256.35L215.52-152.35Z" ],
			600 => [ "0 -960 960 960", "M214.87-141.91 140.78-216l456.65-456.65H351.52v-106h426v426h-106v-245.91L214.87-141.91Z" ],
			700 => [ "0 -960 960 960", "m214-128-88-88 451-451H345v-126h446v446H665v-232L214-128Z" ],
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
