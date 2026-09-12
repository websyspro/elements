<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconCloseFullscreen
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m151-132-19-19 301-301H212v-28h268v268h-28v-221L151-132Zm329-348v-268h28v221l301-301 19 19-301 301h221v28H480Z" ],
			200 => [ "0 -960 960 960", "M147.54-120 120-147.54 412.46-440H200v-40h280v280h-40v-212.46L147.54-120ZM480-480v-280h40v212.46L812.46-840 840-812.46 547.54-520H760v40H480Z" ],
			300 => [ "0 -960 960 960", "M141.77-100 100-141.77 378.23-420H180v-60h300v300h-60v-198.23L141.77-100ZM480-480v-300h60v198.23L818.23-860 860-818.23 581.77-540H780v60H480Z" ],
			400 => [ "0 -960 960 960", "m136-80-56-56 264-264H160v-80h320v320h-80v-184L136-80Zm344-400v-320h80v184l264-264 56 56-264 264h184v80H480Z" ],
			500 => [ "0 -960 960 960", "m135.52-71.87-63.65-63.65L325.35-389H151.87v-91H480v328.13h-91v-173.48L135.52-71.87ZM480-480v-328.13h91v173.48l253.48-253.48 63.65 63.65L634.65-571h173.48v91H480Z" ],
			600 => [ "0 -960 960 960", "m134.87-60.78-74.09-74.09L299.91-374H140.78v-106H480v339.22H374v-159.13L134.87-60.78ZM480-480v-339.22h106v159.13l239.13-239.13 74.09 74.09L660.09-586h159.13v106H480Z" ],
			700 => [ "0 -960 960 960", "m134-46-88-88 220-220H126v-126h354v354H354v-140L134-46Zm346-434v-354h126v140l220-220 88 88-220 220h140v126H480Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconCloseFullscreen" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
