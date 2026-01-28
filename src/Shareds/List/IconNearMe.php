<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconNearMe
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m528-206-92-232-232-94-2-16 556-212-214 554h-16Zm8-58 174-448-450 172 196 80 80 196Zm-80-196Z" ],
			200 => [ "0 -960 960 960", "m525.23-186.15-97.08-243.54-243.54-98.62-1.53-25.23 593.84-224.92-226.46 592.31h-25.23Zm12.15-78.77 171.24-445.23-446.77 169.69 196 79.54 79.53 196Zm-79.53-196Z" ],
			300 => [ "0 -960 960 960", "M520.62-153.08 415.08-415.85l-262.77-106.3-.77-40.62 656.92-246.46-247.23 656.15h-40.61Zm19.07-113.38 166.62-440.62-441.39 165.85 196 78.77 78.77 196Zm-78.77-196Z" ],
			400 => [ "0 -960 960 960", "M516-120 402-402 120-516v-56l720-268-268 720h-56Zm26-148 162-436-436 162 196 78 78 196Zm-78-196Z" ],
			500 => [ "0 -960 960 960", "M506.2-111.87 391.48-395.78 107.56-510.5v-67l744.88-279.48L573.2-111.87h-67Zm31.5-163.78 158.89-425.48L271.35-542l190.74 75.37 75.61 190.98Zm-75.61-190.98Z" ],
			600 => [ "0 -960 960 960", "M492.82-100.78 377.13-387.3 90.61-503v-82l778.78-295.13-294.56 779.35h-82.01Zm39.01-185.31 154.65-411.13L275.91-542l183.57 71.78 72.35 184.13Zm-72.35-184.13Z" ],
			700 => [ "0 -960 960 960", "M475-86 358-376 68-493v-102l824-316L577-86H475Zm49-214 149-392-391 150 174 67 68 175Zm-68-175Z" ],
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
