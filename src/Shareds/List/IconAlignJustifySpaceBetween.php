<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignJustifySpaceBetween
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M800-132v-174h-68v-348h68v-174h28v696h-28Zm-668 0v-696h28v174h68v348h-68v174h-28Z" ],
			200 => [ "0 -960 960 960", "M800-120v-180h-80v-360h80v-180h40v720h-40Zm-680 0v-720h40v180h80v360h-80v180h-40Z" ],
			300 => [ "0 -960 960 960", "M800-100v-190H700v-380h100v-190h60v760h-60Zm-700 0v-760h60v190h100v380H160v190h-60Z" ],
			400 => [ "0 -960 960 960", "M800-80v-200H680v-400h120v-200h80v800h-80ZM80-80v-800h80v200h120v400H160v200H80Z" ],
			500 => [ "0 -960 960 960", "M797.13-71.87V-274.5h-131v-411h131v-202.63h91v816.26h-91Zm-725.26 0v-816.26h91v202.63h131v411h-131v202.63h-91Z" ],
			600 => [ "0 -960 960 960", "M793.22-60.78V-267h-146v-426h146v-206.22h106v838.44h-106Zm-732.44 0v-838.44h106V-693h146v426h-146v206.22h-106Z" ],
			700 => [ "0 -960 960 960", "M788-46v-211H622v-446h166v-211h126v868H788ZM46-46v-868h126v211h166v446H172v211H46Z" ],
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
