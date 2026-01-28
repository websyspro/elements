<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconLandscape
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m139-292 146-196 126 168h354L565-586 439-418l-18-24 144-192 256 342H139Zm374-28Zm-318 0h181l-91-122-90 122Zm0 0h181-181Z" ],
			200 => [ "0 -960 960 960", "m116.15-280 167.7-224.62L422.31-320h341.54l-200-266-120 159.69L418.46-460l145.39-193.85 280 373.85h-727.7Zm407.93-40Zm-327.93 0h176.16l-88.46-118.54L196.15-320Zm0 0h176.16-176.16Z" ],
			300 => [ "0 -960 960 960", "m78.08-260 203.84-272.31L441.15-320h320.77l-200-266-110 145.85L414.23-490l147.69-196.92 320 426.92H78.08Zm464.46-60Zm-344.46 0h168.07l-84.23-112.77L198.08-320Zm0 0h168.07-168.07Z" ],
			400 => [ "0 -960 960 960", "m40-240 240-320 180 240h300L560-586 460-454l-50-66 150-200 360 480H40Zm521-80Zm-361 0h160l-80-107-80 107Zm0 0h160-160Z" ],
			500 => [ "0 -960 960 960", "M32.59-236.41 280-566.22l179.28 238.81h286.13L560-573.8l-93.07 123.15L410-526.22l150-200 367.41 489.81H32.59Zm527.21-91Zm-350.23 0h140.86L280-421.74l-70.43 94.33Zm0 0h140.86-140.86Z" ],
			600 => [ "0 -960 960 960", "M22.48-231.52 280-574.7l178.3 237.18h267.22L560-557.17l-83.61 111.08L410-534.7l150-200 377.52 503.18H22.48Zm535.69-106Zm-335.56 0h114.78L280-414.56l-57.39 77.04Zm0 0h114.78-114.78Z" ],
			700 => [ "0 -960 960 960", "m9-225 271-361 177 235h242L560-535l-71 95-79-106 150-200 391 521H9Zm547-126Zm-316 0h80l-40-54-40 54Zm0 0h80-80Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconLandscape" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
