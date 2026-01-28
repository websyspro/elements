<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconGraphicEq
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M319-286v-388h28v388h-28Zm147 154v-696h28v696h-28ZM172-436v-88h28v88h-28Zm441 150v-388h28v388h-28Zm147-150v-88h28v88h-28Z" ],
			200 => [ "0 -960 960 960", "M310-275.38v-409.24h40v409.24h-40ZM460-120v-720h40v720h-40ZM160-427.69v-104.62h40v104.62h-40Zm450 152.31v-409.24h40v409.24h-40Zm150-152.31v-104.62h40v104.62h-40Z" ],
			300 => [ "0 -960 960 960", "M295-257.69v-444.62h60v444.62h-60ZM450-100v-760h60v760h-60ZM140-413.85v-132.3h60v132.3h-60Zm465 156.16v-444.62h60v444.62h-60Zm155-156.16v-132.3h60v132.3h-60Z" ],
			400 => [ "0 -960 960 960", "M280-240v-480h80v480h-80ZM440-80v-800h80v800h-80ZM120-400v-160h80v160h-80Zm480 160v-480h80v480h-80Zm160-160v-160h80v160h-80Z" ],
			500 => [ "0 -960 960 960", "M274.02-234.02v-491.96h87.41v491.96h-87.41ZM436.41-71.87v-816.26h87.18v816.26h-87.18ZM111.87-396.41v-167.18h87.41v167.18h-87.41Zm486.46 162.39v-491.96h87.41v491.96h-87.41Zm162.39-162.39v-167.18h87.41v167.18h-87.41Z" ],
			600 => [ "0 -960 960 960", "M265.87-225.87v-508.26h97.52v508.26h-97.52ZM431.52-60.78v-838.44h96.96v838.44h-96.96ZM100.78-391.52v-176.96h97.52v176.96h-97.52Zm495.26 165.65v-508.26h97.53v508.26h-97.53ZM761.7-391.52v-176.96h97.52v176.96H761.7Z" ],
			700 => [ "0 -960 960 960", "M255-215v-530h111v530H255ZM425-46v-868h110v868H425ZM86-385v-190h111v190H86Zm507 170v-530h111v530H593Zm170-170v-190h111v190H763Z" ],
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
