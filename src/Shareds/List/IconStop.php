<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconStop
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M320-640v320-320Zm-28 348v-376h376v376H292Zm28-28h320v-320H320v320Z" ],
			200 => [ "0 -960 960 960", "M320-640v320-320Zm-40 360v-400h400v400H280Zm40-40h320v-320H320v320Z" ],
			300 => [ "0 -960 960 960", "M320-640v320-320Zm-60 380v-440h440v440H260Zm60-60h320v-320H320v320Z" ],
			400 => [ "0 -960 960 960", "M320-640v320-320Zm-80 400v-480h480v480H240Zm80-80h320v-320H320v320Z" ],
			500 => [ "0 -960 960 960", "M322.87-637.13v314.26-314.26Zm-91 405.26v-496.26h496.26v496.26H231.87Zm91-91h314.26v-314.26H322.87v314.26Z" ],
			600 => [ "0 -960 960 960", "M326.78-633.22v306.44-306.44Zm-106 412.44v-518.44h518.44v518.44H220.78Zm106-106h306.44v-306.44H326.78v306.44Z" ],
			700 => [ "0 -960 960 960", "M332-628v296-296ZM206-206v-548h548v548H206Zm126-126h296v-296H332v296Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconStop" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
