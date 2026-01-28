<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSend
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-238v-484l574 242-574 242Zm28-42 474-200-474-200v160l180 40-180 40v160Zm0 0v-400 400Z" ],
			200 => [ "0 -960 960 960", "M160-220v-520l616.92 260L160-220Zm40-60 474-200-474-200v155.38L393.85-480 200-435.38V-280Zm0 0v-400 400Z" ],
			300 => [ "0 -960 960 960", "M140-190v-580l688.46 290L140-190Zm60-90 474-200-474-200v147.69L416.92-480 200-427.69V-280Zm0 0v-400 400Z" ],
			400 => [ "0 -960 960 960", "M120-160v-640l760 320-760 320Zm80-120 474-200-474-200v140l240 60-240 60v140Zm0 0v-400 400Z" ],
			500 => [ "0 -960 960 960", "M112.59-152.35v-655.3L889.57-480 112.59-152.35ZM200-283.59 665.15-480 200-676.41v132.82L443.59-480 200-416.41v132.82Zm0 0v-392.82 392.82Z" ],
			600 => [ "0 -960 960 960", "M102.48-141.91v-676.18L902.61-480 102.48-141.91ZM200-288.48 653.09-480 200-671.52v123.04L448.48-480 200-411.52v123.04Zm0 0v-383.04 383.04Z" ],
			700 => [ "0 -960 960 960", "M89-128v-704l831 352L89-128Zm111-167 437-185-437-185v110l255 75-255 75v110Zm0 0v-370 370Z" ],
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
