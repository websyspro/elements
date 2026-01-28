<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconCheck
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M382-276 192-466l20-20 170 170 366-366 20 20-386 386Z" ],
			200 => [ "0 -960 960 960", "M382-267.69 183.23-466.46 211.77-495 382-324.77 748.23-691l28.54 28.54L382-267.69Z" ],
			300 => [ "0 -960 960 960", "M382-253.85 168.62-467.23 211.38-510 382-339.38 748.62-706l42.76 42.77L382-253.85Z" ],
			400 => [ "0 -960 960 960", "M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" ],
			500 => [ "0 -960 960 960", "M382-232.35 146.35-468l64.89-64.89L382-362.13l366.76-366.76L813.65-664 382-232.35Z" ],
			600 => [ "0 -960 960 960", "M382-221.91 135.91-468l75.66-75.65L382-373.22l366.43-366.43L824.09-664 382-221.91Z" ],
			700 => [ "0 -960 960 960", "M382-208 122-468l90-90 170 170 366-366 90 90-456 456Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconCheck" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
