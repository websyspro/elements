<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSwitchRight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M400-279 199-480l201-201v402Zm160 0v-402l201 201-201 201Zm28-67 134-134-134-134v268Z" ],
			200 => [ "0 -960 960 960", "M400-260.77 180.77-480 400-699.23v438.46Zm160 0v-438.46L779.23-480 560-260.77Zm35.38-85L729.62-480 595.38-614.23v268.46Z" ],
			300 => [ "0 -960 960 960", "M400-230.39 150.39-480 400-729.61v499.22Zm160 0v-499.22L809.61-480 560-230.39Zm47.69-114.99L742.31-480 607.69-614.62v269.24Z" ],
			400 => [ "0 -960 960 960", "M400-200 120-480l280-280v560Zm160 0v-560l280 280-280 280Zm60-145 135-135-135-135v270Z" ],
			500 => [ "0 -960 960 960", "M401.91-176.8 98.48-480l303.43-303.2v606.4Zm156.18 0v-606.4L861.52-480 558.09-176.8Zm74.82-180.4L755.48-480 632.91-602.8v245.6Z" ],
			600 => [ "0 -960 960 960", "M404.52-145.17 69.13-480l335.39-334.83v669.66Zm150.96 0v-669.66L890.87-480 555.48-145.17Zm95.04-228.66L756.13-480 650.52-586.17v212.34Z" ],
			700 => [ "0 -960 960 960", "M408-103 30-480l378-377v754Zm144 0v-754l378 377-378 377Zm122-293 83-84-83-84v168Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSwitchRight" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
