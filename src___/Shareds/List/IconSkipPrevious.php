<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSkipPrevious
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M284-312v-336h28v336h-28Zm392 0L424-480l252-168v336Zm-28-168Zm0 116v-232L474-480l174 116Z" ],
			200 => [ "0 -960 960 960", "M269.23-295.38v-369.24h40v369.24h-40Zm421.54 0L413.85-480l276.92-184.62v369.24Zm-40-184.62Zm0 110v-220L485.54-480l165.23 110Z" ],
			300 => [ "0 -960 960 960", "M244.62-267.69v-424.62h60v424.62h-60Zm470.76 0L396.92-480l318.46-212.31v424.62Zm-60-212.31Zm0 100v-200L504.77-480l150.61 100Z" ],
			400 => [ "0 -960 960 960", "M220-240v-480h80v480h-80Zm520 0L380-480l360-240v480Zm-80-240Zm0 90v-180l-136 90 136 90Z" ],
			500 => [ "0 -960 960 960", "M204.93-224.93v-510.14h91v510.14h-91Zm550.14 0L372.35-480l382.72-255.07v510.14Zm-91-255.07Zm0 84.5v-169L536.2-480l127.87 84.5Z" ],
			600 => [ "0 -960 960 960", "M184.39-204.39v-551.22h106v551.22h-106Zm591.22 0L361.91-480l413.7-275.61v551.22ZM669.61-480Zm0 77v-154l-116.78 77 116.78 77Z" ],
			700 => [ "0 -960 960 960", "M157-177v-606h126v606H157Zm646 0L348-480l455-303v606ZM677-480Zm0 67v-134l-102 67 102 67Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSkipPrevious" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
