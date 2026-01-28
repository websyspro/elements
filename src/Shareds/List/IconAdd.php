<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAdd
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-466H252v-28h214v-214h28v214h214v28H494v214h-28v-214Z" ],
			200 => [ "0 -960 960 960", "M460-460H240v-40h220v-220h40v220h220v40H500v220h-40v-220Z" ],
			300 => [ "0 -960 960 960", "M450-450H220v-60h230v-230h60v230h230v60H510v230h-60v-230Z" ],
			400 => [ "0 -960 960 960", "M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z" ],
			500 => [ "0 -960 960 960", "M434.5-434.5H191.87v-91H434.5v-242.63h91v242.63h242.63v91H525.5v242.63h-91V-434.5Z" ],
			600 => [ "0 -960 960 960", "M427-427H180.78v-106H427v-246.22h106V-533h246.22v106H533v246.22H427V-427Z" ],
			700 => [ "0 -960 960 960", "M417-417H166v-126h251v-251h126v251h251v126H543v251H417v-251Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAdd" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
