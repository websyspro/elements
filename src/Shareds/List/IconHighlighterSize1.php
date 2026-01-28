<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconHighlighterSize1
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m286-230-56-56q-5-5-5-10.5t5-10.5l423-423q5-5 10.5-5t10.5 5l56 56q5 5 5 10.5t-5 10.5L306-230q-4 4-10 4t-10-4Z" ],
			200 => [ "0 -960 960 960", "m281.85-225.85-56-56q-6.62-6.61-6.62-14.65t6.62-14.65l423-423q6.61-6.62 14.65-6.62t14.65 6.62l56 56q6.62 6.61 6.62 14.65t-6.62 14.65l-424 423q-5.61 5.62-14.15 5.62t-14.15-5.62Z" ],
			300 => [ "0 -960 960 960", "m274.92-218.92-56-56q-9.3-9.31-9.3-21.58 0-12.27 9.3-21.58l423-423q9.31-9.3 21.58-9.3 12.27 0 21.58 9.3l56 56q9.3 9.31 9.3 21.58 0 12.27-9.3 21.58l-424 423q-8.31 8.3-21.08 8.3-12.77 0-21.08-8.3Z" ],
			400 => [ "0 -960 960 960", "m268-212-56-56q-12-12-12-28.5t12-28.5l423-423q12-12 28.5-12t28.5 12l56 56q12 12 12 28.5T748-635L324-212q-11 11-28 11t-28-11Z" ],
			500 => [ "0 -960 960 960", "m264.17-208.17-56-56q-13.67-13.68-13.67-32.33t13.67-32.33l423-423q13.68-13.67 32.33-13.67t32.33 13.67l56 56q13.67 13.68 13.67 32.33t-13.67 32.33l-424 423Q315.15-195.5 296-195.5t-31.83-12.67Z" ],
			600 => [ "0 -960 960 960", "m258.96-202.96-56-56Q187-274.91 187-296.5t15.96-37.54l423-423Q641.91-773 663.5-773t37.54 15.96l56 56Q773-685.09 773-663.5t-15.96 37.54l-424 423Q318.09-188 296-188t-37.04-14.96Z" ],
			700 => [ "0 -960 960 960", "m252-196-56-56q-19-19-19-44.5t19-44.5l423-423q19-19 44.5-19t44.5 19l56 56q19 19 19 44.5T764-619L340-196q-18 18-44 18t-44-18Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconHighlighterSize1" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
