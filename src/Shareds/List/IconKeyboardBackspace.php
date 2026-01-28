<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconKeyboardBackspace
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M376-276 172-480l204-204 20 20-170 170h562v28H226l170 170-20 20Z" ],
			200 => [ "0 -960 960 960", "M372.31-267.69 160-480l212.31-212.31L400.62-664l-164 164H800v40H236.62l164 164-28.31 28.31Z" ],
			300 => [ "0 -960 960 960", "M366.15-253.85 140-480l226.15-226.15L408.31-664l-154 154H820v60H254.31l154 154-42.16 42.15Z" ],
			400 => [ "0 -960 960 960", "M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z" ],
			500 => [ "0 -960 960 960", "M359.76-232.35 111.87-480l247.89-247.65L423.41-664l-138.5 138.5h563.22v91H284.91L423.41-296l-63.65 63.65Z" ],
			600 => [ "0 -960 960 960", "M359.43-221.91 100.78-480l258.65-258.09L433.52-664l-131 131h556.7v106h-556.7l131 131-74.09 74.09Z" ],
			700 => [ "0 -960 960 960", "M359-208 86-480l273-272 88 88-121 121h548v126H326l121 121-88 88Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconKeyboardBackspace" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
