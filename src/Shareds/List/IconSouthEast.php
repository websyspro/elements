<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSouthEast
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M360-252v-28h300L212-728l20-20 448 448v-300h28v348H360Z" ],
			200 => [ "0 -960 960 960", "M360-240v-40h291.69L200-731.69 228.31-760 680-308.31V-600h40v360H360Z" ],
			300 => [ "0 -960 960 960", "M360-220v-60h277.85L180-737.85 222.15-780 680-322.15V-600h60v380H360Z" ],
			400 => [ "0 -960 960 960", "M360-200v-80h264L160-744l56-56 464 464v-264h80v400H360Z" ],
			500 => [ "0 -960 960 960", "M356.41-192.59v-91h256.35L151.87-744.48l63.65-63.65 460.89 460.89v-256.35h91v411h-411Z" ],
			600 => [ "0 -960 960 960", "M351.52-182.48v-106h245.91L140.78-745.13l74.09-74.09 456.65 456.65v-245.91h106v426h-426Z" ],
			700 => [ "0 -960 960 960", "M345-169v-126h232L126-746l88-88 451 451v-232h126v446H345Z" ],
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
