<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSubdirectoryArrowRight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m560-172-20-20 154-154H252v-402h28v374h414L540-528l20-20 188 188-188 188Z" ],
			200 => [ "0 -960 960 960", "m560-160-28.54-28.54L683.15-340H240v-420h40v380h403.15L531.46-531.69l28.31-28.54L760-360 560-160Z" ],
			300 => [ "0 -960 960 960", "m560-140-42.77-42.77L665.08-330H220v-450h60v390h385.08L517.23-537.85l42.15-42.76L780-360 560-140Z" ],
			400 => [ "0 -960 960 960", "m560-120-57-57 144-143H200v-480h80v400h367L503-544l56-57 241 241-240 240Z" ],
			500 => [ "0 -960 960 960", "m560-111.87-64.65-64.65L634.09-314.5H191.87v-493.63h91v402.63h351.22L495.35-544.24l63.89-64.65L808.13-360 560-111.87Z" ],
			600 => [ "0 -960 960 960", "m560-100.78-75.09-75.09L616.48-307h-435.7v-512.22h106V-413h329.7L484.91-544.57l74.66-75.08L819.22-360 560-100.78Z" ],
			700 => [ "0 -960 960 960", "m560-86-89-89 122-122H166v-537h126v411h301L471-545l89-89 274 274L560-86Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSubdirectoryArrowRight" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
