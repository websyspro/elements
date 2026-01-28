<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowMenuClose
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M420-351v-257L299-480l121 129Zm100 179h28v-616h-28v616Z" ],
			200 => [ "0 -960 960 960", "M424.62-334.62v-290L285.38-480l139.24 145.38ZM520-160h40v-640h-40v640Z" ],
			300 => [ "0 -960 960 960", "M432.31-307.31v-345L262.69-480l169.62 172.69ZM520-140h60v-680h-60v680Z" ],
			400 => [ "0 -960 960 960", "M440-280v-400L240-480l200 200Zm80 160h80v-720h-80v720Z" ],
			500 => [ "0 -960 960 960", "M441.67-266.13v-427.74L227.56-480l214.11 213.87Zm80 154.26h90.77v-736.26h-90.77v736.26Z" ],
			600 => [ "0 -960 960 960", "M443.96-247.22v-465.56L210.61-480l233.35 232.78Zm80 146.44h105.43v-758.44H523.96v758.44Z" ],
			700 => [ "0 -960 960 960", "M447-222v-516L188-480l259 258Zm80 136h125v-788H527v788Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowMenuClose" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
