<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconKeyboardKeys
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M292-292v-56h376v56H292ZM132-452v-56h56v56h-56Zm160 0v-56h56v56h-56Zm160 0v-56h56v56h-56Zm160 0v-56h56v56h-56Zm160 0v-56h56v56h-56ZM132-612v-56h56v56h-56Zm160 0v-56h56v56h-56Zm160 0v-56h56v56h-56Zm160 0v-56h56v56h-56Zm160 0v-56h56v56h-56Z" ],
			200 => [ "0 -960 960 960", "M289.23-289.23v-61.54h381.54v61.54H289.23Zm-160-160v-61.54h61.54v61.54h-61.54Zm160 0v-61.54h61.54v61.54h-61.54Zm160 0v-61.54h61.54v61.54h-61.54Zm160 0v-61.54h61.54v61.54h-61.54Zm160 0v-61.54h61.54v61.54h-61.54Zm-640-160v-61.54h61.54v61.54h-61.54Zm160 0v-61.54h61.54v61.54h-61.54Zm160 0v-61.54h61.54v61.54h-61.54Zm160 0v-61.54h61.54v61.54h-61.54Zm160 0v-61.54h61.54v61.54h-61.54Z" ],
			300 => [ "0 -960 960 960", "M284.62-284.62v-70.76h390.76v70.76H284.62Zm-160-160v-70.76h70.76v70.76h-70.76Zm160 0v-70.76h70.76v70.76h-70.76Zm160 0v-70.76h70.76v70.76h-70.76Zm160 0v-70.76h70.76v70.76h-70.76Zm160 0v-70.76h70.76v70.76h-70.76Zm-640-160v-70.76h70.76v70.76h-70.76Zm160 0v-70.76h70.76v70.76h-70.76Zm160 0v-70.76h70.76v70.76h-70.76Zm160 0v-70.76h70.76v70.76h-70.76Zm160 0v-70.76h70.76v70.76h-70.76Z" ],
			400 => [ "0 -960 960 960", "M280-280v-80h400v80H280ZM120-440v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80ZM120-600v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M280-280v-80h400v80H280ZM120-440v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80ZM120-600v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Z" ],
			600 => [ "0 -960 960 960", "M280-280v-80h400v80H280ZM120-440v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80ZM120-600v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Z" ],
			700 => [ "0 -960 960 960", "M280-280v-80h400v80H280ZM120-440v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80ZM120-600v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconKeyboardKeys" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
