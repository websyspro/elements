<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconDownloadDone
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M382-362 212-532l20-20 150 150 346-346 20 20-366 366ZM252-212v-28h456v28H252Z" ],
			200 => [ "0 -960 960 960", "M382-352.31 198.85-535.46 227.38-564 382-409.38 732.62-760l28.53 28.54L382-352.31ZM240-200v-40h480v40H240Z" ],
			300 => [ "0 -960 960 960", "M382-336.16 176.92-541.23 219.69-584 382-421.69 740.31-780l42.77 42.77L382-336.16ZM220-180v-60h520v60H220Z" ],
			400 => [ "0 -960 960 960", "M382-320 155-547l57-57 170 170 366-366 57 57-423 423ZM200-160v-80h560v80H200Z" ],
			500 => [ "0 -960 960 960", "M382-319.52 147.11-554.41 212-619.3l170 170 366-366 64.89 64.89L382-319.52ZM191.87-151.87v-91h576.26v91H191.87Z" ],
			600 => [ "0 -960 960 960", "M382-318.87 136.35-564.52 212-640.18l170 170 366-366 75.65 75.66L382-318.87ZM180.78-140.78v-106h598.44v106H180.78Z" ],
			700 => [ "0 -960 960 960", "M382-318 122-578l90-90 170 170 366-366 90 90-456 456ZM166-126v-126h628v126H166Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconDownloadDone" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
