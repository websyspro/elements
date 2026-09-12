<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconGridGoldenratio
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M412-132v-280H132v-28h280v-80H132v-28h280v-280h28v280h80v-280h28v280h280v28H548v80h280v28H548v280h-28v-280h-80v280h-28Zm28-308h80v-80h-80v80Z" ],
			200 => [ "0 -960 960 960", "M400-120v-280H120v-40h280v-80H120v-40h280v-280h40v280h80v-280h40v280h280v40H560v80h280v40H560v280h-40v-280h-80v280h-40Zm40-320h80v-80h-80v80Z" ],
			300 => [ "0 -960 960 960", "M380-100v-280H100v-60h280v-80H100v-60h280v-280h60v280h80v-280h60v280h280v60H580v80h280v60H580v280h-60v-280h-80v280h-60Zm60-340h80v-80h-80v80Z" ],
			400 => [ "0 -960 960 960", "M360-80v-280H80v-80h280v-80H80v-80h280v-280h80v280h80v-280h80v280h280v80H600v80h280v80H600v280h-80v-280h-80v280h-80Zm80-360h80v-80h-80v80Z" ],
			500 => [ "0 -960 960 960", "M349-72.59v-272.82H76.41V-440H349v-80H76.41v-91H349v-272.59h91V-611h80v-272.59h91V-611h272.59v91H611v80h272.59v94.59H611v272.82h-91v-272.82h-80v272.82h-91ZM440-440h80v-80h-80v80Z" ],
			600 => [ "0 -960 960 960", "M334-62.48v-263.04H71.52V-440H334v-80H71.52v-106H334v-262.48h106V-626h80v-262.48h106V-626h262.48v106H626v80h262.48v114.48H626v263.04H520v-263.04h-80v263.04H334ZM440-440h80v-80h-80v80Z" ],
			700 => [ "0 -960 960 960", "M314-49v-250H65v-141h249v-80H65v-126h249v-249h126v249h80v-249h126v249h249v126H646v80h249v141H646v250H520v-250h-80v250H314Zm126-391h80v-80h-80v80Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconGridGoldenratio" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
