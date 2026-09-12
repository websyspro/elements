<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFilterList
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M429-292v-28h101v28H429ZM282-466v-28h395v28H282ZM172-640v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M422.31-280v-40h114.61v40H422.31Zm-150-180v-40h414.61v40H272.31ZM160-640v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M411.15-260v-60h137.31v60H411.15ZM256.16-450v-60h447.3v60h-447.3ZM140-640v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M400-240v-80h160v80H400ZM240-440v-80h480v80H240ZM120-640v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M394.26-223.98v-90.76h171.48v90.76H394.26ZM232.83-434.74v-90.76h494.1v90.76h-494.1ZM111.87-645.5v-90.76h736.26v90.76H111.87Z" ],
			600 => [ "0 -960 960 960", "M386.43-202.13v-105.43h187.14v105.43H386.43ZM223.04-427.56V-533h513.35v105.44H223.04ZM100.78-653v-105.44h758.44V-653H100.78Z" ],
			700 => [ "0 -960 960 960", "M376-173v-125h208v125H376ZM210-418v-125h539v125H210ZM86-663v-125h788v125H86Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFilterList" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
