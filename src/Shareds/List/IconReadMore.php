<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconReadMore
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m298-299-19-19 146-148H132v-28h293L279-642l19-19 181 181-181 181Zm218-19v-28h312v28H516Zm0-296v-28h312v28H516Zm120 148v-28h192v28H636Z" ],
			200 => [ "0 -960 960 960", "M298-290.46 270.46-318l140.23-142H120v-40h290.69L270.46-642 298-669.54 487.54-480 298-290.46Zm218.92-18.77v-40H840v40H516.92Zm0-301.54v-40H840v40H516.92Zm120 150.77v-40H840v40H636.92Z" ],
			300 => [ "0 -960 960 960", "M298-276.23 256.23-318l130.62-132H100v-60h286.85L256.23-642 298-683.77 501.77-480 298-276.23Zm220.46-18.39v-59.99H860v59.99H518.46Zm0-310.77v-59.99H860v59.99H518.46Zm120 155.39v-60H860v60H638.46Z" ],
			400 => [ "0 -960 960 960", "m298-262-56-56 121-122H80v-80h283L242-642l56-56 218 218-218 218Zm222-18v-80h360v80H520Zm0-320v-80h360v80H520Zm120 160v-80h240v80H640Z" ],
			500 => [ "0 -960 960 960", "M298-254.35 234.35-318l115.5-116.5H71.87v-91h277.98L234.35-642 298-705.65 523.65-480 298-254.35Zm223.91-9.15v-91h366.22v91H521.91Zm0-342v-91h366.22v91H521.91Zm120 171v-91h246.22v91H641.91Z" ],
			600 => [ "0 -960 960 960", "M298-243.91 223.91-318l108-109H60.78v-106h271.13l-108-109L298-716.09 534.09-480 298-243.91ZM524.52-241v-106h374.7v106h-374.7Zm0-372v-106h374.7v106h-374.7Zm120 186v-106h254.7v106h-254.7Z" ],
			700 => [ "0 -960 960 960", "m298-230-88-88 98-99H46v-126h262l-98-99 88-88 250 250-250 250Zm230 19v-126h386v126H528Zm0-412v-126h386v126H528Zm120 206v-126h266v126H648Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconReadMore" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
