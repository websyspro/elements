<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconKeyboardReturn
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M376-276 172-480l204-204 20 20-170 170h534v-160h28v188H226l170 170-20 20Z" ],
			200 => [ "0 -960 960 960", "M372.31-267.69 160-480l212.31-212.31L400.62-664l-164 164H760v-160h40v200H236.62l164 164-28.31 28.31Z" ],
			300 => [ "0 -960 960 960", "M366.15-253.85 140-480l226.15-226.15L408.31-664l-154 154H760v-160h60v220H254.31l154 154-42.16 42.15Z" ],
			400 => [ "0 -960 960 960", "M360-240 120-480l240-240 56 56-144 144h488v-160h80v240H272l144 144-56 56Z" ],
			500 => [ "0 -960 960 960", "M359.76-232.35 111.87-480l247.89-247.65L423.41-664l-138.5 138.5h472.22v-160h91v251H284.91L423.41-296l-63.65 63.65Z" ],
			600 => [ "0 -960 960 960", "M359.43-221.91 100.78-480l258.65-258.09L433.52-664l-131 131h450.7v-160h106v266h-556.7l131 131-74.09 74.09Z" ],
			700 => [ "0 -960 960 960", "M359-208 86-480l273-272 88 88-121 121h422v-160h126v286H326l121 121-88 88Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconKeyboardReturn" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
