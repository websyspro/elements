<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFunctions
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M292-212v-18l239-250-239-250v-18h376v29H344l228 239-228 240h324v28H292Z" ],
			200 => [ "0 -960 960 960", "M280-200v-32.31L523.85-480 280-727.69V-760h400v50H364.08l225 230-225 230.77H680V-200H280Z" ],
			300 => [ "0 -960 960 960", "M260-180v-56.15L511.92-480 260-723.85V-780h440v85H397.54l220 215-220 215.39H700V-180H260Z" ],
			400 => [ "0 -960 960 960", "M240-160v-80l260-240-260-240v-80h480v120H431l215 200-215 200h289v120H240Z" ],
			500 => [ "0 -960 960 960", "M231.87-151.87v-90.52L490.2-480 231.87-717.37v-90.76h496.26v134.59H448.7L655.33-480 448.7-286.46h279.43v134.59H231.87Z" ],
			600 => [ "0 -960 960 960", "M220.78-140.78v-104.87L476.82-480 220.78-713.78v-105.44h518.44v154.48H472.83L668.04-480 472.83-295.26h266.39v154.48H220.78Z" ],
			700 => [ "0 -960 960 960", "M206-126v-124l253-230-253-229v-125h548v181H505l180 173-180 173h249v181H206Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFunctions" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
