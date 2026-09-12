<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconKeyboardDoubleArrowRight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M433-480 249-664l20-20 204 204-204 204-20-20 184-184Zm238 0L487-664l20-20 204 204-204 204-20-20 184-184Z" ],
			200 => [ "0 -960 960 960", "M421.46-480 237.69-664 266-692.31 478.31-480 266-267.69 237.69-296l183.77-184Zm244 0L481.69-664 510-692.31 722.31-480 510-267.69 481.69-296l183.77-184Z" ],
			300 => [ "0 -960 960 960", "M402.23-480 218.85-664 261-706.15 487.15-480 261-253.85 218.85-296l183.38-184Zm254 0L472.85-664 515-706.15 741.15-480 515-253.85 472.85-296l183.38-184Z" ],
			400 => [ "0 -960 960 960", "M383-480 200-664l56-56 240 240-240 240-56-56 183-184Zm264 0L464-664l56-56 240 240-240 240-56-56 183-184Z" ],
			500 => [ "0 -960 960 960", "m373.91-480-183-184 63.66-63.65L502.22-480 254.57-232.35 190.91-296l183-184Zm267.11 0L457.78-664l63.65-63.65L769.09-480 521.43-232.35 457.78-296l183.24-184Z" ],
			600 => [ "0 -960 960 960", "m361.52-480-183-184 74.09-74.09L510.7-480 252.61-221.91 178.52-296l183-184Zm271.35 0L449.3-664l74.09-74.09L781.48-480 523.39-221.91 449.3-296l183.57-184Z" ],
			700 => [ "0 -960 960 960", "M345-480 162-664l88-88 272 272-272 272-88-88 183-184Zm277 0L438-664l88-88 272 272-272 272-88-88 184-184Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconKeyboardDoubleArrowRight" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
