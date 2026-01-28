<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFlutter
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M280-372 171-480l352-352h217L280-372Zm243 244L333-318l190-189h217L550-318l190 190H523Z" ],
			200 => [ "0 -960 960 960", "M269.85-365.77 154.62-480l372.3-372.31h229.46L269.85-365.77Zm257.07 258.08L326.08-308.54l200.84-200.08h229.46L555.54-308.54l200.84 200.85H526.92Z" ],
			300 => [ "0 -960 960 960", "M252.92-355.39 127.31-480l406.15-406.15h250.23L252.92-355.39ZM533.46-73.85 314.54-292.77l218.92-218.54h250.23L564.77-292.77 783.69-73.85H533.46Z" ],
			400 => [ "0 -960 960 960", "M236-345 100-480l440-440h271L236-345ZM540-40 303-277l237-237h271L574-277 811-40H540Z" ],
			500 => [ "0 -960 960 960", "M227.87-339.98 87.09-480l455.98-456.02h280.84L227.87-339.98Zm315.24 316L297.5-269.59 543.09-515.2h280.82L578.34-269.59 823.91-23.98h-280.8Z" ],
			600 => [ "0 -960 960 960", "M216.78-333.13 69.48-480l477.78-477.87h294.26L216.78-333.13Zm330.57 331L290-259.48l257.3-257.35h294.22L584.26-259.48 841.52-2.13H547.35Z" ],
			700 => [ "0 -960 960 960", "M202-324 46-480l506.84-507H865L202-324ZM553 27 280-246l272.92-273H865L592.14-246 865 27H553Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFlutter" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
