<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconLtePlusMobiledata
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M79-346v-268h28v240h120v28H79Zm250 0v-240h-80v-28h188v28h-80v240h-28Zm182 0v-268h148v28H539v92h120v28H539v92h120v28H511Zm302-40v-80h-80v-28h80v-80h28v80h80v28h-80v80h-28Z" ],
			200 => [ "0 -960 960 960", "M70-340v-280h40v240h120v40H70Zm247.69 0v-240h-80v-40h200v40h-80v240h-40Zm186.16 0v-280h160v40h-120v80h120v40h-120v80h120v40h-160ZM810-380v-80h-80v-40h80v-80h40v80h80v40h-80v80h-40Z" ],
			300 => [ "0 -960 960 960", "M55-330v-300h60v240h120v60H55Zm243.85 0v-240h-80v-60h220v60h-80v240h-60Zm193.07 0v-300h180v60h-120v60h120v60h-120v60h120v60h-180ZM805-370v-80h-80v-60h80v-80h60v80h80v60h-80v80h-60Z" ],
			400 => [ "0 -960 960 960", "M40-320v-320h80v240h120v80H40Zm240 0v-240h-80v-80h240v80h-80v240h-80Zm200 0v-320h200v80H560v40h120v80H560v40h120v80H480Zm320-40v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M36.41-316.41v-327.18H120V-400h120v83.59H36.41Zm240 0V-560h-80v-83.59H440V-560h-80v243.59h-83.59Zm200 0v-327.18H680V-560H560v38.09h120v83.82H560V-400h120v83.59H476.41ZM800-358.09v-80h-80v-83.82h80v-80h83.59v80h80v83.82h-80v80H800Z" ],
			600 => [ "0 -960 960 960", "M31.52-311.52v-336.96H120V-400h120v88.48H31.52Zm240 0V-560h-80v-88.48H440V-560h-80v248.48h-88.48Zm200 0v-336.96H680V-560H560v35.48h120v89.04H560V-400h120v88.48H471.52ZM800-355.48v-80h-80v-89.04h80v-80h88.48v80h80v89.04h-80v80H800Z" ],
			700 => [ "0 -960 960 960", "M25-305v-350h95v255h120v95H25Zm240 0v-255h-80v-95h255v95h-80v255h-95Zm200 0v-350h215v95H560v32h120v96H560v32h120v95H465Zm335-47v-80h-80v-96h80v-80h95v80h80v96h-80v80h-95Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconLtePlusMobiledata" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
