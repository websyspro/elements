<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAlignJustifyFlexStart
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-132v-696h28v696h-28Zm414-174v-348h68v348h-68Zm-240 0v-348h68v348h-68Z" ],
			200 => [ "0 -960 960 960", "M120-120v-720h40v720h-40Zm420-180v-360h80v360h-80Zm-240 0v-360h80v360h-80Z" ],
			300 => [ "0 -960 960 960", "M100-100v-760h60v760h-60Zm430-190v-380h100v380H530Zm-240 0v-380h100v380H290Z" ],
			400 => [ "0 -960 960 960", "M80-80v-800h80v800H80Zm440-200v-400h120v400H520Zm-240 0v-400h120v400H280Z" ],
			500 => [ "0 -960 960 960", "M71.87-71.87v-816.26h91v816.26h-91ZM514.5-274.5v-411h131v411h-131Zm-240 0v-411h131v411h-131Z" ],
			600 => [ "0 -960 960 960", "M60.78-60.78v-838.44h106v838.44h-106ZM507-267v-426h146v426H507Zm-240 0v-426h146v426H267Z" ],
			700 => [ "0 -960 960 960", "M46-46v-868h126v868H46Zm451-211v-446h166v446H497Zm-240 0v-446h166v446H257Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAlignJustifyFlexStart" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
