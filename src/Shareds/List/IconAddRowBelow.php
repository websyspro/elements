<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAddRowBelow
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M200-531h560v-269H200v269Zm-28 319v-616h616v616H674v-28h86v-263H200v263h86v28H172Zm308-291Zm0-28v28-28Zm0 0Zm-14 399v-80h-80v-28h80v-80h28v80h80v28h-80v80h-28Z" ],
			200 => [ "0 -960 960 960", "M200-537.69h560V-800H200v262.31ZM160-200v-640h640v640H675.38v-40H760v-257.69H200V-240h84.62v40H160Zm320-297.69Zm0-40v40-40Zm0 0ZM460-120v-80h-80v-40h80v-80h40v80h80v40h-80v80h-40Z" ],
			300 => [ "0 -960 960 960", "M200-548.85h560V-800H200v251.15ZM140-180v-680h680v680H677.69v-60H760v-248.85H200V-240h82.31v60H140Zm340-308.85Zm0-60v60-60Zm0 0ZM450-100v-80h-80v-60h80v-80h60v80h80v60h-80v80h-60Z" ],
			400 => [ "0 -960 960 960", "M200-560h560v-240H200v240Zm-80 400v-720h720v720H680v-80h80v-240H200v240h80v80H120Zm360-320Zm0-80v80-80Zm0 0ZM440-80v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M202.63-565.74h554.74v-231.63H202.63v231.63Zm-90.76 413.87v-736.26h736.26v736.26H680.72v-90.76h76.65v-232.35H202.63v232.35h76.89v90.76H111.87ZM480-474.98Zm0-90.76v90.76-90.76Zm0 0ZM434.74-71.87v-80h-80v-90.76h80v-80h90.76v80h80v90.76h-80v80h-90.76Z" ],
			600 => [ "0 -960 960 960", "M206.22-573.57h547.56v-220.21H206.22v220.21ZM100.78-140.78v-758.44h758.44v758.44H681.7v-105.44h72.08v-221.91H206.22v221.91h72.65v105.44H100.78ZM480-468.13Zm0-105.44v105.44-105.44Zm0 0ZM427.56-60.78v-80h-80v-105.44h80v-80H533v80h80v105.44h-80v80H427.56Z" ],
			700 => [ "0 -960 960 960", "M211-584h538v-205H211v205ZM86-126v-788h788v788H683v-125h66v-208H211v208h67v125H86Zm394-333Zm0-125v125-125Zm0 0ZM418-46v-80h-80v-125h80v-80h125v80h80v125h-80v80H418Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAddRowBelow" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
