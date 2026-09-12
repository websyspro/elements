<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconTextFormat
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M226-224v-28h508v28H226Zm87-148 154-404h28l150 404h-30l-42-114H385l-42 114h-30Zm82-140h168l-80-220h-4l-84 220Z" ],
			200 => [ "0 -960 960 960", "M220-218.46v-40h520v40H220Zm84.46-150.77 156.31-412.31h40L654-369.23h-40.62l-41.07-113.54H386.62l-41.54 113.54h-40.62Zm94.92-148.31h159.7l-76.31-211.23h-4l-79.39 211.23Z" ],
			300 => [ "0 -960 960 960", "M210-209.23v-60h540v60H210Zm80.23-155.39 160.16-426.15h59.99L669-364.62h-58.31l-39.54-112.77H389.31l-40.77 112.77h-58.31Zm116.46-162.15h145.85l-70.16-196.62h-4l-71.69 196.62Z" ],
			400 => [ "0 -960 960 960", "M200-200v-80h560v80H200Zm76-160 164-440h80l164 440h-76l-38-112H392l-40 112h-76Zm138-176h132l-64-182h-4l-64 182Z" ],
			500 => [ "0 -960 960 960", "M194.5-196.41v-91h571v91h-571Zm78.87-167.18 164-440h87.17l164 440h-87.71l-36.09-107.69H397.02l-37.85 107.69h-85.8ZM419.02-540.3h122.44l-59.22-171.48h-4L419.02-540.3Z" ],
			600 => [ "0 -960 960 960", "M187-191.52v-106h586v106H187Zm82.78-176.96 164-440h96.96l164 440h-103.7L557.56-470.3H403.87l-34.91 101.82h-99.18Zm156.09-177.69h109.39L482.57-703.3h-4l-52.7 157.13Z" ],
			700 => [ "0 -960 960 960", "M177-185v-126h606v126H177Zm88-190 164-440h110l164 440H578l-30-94H413l-31 94H265Zm170-179h92l-44-138h-4l-44 138Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconTextFormat" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
