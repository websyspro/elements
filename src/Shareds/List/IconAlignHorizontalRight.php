<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignHorizontalRight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M760-132v-696h28v696h-28ZM412-316v-70h238v70H412ZM172-574v-70h478v70H172Z" ],
			200 => [ "0 -960 960 960", "M769.23-120v-720h40v720h-40ZM390.77-307.69v-81.54h275.38v81.54H390.77Zm-240-263.08v-81.54h515.38v81.54H150.77Z" ],
			300 => [ "0 -960 960 960", "M784.61-100v-760h60v760h-60ZM355.39-293.85v-100.76h337.68v100.76H355.39Zm-240-271.54v-100.76h577.68v100.76H115.39Z" ],
			400 => [ "0 -960 960 960", "M800-80v-800h80v800h-80ZM320-280v-120h400v120H320ZM80-560v-120h640v120H80Z" ],
			500 => [ "0 -960 960 960", "M797.13-71.87v-816.26h91v816.26h-91ZM311.87-272.59v-131h405.26v131H311.87Zm-240-283.82v-131h645.26v131H71.87Z" ],
			600 => [ "0 -960 960 960", "M793.22-60.78v-838.44h106v838.44h-106Zm-492.44-201.7v-146h412.44v146H300.78Zm-240-289.04v-146h652.44v146H60.78Z" ],
			700 => [ "0 -960 960 960", "M788-46v-868h126v868H788ZM286-249v-166h422v166H286ZM46-545v-166h662v166H46Z" ],
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
