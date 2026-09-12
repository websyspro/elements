<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconLastPage
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m280-276-20-20 184-184-184-184 20-20 204 204-204 204Zm386 10v-428h28v428h-28Z" ],
			200 => [ "0 -960 960 960", "M280-267.69 251.69-296l184-184-184-184L280-692.31 492.31-480 280-267.69ZM660-260v-440h40v440h-40Z" ],
			300 => [ "0 -960 960 960", "M280-253.85 237.85-296l184-184-184-184L280-706.15 506.15-480 280-253.85ZM650-250v-460h60v460h-60Z" ],
			400 => [ "0 -960 960 960", "m280-240-56-56 184-184-184-184 56-56 240 240-240 240Zm360 0v-480h80v480h-80Z" ],
			500 => [ "0 -960 960 960", "M280-232.35 216.35-296l184-184-184-184L280-727.65 527.65-480 280-232.35Zm354.5 0v-495.3h91v495.3h-91Z" ],
			600 => [ "0 -960 960 960", "M280-221.91 205.91-296l184-184-184-184L280-738.09 538.09-480 280-221.91Zm347 0v-516.18h106v516.18H627Z" ],
			700 => [ "0 -960 960 960", "m280-208-88-88 184-184-184-184 88-88 272 272-272 272Zm337 0v-544h126v544H617Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconLastPage" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
