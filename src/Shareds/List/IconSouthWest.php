<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSouthWest
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M226-226v-348h28v300l490-490 20 20-490 490h300v28H226Z" ],
			200 => [ "0 -960 960 960", "M220-220v-360h40v291.69l484-484L772.31-744l-484 484H580v40H220Z" ],
			300 => [ "0 -960 960 960", "M210-210v-380h60v277.85l474-474L786.15-744l-474 474H590v60H210Z" ],
			400 => [ "0 -960 960 960", "M200-200v-400h80v264l464-464 56 56-464 464h264v80H200Z" ],
			500 => [ "0 -960 960 960", "M194.5-194.5v-411h91v256.35L744-807.65 807.65-744l-458.5 458.5H605.5v91h-411Z" ],
			600 => [ "0 -960 960 960", "M187-187v-426h106v245.91l451-451L818.09-744l-451 451H613v106H187Z" ],
			700 => [ "0 -960 960 960", "M177-177v-446h126v232l441-441 88 88-441 441h232v126H177Z" ],
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
