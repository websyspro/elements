<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSubdirectoryArrowLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M400-172 212-360l188-188 20 20-154 154h414v-374h28v402H266l154 154-20 20Z" ],
			200 => [ "0 -960 960 960", "M400-160 200-360l200.23-200.23 28.31 28.54L276.85-380H680v-380h40v420H276.85l151.69 151.46L400-160Z" ],
			300 => [ "0 -960 960 960", "M400-140 180-360l220.62-220.61 42.15 42.76L294.92-390H680v-390h60v450H294.92l147.85 147.23L400-140Z" ],
			400 => [ "0 -960 960 960", "M400-120 160-360l241-241 56 57-144 144h367v-400h80v480H313l144 143-57 57Z" ],
			500 => [ "0 -960 960 960", "M400-111.87 151.87-360l248.89-248.89 63.89 64.65L325.91-405.5h351.22v-402.63h91v493.63H325.91l138.74 137.98L400-111.87Z" ],
			600 => [ "0 -960 960 960", "M400-100.78 140.78-360l259.65-259.65 74.66 75.08L343.52-413h329.7v-406.22h106V-307h-435.7l131.57 131.13L400-100.78Z" ],
			700 => [ "0 -960 960 960", "M400-86 126-360l274-274 89 89-122 122h301v-411h126v537H367l122 122-89 89Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSubdirectoryArrowLeft" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
