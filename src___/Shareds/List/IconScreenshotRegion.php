<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconScreenshotRegion
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M680-158v-94h-94v-28h94v-94h28v94h94v28h-94v94h-28Zm-428-94v-122h28v94h94v28H252Zm0-334v-122h122v28h-94v94h-28Zm428 0v-94h-94v-28h122v122h-28Z" ],
			200 => [ "0 -960 960 960", "M680-140v-100H580v-40h100v-100h40v100h100v40H720v100h-40ZM240-240v-140h40v100h100v40H240Zm0-340v-140h140v40H280v100h-40Zm440 0v-100H580v-40h140v140h-40Z" ],
			300 => [ "0 -960 960 960", "M680-110v-110H570v-60h110v-110h60v110h110v60H740v110h-60ZM220-220v-170h60v110h110v60H220Zm0-350v-170h170v60H280v110h-60Zm460 0v-110H570v-60h170v170h-60Z" ],
			400 => [ "0 -960 960 960", "M680-80v-120H560v-80h120v-120h80v120h120v80H760v120h-80ZM200-200v-200h80v120h120v80H200Zm0-360v-200h200v80H280v120h-80Zm480 0v-120H560v-80h200v200h-80Z" ],
			500 => [ "0 -960 960 960", "M676.89-72.11v-120h-120v-91h120v-120h91v120h120v91h-120v120h-91Zm-484.78-120v-211h91v120h120v91h-211Zm0-364.78v-211h211v91h-120v120h-91Zm484.78 0v-120h-120v-91h211v211h-91Z" ],
			600 => [ "0 -960 960 960", "M672.65-61.35v-120h-120v-106h120v-120h106v120h120v106h-120v120h-106Zm-491.3-120v-226h106v120h120v106h-226Zm0-371.3v-226h226v106h-120v120h-106Zm491.3 0v-120h-120v-106h226v226h-106Z" ],
			700 => [ "0 -960 960 960", "M667-47v-120H547v-126h120v-120h126v120h120v126H793v120H667ZM167-167v-246h126v120h120v126H167Zm0-380v-246h246v126H293v120H167Zm500 0v-120H547v-126h246v246H667Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconScreenshotRegion" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
