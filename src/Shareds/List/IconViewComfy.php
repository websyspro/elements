<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconViewComfy
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-212v-536h696v536H132Zm668-282v-226H160v226h640ZM368-240h432v-226H368v226Zm-208 0h180v-226H160v226Z" ],
			200 => [ "0 -960 960 960", "M120-200v-560h720v560H120Zm680-300v-220H160v220h640ZM375.38-240H800v-220H375.38v220ZM160-240h175.38v-220H160v220Z" ],
			300 => [ "0 -960 960 960", "M100-180v-600h760v600H100Zm700-330v-210H160v210h640ZM387.69-240H800v-210H387.69v210ZM160-240h167.69v-210H160v210Z" ],
			400 => [ "0 -960 960 960", "M80-160v-640h800v640H80Zm720-360v-200H160v200h640ZM400-240h400v-200H400v200Zm-240 0h160v-200H160v200Z" ],
			500 => [ "0 -960 960 960", "M71.87-151.87v-656.26h816.26v656.26H71.87ZM797.13-520v-197.13H162.87V-520h634.26ZM400.72-242.87h396.41V-440H400.72v197.13Zm-237.85 0h157.85V-440H162.87v197.13Z" ],
			600 => [ "0 -960 960 960", "M60.78-140.78v-678.44h838.44v678.44H60.78ZM793.22-520v-193.22H166.78V-520h626.44ZM401.7-246.78h391.52V-440H401.7v193.22Zm-234.92 0H321.7V-440H166.78v193.22Z" ],
			700 => [ "0 -960 960 960", "M46-126v-708h868v708H46Zm742-394v-188H172v188h616ZM403-252h385v-188H403v188Zm-231 0h151v-188H172v188Z" ],
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
