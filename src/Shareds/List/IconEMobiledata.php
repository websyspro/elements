<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconEMobiledata
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M346-280v-400h268v28H374v158h240v28H374v158h240v28H346Z" ],
			200 => [ "0 -960 960 960", "M340-280v-400h280v40H380v140h240v40H380v140h240v40H340Z" ],
			300 => [ "0 -960 960 960", "M330-280v-400h300v60H390v110h240v60H390v110h240v60H330Z" ],
			400 => [ "0 -960 960 960", "M320-280v-400h320v80H400v80h240v80H400v80h240v80H320Z" ],
			500 => [ "0 -960 960 960", "M318.09-278.09v-403.82h323.82v83.82h-240v76.18h240v83.82h-240v76.18h240v83.82H318.09Z" ],
			600 => [ "0 -960 960 960", "M315.48-275.48v-409.04h329.04v89.04h-240v70.96h240v89.04h-240v70.96h240v89.04H315.48Z" ],
			700 => [ "0 -960 960 960", "M312-272v-416h336v96H408v64h240v96H408v64h240v96H312Z" ],
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
