<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconExposurePlus1
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M266-312v-120H146v-28h120v-120h28v120h120v28H294v120h-28Zm394 58v-414l-104 72-16-22 126-88h22v452h-28Z" ],
			200 => [ "0 -960 960 960", "M260-304.62v-120H140v-40h120v-120h40v120h120v40H300v120h-40Zm393.08 63.08v-419.54l-101.23 70.62-22.93-33.08 134.77-94.92h31.69v476.92h-42.3Z" ],
			300 => [ "0 -960 960 960", "M250-292.31v-120H130v-60h120v-120h60v120h120v60H310v120h-60Zm391.54 71.54v-428.77l-96.62 68.31-34.46-51.54 149.39-106.46h47.84v518.46h-66.15Z" ],
			400 => [ "0 -960 960 960", "M240-280v-120H120v-80h120v-120h80v120h120v80H320v120h-80Zm390 80v-438l-92 66-46-70 164-118h64v560h-90Z" ],
			500 => [ "0 -960 960 960", "M236.41-276.41v-120h-120v-87.18h120v-120h87.18v120h120v87.18h-120v120h-87.18ZM630-192.59v-447.32l-92 66-49.59-75.5 164-118h76.68v574.82H630Z" ],
			600 => [ "0 -960 960 960", "M231.52-271.52v-120h-120v-96.96h120v-120h96.96v120h120v96.96h-120v120h-96.96ZM630-182.48v-460.04l-92 66-54.48-83 164-118h93.96v595.04H630Z" ],
			700 => [ "0 -960 960 960", "M225-265v-120H105v-110h120v-120h110v120h120v110H335v120H225Zm405 96v-477l-92 66-61-93 164-118h117v622H630Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconExposurePlus1" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
