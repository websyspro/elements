<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconHexagon
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M287-146 94-480l193-334h386l193 334-193 334H287Zm16-28h354l176-306-176-306H303L126-480l177 306Zm177-306Z" ],
			200 => [ "0 -960 960 960", "M283.54-140 87.08-480l196.46-340h392.92l196.46 340-196.46 340H283.54Zm22.92-40h347.08l172.54-300-172.54-300H306.46L132.92-480l173.54 300ZM480-480Z" ],
			300 => [ "0 -960 960 960", "M277.77-130 75.54-480l202.23-350h404.46l202.23 350-202.23 350H277.77Zm34.46-60h335.54l166.77-290-166.77-290H312.23L144.46-480l167.77 290ZM480-480Z" ],
			400 => [ "0 -960 960 960", "M272-120 64-480l208-360h416l208 360-208 360H272Zm46-80h324l161-280-161-280H318L156-480l162 280Zm162-280Z" ],
			500 => [ "0 -960 960 960", "M268.89-114.5 57.54-480l211.35-365.5h422.22L902.46-480 691.11-114.5H268.89Zm52.22-91h317.78L796.54-480 638.89-754.5H321.11L162.46-480l158.65 274.5ZM480-480Z" ],
			600 => [ "0 -960 960 960", "M264.65-107 48.74-480l215.91-373h430.7l215.91 373-215.91 373h-430.7Zm60.7-106h309.3l153.09-267-153.09-267h-309.3L171.26-480l154.09 267ZM480-480Z" ],
			700 => [ "0 -960 960 960", "M259-97 37-480l222-383h442l222 383L701-97H259Zm72-126h298l147-257-147-257H331L183-480l148 257Zm149-257Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconHexagon" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
