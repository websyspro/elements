<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSignalCellularAlt1Bar
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M252-212v-136h48v136h-48Z" ],
			200 => [ "0 -960 960 960", "M240-200v-160h64.62v160H240Z" ],
			300 => [ "0 -960 960 960", "M220-180v-200h92.31v200H220Z" ],
			400 => [ "0 -960 960 960", "M200-160v-240h120v240H200Z" ],
			500 => [ "0 -960 960 960", "M194.26-151.87v-232.35h131v232.35h-131Z" ],
			600 => [ "0 -960 960 960", "M186.43-140.78v-221.91h146.01v221.91H186.43Z" ],
			700 => [ "0 -960 960 960", "M176-126v-208h166v208H176Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSignalCellularAlt1Bar" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
