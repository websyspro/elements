<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconGite
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-252v-285l144-152h56v-59h28v59h324l144 152v285H132Zm456-28h212v-245L695-637 588-523v243Zm-428 0h400v-211H160v211Z" ],
			200 => [ "0 -960 960 960", "M120-240v-302.31l147.69-153.84H320V-760h40v63.85h332.31L840-542.31V-240H120Zm480-40h200v-245.46l-99.23-104.62L600-523.92V-280Zm-440 0h400v-208.46H160V-280Z" ],
			300 => [ "0 -960 960 960", "M100-220v-331.15l153.85-156.93H300V-780h60v71.92h346.15L860-551.15V-220H100Zm520-60h180v-246.23l-89.62-92.31L620-525.46V-280Zm-460 0h400v-204.23H160V-280Z" ],
			400 => [ "0 -960 960 960", "M80-200v-360l160-160h40v-80h80v80h360l160 160v360H80Zm560-80h160v-247l-80-80-80 80v247Zm-480 0h400v-200H160v200Z" ],
			500 => [ "0 -960 960 960", "M71.87-191.87v-370.28L235.93-726.7h38.57v-81.43h88.61v81.43H724.3l164.07 164.57v370.26H71.87Zm572.2-88.61h155.69v-245.09l-77.85-78.08-77.84 78.08v245.09Zm-483.59 0h394.98v-196.17H160.48v196.17Z" ],
			600 => [ "0 -960 960 960", "M60.78-180.78v-384.31l169.61-170.74H267v-83.39h100.35v83.39h362.82l169.61 170.79v384.26h-839Zm588.83-100.35h149.82v-242.48l-74.91-75.48-74.91 75.48v242.48Zm-488.48 0h388.13v-190.96H161.13v190.96Z" ],
			700 => [ "0 -960 960 960", "M46-166v-403l177-179h34v-86h116v86h365l177 179.08V-166H46Zm611-116h142v-239l-71-72-71 72v239Zm-495 0h379v-184H162v184Z" ],
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
