<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconVariables
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-332v-296h616v296H172Zm28-28h560v-240H200v240Zm0 0v-240 240Z" ],
			200 => [ "0 -960 960 960", "M160-320v-320h640v320H160Zm40-40h560v-240H200v240Zm0 0v-240 240Z" ],
			300 => [ "0 -960 960 960", "M140-300v-360h680v360H140Zm60-60h560v-240H200v240Zm0 0v-240 240Z" ],
			400 => [ "0 -960 960 960", "M120-280v-400h720v400H120Zm80-80h560v-240H200v240Zm0 0v-240 240Z" ],
			500 => [ "0 -960 960 960", "M111.87-271.87v-416.26h736.26v416.26H111.87Zm91-91h554.26v-234.26H202.87v234.26Zm0 0v-234.26 234.26Z" ],
			600 => [ "0 -960 960 960", "M100.78-260.78v-438.44h758.44v438.44H100.78Zm106-106h546.44v-226.44H206.78v226.44Zm0 0v-226.44 226.44Z" ],
			700 => [ "0 -960 960 960", "M86-246v-468h788v468H86Zm126-126h536v-216H212v216Zm0 0v-216 216Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconVariables" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
