<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAlignJustifyCenter
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-132v-696h28v696h-28Zm120-174v-348h68v348h-68Zm-280 0v-348h68v348h-68Z" ],
			200 => [ "0 -960 960 960", "M460-120v-720h40v720h-40Zm129.23-180v-360h80v360h-80Zm-298.46 0v-360h80v360h-80Z" ],
			300 => [ "0 -960 960 960", "M450-100v-760h60v760h-60Zm144.61-190v-380h100v380h-100Zm-329.22 0v-380h100v380h-100Z" ],
			400 => [ "0 -960 960 960", "M440-80v-800h80v800h-80Zm160-200v-400h120v400H600Zm-360 0v-400h120v400H240Z" ],
			500 => [ "0 -960 960 960", "M434.5-71.87v-816.26h91v816.26h-91ZM595.93-274.5v-411h131v411h-131Zm-362.86 0v-411h131v411h-131Z" ],
			600 => [ "0 -960 960 960", "M427-60.78v-838.44h106v838.44H427ZM590.39-267v-426h146v426h-146Zm-366.78 0v-426h146v426h-146Z" ],
			700 => [ "0 -960 960 960", "M417-46v-868h126v868H417Zm166-211v-446h166v446H583Zm-372 0v-446h166v446H211Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAlignJustifyCenter" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
