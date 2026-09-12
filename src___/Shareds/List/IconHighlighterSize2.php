<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconHighlighterSize2
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m300-216-84-84q-5-5-5-10.5t5-10.5l423-423q5-5 10.5-5t10.5 5l84 85q4 4 4 10t-4 10L321-216q-5 5-10.5 5t-10.5-5Z" ],
			200 => [ "0 -960 960 960", "m295.85-211.85-84-84q-6.62-6.61-6.62-14.65t6.62-14.65l423-423q6.61-6.62 14.65-6.62t14.65 6.62l84 85q5.62 5.61 5.62 14.15t-5.62 14.15l-423 423q-6.61 6.62-14.65 6.62t-14.65-6.62Z" ],
			300 => [ "0 -960 960 960", "m288.92-204.92-84-84q-9.3-9.31-9.3-21.58 0-12.27 9.3-21.58l423-423q9.31-9.3 21.58-9.3 12.27 0 21.58 9.3l84 85q8.3 8.31 8.3 21.08 0 12.77-8.3 21.08l-423 423q-9.31 9.3-21.58 9.3-12.27 0-21.58-9.3Z" ],
			400 => [ "0 -960 960 960", "m282-198-84-84q-12-12-12-28.5t12-28.5l423-423q12-12 28.5-12t28.5 12l84 85q11 11 11 28t-11 28L339-198q-12 12-28.5 12T282-198Z" ],
			500 => [ "0 -960 960 960", "m278.17-194.17-84-84q-13.67-13.68-13.67-32.33t13.67-32.33l423-423q13.68-13.67 32.33-13.67t32.33 13.67l84 85Q778.5-668.15 778.5-649t-12.67 31.83l-423 423q-13.68 13.67-32.33 13.67t-32.33-13.67Z" ],
			600 => [ "0 -960 960 960", "m272.96-188.96-84-84Q173-288.91 173-310.5t15.96-37.54l423-423Q627.91-787 649.5-787t37.54 15.96l84 85Q786-671.09 786-649t-14.96 37.04l-423 423Q332.09-173 310.5-173t-37.54-15.96Z" ],
			700 => [ "0 -960 960 960", "m266-182-84-84q-19-19-19-44.5t19-44.5l423-423q19-19 44.5-19t44.5 19l84 85q18 18 18 44t-18 44L355-182q-19 19-44.5 19T266-182Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconHighlighterSize2" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
