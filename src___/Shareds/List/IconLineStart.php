<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconLineStart
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M180-406q-31.08 0-52.54-21.44Q106-448.89 106-479.94q0-31.06 21.46-52.56Q148.92-554 180-554q27 0 47.5 17t25.5 43h601v28H253q-5 26-25.5 43T180-406Z" ],
			200 => [ "0 -960 960 960", "M180-400q-33.6 0-56.8-23.19-23.2-23.18-23.2-56.77 0-33.58 23.2-56.81Q146.4-560 180-560q27.92 0 49.46 17t27.92 43H860v40H257.38q-6.38 26-27.92 43-21.54 17-49.46 17Z" ],
			300 => [ "0 -960 960 960", "M180-390q-37.8 0-63.9-26.09Q90-442.19 90-479.98t26.1-63.9Q142.2-570 180-570q29.46 0 52.73 17 23.27 17 31.96 43H870v60H264.69q-8.69 26-31.96 43-23.27 17-52.73 17Z" ],
			400 => [ "0 -960 960 960", "M180-380q-42 0-71-29t-29-71q0-42 29-71t71-29q31 0 56 17t36 43h608v80H272q-11 26-36 43t-56 17Z" ],
			500 => [ "0 -960 960 960", "M185.26-374.5q-44.15 0-74.83-30.67Q79.76-435.85 79.76-480t30.67-74.83q30.68-30.67 74.83-30.67 31.72 0 57.44 16.88 25.71 16.88 37.91 43.12H880v91H280.61q-12.2 26.24-37.91 43.12-25.72 16.88-57.44 16.88Z" ],
			600 => [ "0 -960 960 960", "M192.44-367q-47.09 0-80.05-32.96Q79.43-432.91 79.43-480t32.96-80.04Q145.35-593 192.44-593q32.69 0 59.39 16.72 26.69 16.71 40.52 43.28H880v106H292.35q-13.83 26.57-40.52 43.28Q225.13-367 192.44-367Z" ],
			700 => [ "0 -960 960 960", "M202-357q-51 0-87-36t-36-87q0-51 36-87t87-36q34 0 62 16.5t44 43.5h572v126H308q-16 27-44 43.5T202-357Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconLineStart" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
