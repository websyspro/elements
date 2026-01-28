<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconRoofing
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M380-212v-200h200v200H380Zm28-28h144v-144H408v144ZM109-480l-17-22 388-286 178 131v-91h62v136l149 110-17 22-372-273-371 273Zm371 168Z" ],
			200 => [ "0 -960 960 960", "M375.38-200v-209.23h209.24V-200H375.38Zm40-40h129.24v-129.23H415.38V-240ZM104.15-470.77 80-502.46 480-800l173.85 128.92V-760h75.38v144.77l151.54 112.77-24.15 31.69-376.62-279-375.85 279ZM480-304.62Z" ],
			300 => [ "0 -960 960 960", "M367.69-180v-224.62h224.62V-180H367.69Zm60-60h104.62v-104.62H427.69V-240ZM96.08-455.39 60-503.23 480-820l166.92 125.46V-780h97.69v159.39l155.77 117.38-36.07 47.84-384.31-289-383.92 289ZM480-292.31Z" ],
			400 => [ "0 -960 960 960", "M360-160v-240h240v240H360Zm80-80h80v-80h-80v80ZM88-440l-48-64 440-336 160 122v-82h120v174l160 122-48 64-392-299L88-440Zm392 160Z" ],
			500 => [ "0 -960 960 960", "M349-151.87v-262h262v262H349Zm91-91h80v-80h-80v80Zm-353.67-189-54.46-72.37L480-848.13l154.98 118.65v-78.65h130.76v179.5l162.39 124.39-54.7 72.37L480-733.5 86.33-431.87Zm393.67 149Z" ],
			600 => [ "0 -960 960 960", "M334-140.78v-292h292v292H334Zm106-106h80v-80h-80v80Zm-355.96-174-63.26-83.79L480-859.22l148.13 114.09v-74.09h145.44v187l165.65 127.65-63.83 83.79L480-726 84.04-420.78Zm395.96 134Z" ],
			700 => [ "0 -960 960 960", "M314-126v-332h332v332H314Zm126-126h80v-80h-80v80ZM81-406 6-505l474-369 139 108v-68h165v197l170 132-76 99-398-310L81-406Zm399 114Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconRoofing" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
