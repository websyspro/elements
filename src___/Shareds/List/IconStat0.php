<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconStat0
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-274 274-480l206-206 206 206-206 206Zm0-40 166-166-166-166-166 166 166 166Zm0-166Z" ],
			200 => [ "0 -960 960 960", "M480-256.92 256.92-480 480-703.08 703.08-480 480-256.92Zm0-57.08 166-166-166-166-166 166 166 166Zm0-166Z" ],
			300 => [ "0 -960 960 960", "M480-228.46 228.46-480 480-731.54 731.54-480 480-228.46Zm0-85.54 166-166-166-166-166 166 166 166Zm0-166Z" ],
			400 => [ "0 -960 960 960", "M480-200 200-480l280-280 280 280-280 280Zm0-114 166-166-166-166-166 166 166 166Zm0-166Z" ],
			500 => [ "0 -960 960 960", "M480-188.52 188.52-480 480-771.48 771.48-480 480-188.52Zm0-129.55L641.93-480 480-641.93 318.07-480 480-318.07ZM480-480Z" ],
			600 => [ "0 -960 960 960", "M480-172.87 172.87-480 480-787.13 787.13-480 480-172.87Zm0-150.74L636.39-480 480-636.39 323.61-480 480-323.61ZM480-480Z" ],
			700 => [ "0 -960 960 960", "M480-152 152-480l328-328 328 328-328 328Zm0-179 149-149-149-149-149 149 149 149Zm0-149Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconStat0" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
