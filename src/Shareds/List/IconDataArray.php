<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconDataArray
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M622-212v-28h98v-480h-98v-28h126v536H622Zm-410 0v-536h126v28h-98v480h98v28H212Z" ],
			200 => [ "0 -960 960 960", "M616.92-200v-40H720v-480H616.92v-40H760v560H616.92ZM200-200v-560h143.08v40H240v480h103.08v40H200Z" ],
			300 => [ "0 -960 960 960", "M608.46-180v-60H720v-480H608.46v-60H780v600H608.46ZM180-180v-600h171.54v60H240v480h111.54v60H180Z" ],
			400 => [ "0 -960 960 960", "M600-160v-80h120v-480H600v-80h200v640H600Zm-440 0v-640h200v80H240v480h120v80H160Z" ],
			500 => [ "0 -960 960 960", "M595.22-151.87v-90.76h122.15v-474.74H595.22v-90.76h212.91v656.26H595.22Zm-443.35 0v-656.26h212.91v90.76H242.63v474.74h122.15v90.76H151.87Z" ],
			600 => [ "0 -960 960 960", "M588.7-140.78v-105.44h125.08v-467.56H588.7v-105.44h230.52v678.44H588.7Zm-447.92 0v-678.44H371.3v105.44H246.22v467.56H371.3v105.44H140.78Z" ],
			700 => [ "0 -960 960 960", "M580-126v-125h129v-458H580v-125h254v708H580Zm-454 0v-708h254v125H251v458h129v125H126Z" ],
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
