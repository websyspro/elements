<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconKeyboardTabRtl
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M160-266h-28v-428h28v428Zm303-11L260-480l203-203 19 19-168 170h514v28H313l170 170-20 19Z" ],
			200 => [ "0 -960 960 960", "M160-260h-40v-440h40v440Zm306.92-8.46L255.38-480l211.54-211.54L494.46-664 332.23-500H840v40H331.46l164 164-28.54 27.54Z" ],
			300 => [ "0 -960 960 960", "M160-250h-60v-460h60v460Zm313.46-4.23L247.69-480l225.77-225.77L515.23-664 362.61-510H860v60H362.23l154 154-42.77 41.77Z" ],
			400 => [ "0 -960 960 960", "M160-240H80v-480h80v480Zm320 0L240-480l240-240 56 56-143 144h487v80H393l144 144-57 56Z" ],
			500 => [ "0 -960 960 960", "M162.87-234.5h-91v-491h91v491Zm327.65 2.15L242.87-480l247.65-247.65L554.17-664l-137.5 138.5h471.46v91H416.67L555.41-296l-64.89 63.65Z" ],
			600 => [ "0 -960 960 960", "M166.78-227h-106v-506h106v506Zm338.09 5.09L246.78-480l258.09-258.09L578.96-664l-130 131h450.26v106H448.96l131.56 131-75.65 74.09Z" ],
			700 => [ "0 -960 960 960", "M172-217H46v-526h126v526Zm352 9L252-480l272-272 88 88-120 121h422v126H492l122 121-90 88Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconKeyboardTabRtl" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
