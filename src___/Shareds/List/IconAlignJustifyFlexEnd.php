<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAlignJustifyFlexEnd
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M800-132v-696h28v696h-28ZM586-306v-348h68v348h-68Zm-240 0v-348h68v348h-68Z" ],
			200 => [ "0 -960 960 960", "M800-120v-720h40v720h-40ZM580-300v-360h80v360h-80Zm-240 0v-360h80v360h-80Z" ],
			300 => [ "0 -960 960 960", "M800-100v-760h60v760h-60ZM570-290v-380h100v380H570Zm-240 0v-380h100v380H330Z" ],
			400 => [ "0 -960 960 960", "M800-80v-800h80v800h-80ZM560-280v-400h120v400H560Zm-240 0v-400h120v400H320Z" ],
			500 => [ "0 -960 960 960", "M797.13-71.87v-816.26h91v816.26h-91ZM554.5-274.5v-411h131v411h-131Zm-240 0v-411h131v411h-131Z" ],
			600 => [ "0 -960 960 960", "M793.22-60.78v-838.44h106v838.44h-106ZM547-267v-426h146v426H547Zm-240 0v-426h146v426H307Z" ],
			700 => [ "0 -960 960 960", "M788-46v-868h126v868H788ZM537-257v-446h166v446H537Zm-240 0v-446h166v446H297Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAlignJustifyFlexEnd" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
