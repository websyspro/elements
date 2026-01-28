<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class Icon1xMobiledata
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M266-306v-320h-80v-28h108v348h-28Zm194 0 110-186-98-162h34l82 134 80-134h32l-96 162 110 186h-34l-94-158-94 158h-32Z" ],
			200 => [ "0 -960 960 960", "M260-300v-320h-80v-40h120v360h-40Zm189.38 0 113.7-192-101.7-168h47.85l78.31 128.46L664.77-660h45.85l-99.7 168 113.7 192h-47.85L586-452.46 495.23-300h-45.85Z" ],
			300 => [ "0 -960 960 960", "M250-290v-320h-80v-60h140v380h-60Zm181.69 0 119.85-202-107.85-178h70.92l72.16 119.23L659.39-670h68.92L622.46-492l119.85 202h-70.92L586-433.23 500.61-290h-68.92Z" ],
			400 => [ "0 -960 960 960", "M240-280v-320h-80v-80h160v400h-80Zm174 0 126-212-114-188h94l66 110 68-110h92L634-492l126 212h-94l-80-134-80 134h-92Z" ],
			500 => [ "0 -960 960 960", "M235.7-280v-312.59h-76.42V-680h163.59v400H235.7Zm172.32 0 128.63-212-116.63-188h102.85l63.85 106.65L652.57-680h100.84L638.78-492l128.63 212H664.57l-77.85-130.65L508.87-280H408.02Z" ],
			600 => [ "0 -960 960 960", "M229.83-280v-302.48H158.3V-680h168.48v400h-96.95Zm170.04 0 132.22-212-120.22-188h114.91l60.92 102.09L650.61-680h112.91L645.3-492l132.22 212H662.61L587.7-406.09 512.78-280H399.87Z" ],
			700 => [ "0 -960 960 960", "M222-280v-289h-65v-111h175v400H222Zm167 0 137-212-125-188h131l57 96 59-96h129L654-492l137 212H660l-71-120-71 120H389Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon Icon1xMobiledata" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
