<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowBackIosNew
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M640-116 276-480l364-364 34 34-330 330 330 330-34 34Z" ],
			200 => [ "0 -960 960 960", "M640-107.69 267.69-480 640-852.31l42.54 42.54L352.77-480l329.77 329.77L640-107.69Z" ],
			300 => [ "0 -960 960 960", "M640-93.85 253.85-480 640-866.15l56.77 56.77L367.38-480l329.39 329.38L640-93.85Z" ],
			400 => [ "0 -960 960 960", "M640-80 240-480l400-400 71 71-329 329 329 329-71 71Z" ],
			500 => [ "0 -960 960 960", "M640.48-72.35 232.59-480l407.89-407.65L719.13-809l-329 329 329 329-78.65 78.65Z" ],
			600 => [ "0 -960 960 960", "M641.13-61.91 222.48-480l418.65-418.09L730.22-809l-329 329 329 329-89.09 89.09Z" ],
			700 => [ "0 -960 960 960", "M642-48 209-480l433-432 103 103-329 329 329 329L642-48Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowBackIosNew" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
