<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconStorage
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M158-182v-116h644v116H158Zm56-28h60v-60h-60v60Zm-56-452v-116h644v116H158Zm56-28h60v-60h-60v60Zm-56 268v-116h644v116H158Zm56-28h60v-60h-60v60Z" ],
			200 => [ "0 -960 960 960", "M149.23-176.92v-126.16h661.54v126.16H149.23Zm61.54-30.77h64.61v-64.62h-64.61v64.62Zm-61.54-449.23v-126.16h661.54v126.16H149.23Zm61.54-30.77h64.61v-64.62h-64.61v64.62Zm-61.54 270.77v-126.16h661.54v126.16H149.23Zm61.54-30.77h64.61v-64.62h-64.61v64.62Z" ],
			300 => [ "0 -960 960 960", "M134.62-168.46v-143.08h690.76v143.08H134.62Zm70.77-35.39h72.3v-72.3h-72.3v72.3Zm-70.77-444.61v-143.08h690.76v143.08H134.62Zm70.77-35.39h72.3v-72.3h-72.3v72.3Zm-70.77 275.39v-143.08h690.76v143.08H134.62Zm70.77-35.39h72.3v-72.3h-72.3v72.3Z" ],
			400 => [ "0 -960 960 960", "M120-160v-160h720v160H120Zm80-40h80v-80h-80v80Zm-80-440v-160h720v160H120Zm80-40h80v-80h-80v80Zm-80 280v-160h720v160H120Zm80-40h80v-80h-80v80Z" ],
			500 => [ "0 -960 960 960", "M109-141.59v-174.82h742v174.82H109Zm91-45.5h83.59v-83.82H200v83.82Zm-91-456.5v-174.82h742v174.82H109Zm91-45.5h83.59v-83.82H200v83.82Zm-91 296.5v-174.82h742v174.82H109Zm91-45.5h83.59v-83.82H200v83.82Z" ],
			600 => [ "0 -960 960 960", "M94-116.48v-195.04h772v195.04H94Zm106-53h88.48v-89.04H200v89.04Zm-106-479v-195.04h772v195.04H94Zm106-53h88.48v-89.04H200v89.04Zm-106 319v-195.04h772v195.04H94Zm106-53h88.48v-89.04H200v89.04Z" ],
			700 => [ "0 -960 960 960", "M74-83v-222h812v222H74Zm126-63h95v-96h-95v96ZM74-655v-222h812v222H74Zm126-63h95v-96h-95v96ZM74-369v-222h812v222H74Zm126-63h95v-96h-95v96Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconStorage" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
