<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconHPlusMobiledata
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M192-280v-400h28v186h292v-186h28v400h-28v-186H220v186h-28Zm548-106v-80h-80v-28h80v-80h28v80h80v28h-80v80h-28Z" ],
			200 => [ "0 -960 960 960", "M184.62-280v-400h40v180h280v-180h40v400h-40v-180h-280v180h-40Zm550.76-100v-80h-80v-40h80v-80h40v80h80v40h-80v80h-40Z" ],
			300 => [ "0 -960 960 960", "M172.31-280v-400h60v170h260v-170h60v400h-60v-170h-260v170h-60Zm555.38-90v-80h-80v-60h80v-80h60v80h80v60h-80v80h-60Z" ],
			400 => [ "0 -960 960 960", "M160-280v-400h80v160h240v-160h80v400h-80v-160H240v160h-80Zm560-80v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M156.41-278.09v-403.82H240v160h232.59v-160h83.82v403.82h-83.82v-160H240v160h-83.59ZM720-354.5v-83.71h-83.59v-83.7H720v-83.59h83.59v83.71h83.82v83.7h-83.7v83.59H720Z" ],
			600 => [ "0 -960 960 960", "M151.52-275.48v-409.04H240v160h222.48v-160h89.04v409.04h-89.04v-160H240v160h-88.48ZM720-347v-88.76h-88.48v-88.76H720V-613h88.48v88.76h89.04v88.76h-88.76V-347H720Z" ],
			700 => [ "0 -960 960 960", "M145-272v-416h95v160h209v-160h96v416h-96v-160H240v160h-95Zm575-65v-95.5h-95V-528h95v-95h95v95.5h96v95.5h-95.5v95H720Z" ],
		};
	}

	public static function create(
		int $size,
		int $weight = 300,
		string $fill = "#000"
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->add( Path::create(
				$path
			))
			->props(
				[
					"xmlns" => "http://www.w3.org/2000/svg",
					"viewBox" => "{$viewBox}",
					"height" => "{$size}",
					"width" => "{$size}",
					"fill" => "{$fill}"
				]
			);
	}
}
