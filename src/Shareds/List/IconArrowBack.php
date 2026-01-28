<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowBack
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m266-466 234 234-20 20-268-268 268-268 20 20-234 234h482v28H266Z" ],
			200 => [ "0 -960 960 960", "m276.85-460 231.69 231.69L480-200 200-480l280-280 28.54 28.31L276.85-500H760v40H276.85Z" ],
			300 => [ "0 -960 960 960", "m294.92-450 227.85 227.85L480-180 180-480l300-300 42.77 42.15L294.92-510H780v60H294.92Z" ],
			400 => [ "0 -960 960 960", "m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" ],
			500 => [ "0 -960 960 960", "m326.15-434.5 218.74 218.74L480-151.87 151.87-480 480-808.13l64.89 63.89L326.15-525.5h481.98v91H326.15Z" ],
			600 => [ "0 -960 960 960", "m344.09-427 211.56 211.57L480-140.78 140.78-480 480-819.22l75.65 74.65L344.09-533h475.13v106H344.09Z" ],
			700 => [ "0 -960 960 960", "m368-417 202 202-90 89-354-354 354-354 90 89-202 202h466v126H368Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowBack" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
