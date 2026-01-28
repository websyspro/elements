<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowBack2
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M588-294 296-480l292-186v372Zm-28-186Zm0 134v-268L348-480l212 134Z" ],
			200 => [ "0 -960 960 960", "M600-272.31 273.85-480 600-687.69v415.38ZM560-480Zm0 134v-268L348.46-480 560-346Z" ],
			300 => [ "0 -960 960 960", "M620-236.16 236.93-480 620-723.84v487.68ZM560-480Zm0 134v-268L349.23-480 560-346Z" ],
			400 => [ "0 -960 960 960", "M640-200 200-480l440-280v560Zm-80-280Zm0 134v-268L350-480l210 134Z" ],
			500 => [ "0 -960 960 960", "M648.13-185.41 184.93-480l463.2-294.59v589.18Zm-91-294.59Zm0 128.5v-257L355.5-480l201.63 128.5Z" ],
			600 => [ "0 -960 960 960", "M659.22-165.52 164.39-480l494.83-314.48v628.96ZM553.22-480Zm0 121v-242L363-480l190.22 121Z" ],
			700 => [ "0 -960 960 960", "M674-139 137-480l537-341v682ZM548-480Zm0 111v-222L373-480l175 111Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowBack2" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
