<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFirstPage
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M266-266v-428h28v428h-28Zm414-10L476-480l204-204 20 20-184 184 184 184-20 20Z" ],
			200 => [ "0 -960 960 960", "M260-260v-440h40v440h-40Zm420-7.69L467.69-480 680-692.31 708.31-664l-184 184 184 184L680-267.69Z" ],
			300 => [ "0 -960 960 960", "M250-250v-460h60v460h-60Zm430-3.85L453.85-480 680-706.15 722.15-664l-184 184 184 184L680-253.85Z" ],
			400 => [ "0 -960 960 960", "M240-240v-480h80v480h-80Zm440 0L440-480l240-240 56 56-184 184 184 184-56 56Z" ],
			500 => [ "0 -960 960 960", "M234.5-232.35v-495.3h91v495.3h-91Zm445.5 0L432.35-480 680-727.65 743.65-664l-184 184 184 184L680-232.35Z" ],
			600 => [ "0 -960 960 960", "M227-221.91v-516.18h106v516.18H227Zm453 0L421.91-480 680-738.09 754.09-664l-184 184 184 184L680-221.91Z" ],
			700 => [ "0 -960 960 960", "M217-208v-544h126v544H217Zm463 0L408-480l272-272 88 88-184 184 184 184-88 88Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFirstPage" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
