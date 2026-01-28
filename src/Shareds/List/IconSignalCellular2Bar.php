<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSignalCellular2Bar
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m132-132 696-696v696H132Zm351-28h317v-600L483-443v283Z" ],
			200 => [ "0 -960 960 960", "m120-120 720-720v720H120Zm371.54-40H800v-582.92L491.54-434.46V-160Z" ],
			300 => [ "0 -960 960 960", "m100-100 760-760v760H100Zm405.77-60H800v-554.46L505.77-420.23V-160Z" ],
			400 => [ "0 -960 960 960", "m80-80 800-800v800H80Zm440-80h280v-526L520-406v246Z" ],
			500 => [ "0 -960 960 960", "m71.87-71.87 816.26-816.26v816.26H71.87Zm444.3-91h280.96v-504.96L516.17-386.87v224Z" ],
			600 => [ "0 -960 960 960", "m60.78-60.78 838.44-838.44v838.44H60.78Zm450.18-106h282.26v-476.26L510.96-360.78v194Z" ],
			700 => [ "0 -960 960 960", "m46-46 868-868v868H46Zm458-126h284v-438L504-326v154Z" ],
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
