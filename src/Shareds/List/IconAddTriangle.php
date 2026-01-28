<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAddTriangle
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m93-172 387-656 388 656H93Zm48-28h679L480-772 141-200Zm325-87h28v-77h79v-28h-79v-76h-28v76h-78v28h78v77Zm15-91Z" ],
			200 => [ "0 -960 960 960", "M80.77-160 480-840l400 680H80.77Zm69-40H811L480-760 149.77-200ZM460-276.15h40v-77.7h79.23v-40H500v-76.92h-40v76.92h-78.46v40H460v77.7Zm20.77-97.7Z" ],
			300 => [ "0 -960 960 960", "M60.39-140 480-860l420 720H60.39Zm103.99-60H796L480-740 164.38-200ZM450-258.08h60v-78.84h79.61v-60H510v-78.46h-60v78.46h-79.23v60H450v78.84Zm30.38-108.84Z" ],
			400 => [ "0 -960 960 960", "m40-120 440-760 440 760H40Zm139-80h602L480-720 179-200Zm261-40h80v-80h80v-80h-80v-80h-80v80h-80v80h80v80Zm40-120Z" ],
			500 => [ "0 -960 960 960", "M31.87-111.87 480-888.13l448.13 776.26H31.87Zm154.06-88.61H774.3L480-711.15 185.93-200.48Zm250-40h88.61v-75.22h74.98v-88.6h-74.98v-75.22h-88.61v75.22h-74.97v88.6h74.97v75.22ZM480.24-360Z" ],
			600 => [ "0 -960 960 960", "M20.78-100.78 480-899.22l459.22 798.44H20.78Zm174.61-100.35h569.78L480-699.09 195.39-201.13Zm235-40h100.35v-68.7h68.13v-100.34h-68.13v-68.7H430.39v68.7h-68.13v100.34h68.13v68.7ZM480.57-360Z" ],
			700 => [ "0 -960 960 960", "m6-86 474-828L954-86H6Zm202-116h545L480-683 208-202Zm215-40h116v-60h59v-116h-59v-60H423v60h-59v116h59v60Zm58-118Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAddTriangle" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
