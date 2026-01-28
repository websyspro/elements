<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSignalCellular3Bar
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m132-132 696-696v696H132Zm431-28h237v-600L563-523v363Z" ],
			200 => [ "0 -960 960 960", "m120-120 720-720v720H120Zm451.54-40H800v-582.92L571.54-514.46V-160Z" ],
			300 => [ "0 -960 960 960", "m100-100 760-760v760H100Zm485.77-60H800v-554.46L585.77-500.23V-160Z" ],
			400 => [ "0 -960 960 960", "m80-80 800-800v800H80Zm520-80h200v-526L600-486v326Z" ],
			500 => [ "0 -960 960 960", "m71.87-71.87 816.26-816.26v816.26H71.87Zm524.3-91h200.96v-504.96L596.17-466.87v304Z" ],
			600 => [ "0 -960 960 960", "m60.78-60.78 838.44-838.44v838.44H60.78Zm530.18-106h202.26v-476.26L590.96-440.78v274Z" ],
			700 => [ "0 -960 960 960", "m46-46 868-868v868H46Zm538-126h204v-438L584-406v234Z" ],
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
