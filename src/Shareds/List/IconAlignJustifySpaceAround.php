<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignJustifySpaceAround
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M800-132v-696h28v696h-28Zm-668 0v-696h28v696h-28Zm494-174v-348h68v348h-68Zm-360 0v-348h68v348h-68Z" ],
			200 => [ "0 -960 960 960", "M800-120v-720h40v720h-40Zm-680 0v-720h40v720h-40Zm500-180v-360h80v360h-80Zm-360 0v-360h80v360h-80Z" ],
			300 => [ "0 -960 960 960", "M800-100v-760h60v760h-60Zm-700 0v-760h60v760h-60Zm510-190v-380h100v380H610Zm-360 0v-380h100v380H250Z" ],
			400 => [ "0 -960 960 960", "M800-80v-800h80v800h-80ZM80-80v-800h80v800H80Zm520-200v-400h120v400H600Zm-360 0v-400h120v400H240Z" ],
			500 => [ "0 -960 960 960", "M797.13-71.87v-816.26h91v816.26h-91Zm-725.26 0v-816.26h91v816.26h-91ZM594.5-274.5v-411h131v411h-131Zm-360 0v-411h131v411h-131Z" ],
			600 => [ "0 -960 960 960", "M793.22-60.78v-838.44h106v838.44h-106Zm-732.44 0v-838.44h106v838.44h-106ZM587-267v-426h146v426H587Zm-360 0v-426h146v426H227Z" ],
			700 => [ "0 -960 960 960", "M788-46v-868h126v868H788ZM46-46v-868h126v868H46Zm531-211v-446h166v446H577Zm-360 0v-446h166v446H217Z" ],
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
