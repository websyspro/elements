<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconHorizontalDistribute
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-132v-696h40v696h-40Zm314-174v-348h68v348h-68Zm342 174v-696h40v696h-40Z" ],
			200 => [ "0 -960 960 960", "M120-120v-720h49.23v720H120Zm320-180v-360h80v360h-80Zm350.77 180v-720H840v720h-49.23Z" ],
			300 => [ "0 -960 960 960", "M100-100v-760h64.62v760H100Zm330-190v-380h100v380H430Zm365.38 190v-760H860v760h-64.62Z" ],
			400 => [ "0 -960 960 960", "M80-80v-800h80v800H80Zm340-200v-400h120v400H420ZM800-80v-800h80v800h-80Z" ],
			500 => [ "0 -960 960 960", "M71.87-71.87v-816.26h91v816.26h-91ZM414.5-274.5v-411h131v411h-131ZM797.13-71.87v-816.26h91v816.26h-91Z" ],
			600 => [ "0 -960 960 960", "M60.78-60.78v-838.44h106v838.44h-106ZM407-267v-426h146v426H407ZM793.22-60.78v-838.44h106v838.44h-106Z" ],
			700 => [ "0 -960 960 960", "M46-46v-868h126v868H46Zm351-211v-446h166v446H397ZM788-46v-868h126v868H788Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconHorizontalDistribute" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
