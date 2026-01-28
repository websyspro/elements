<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowTopRight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M252-212v-402h442L540-768l20-20 188 188-188 188-20-20 154-154H280v374h-28Z" ],
			200 => [ "0 -960 960 960", "M240-200v-420h443.15L531.46-771.46 560-800l200 200-200.23 200.23-28.31-28.54L683.15-580H280v380h-40Z" ],
			300 => [ "0 -960 960 960", "M220-180v-450h445.08L517.23-777.23 560-820l220 220-220.62 220.61-42.15-42.76L665.08-570H280v390h-60Z" ],
			400 => [ "0 -960 960 960", "M200-160v-480h447L503-783l57-57 240 240-241 241-56-57 144-144H280v400h-80Z" ],
			500 => [ "0 -960 960 960", "M191.87-151.87V-645.5h442.22L495.35-783.48 560-848.13 808.13-600 559.24-351.11l-63.89-64.65L634.09-554.5H282.87v402.63h-91Z" ],
			600 => [ "0 -960 960 960", "M180.78-140.78V-653h435.7L484.91-784.13 560-859.22 819.22-600 559.57-340.35l-74.66-75.08L616.48-547h-329.7v406.22h-106Z" ],
			700 => [ "0 -960 960 960", "M166-126v-537h427L471-785l89-89 274 274-274 274-89-89 122-122H292v411H166Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowTopRight" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
