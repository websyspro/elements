<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconResume
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M304-312v-336h28v336h-28Zm128 0 281-168-281-168v336Zm28-52v-232l194 116-194 116Zm0-116Z" ],
			200 => [ "0 -960 960 960", "M289.23-295.38v-369.24h40v369.24h-40Zm135.39 0L733.08-480 424.62-664.62v369.24Zm40-72.54v-224.16L651.92-480l-187.3 112.08Zm0-112.08Z" ],
			300 => [ "0 -960 960 960", "M264.62-267.69v-424.62h60v424.62h-60Zm147.69 0L766.54-480 412.31-692.31v424.62Zm60-106.77v-211.08L648.46-480 472.31-374.46Zm0-105.54Z" ],
			400 => [ "0 -960 960 960", "M240-240v-480h80v480h-80Zm160 0 400-240-400-240v480Zm80-141v-198l165 99-165 99Zm0-99Z" ],
			500 => [ "0 -960 960 960", "M224.93-224.93v-510.14h91v510.14h-91Zm171 0L825.83-480l-429.9-255.07v510.14Zm91-163.72v-182.7L640.22-480l-153.29 91.35Zm0-91.35Z" ],
			600 => [ "0 -960 960 960", "M204.39-204.39v-551.22h106v551.22h-106Zm186 0L861.05-480 390.39-755.61v551.22Zm106-194.7v-161.82L633.7-480l-137.31 80.91Zm0-80.91Z" ],
			700 => [ "0 -960 960 960", "M177-177v-606h126v606H177Zm206 0 525-303-525-303v606Zm126-236v-134l116 67-116 67Zm0-67Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconResume" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
