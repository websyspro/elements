<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconTransitEnterexit
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M278-272v-336h56v240l308-308 40 40-308 308h240v56H278Z" ],
			200 => [ "0 -960 960 960", "M269.23-264.62v-350.76H340v228.46l299.69-299.7 51.08 51.08-300.15 300.16H620v70.76H269.23Z" ],
			300 => [ "0 -960 960 960", "M254.62-252.31v-375.38H350v209.23l285.85-285.85 69.53 69.54-287.07 287.08H630v95.38H254.62Z" ],
			400 => [ "0 -960 960 960", "M240-240v-400h120v190l272-272 88 88-274 274h194v120H240Z" ],
			500 => [ "0 -960 960 960", "M232.83-234.5v-412.43h131v184.49l267.93-267.93 95.41 95.17-269.69 269.7h187.78v131H232.83Z" ],
			600 => [ "0 -960 960 960", "M223.04-227v-429.39h146v177l262.39-262.39 105.53 104.95L473.13-373h179.31v146h-429.4Z" ],
			700 => [ "0 -960 960 960", "M210-217v-452h166v167l255-255 119 118-256 256h168v166H210Z" ],
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
