<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignFlexCenter
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M476-132v-314H146v-68h330v-314h28v314h310v68H504v314h-28Z" ],
			200 => [ "0 -960 960 960", "M467.69-120v-320H140v-80h327.69v-320h40v320H820v80H507.69v320h-40Z" ],
			300 => [ "0 -960 960 960", "M453.85-100v-330H130v-100h323.85v-330h60v330H830v100H513.85v330h-60Z" ],
			400 => [ "0 -960 960 960", "M440-80v-340H120v-120h320v-340h80v340h320v120H520v340h-80Z" ],
			500 => [ "0 -960 960 960", "M436.89-71.87V-414.5H117.37v-131h319.52v-342.63h91v342.63h314.74v131H527.89v342.63h-91Z" ],
			600 => [ "0 -960 960 960", "M432.65-60.78V-407H113.78v-146h318.87v-346.22h106V-553h307.57v146H538.65v346.22h-106Z" ],
			700 => [ "0 -960 960 960", "M427-46v-351H109v-166h318v-351h126v351h298v166H553v351H427Z" ],
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
