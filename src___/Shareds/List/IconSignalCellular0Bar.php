<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSignalCellular0Bar
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m132-132 696-696v696H132Zm68-28h600v-600L200-160Z" ],
			200 => [ "0 -960 960 960", "m120-120 720-720v720H120Zm96.85-40H800v-582.92L216.85-160Z" ],
			300 => [ "0 -960 960 960", "m100-100 760-760v760H100Zm144.92-60H800v-554.46L244.92-160Z" ],
			400 => [ "0 -960 960 960", "m80-80 800-800v800H80Zm193-80h527v-526L273-160Z" ],
			500 => [ "0 -960 960 960", "m71.87-71.87 816.26-816.26v816.26H71.87Zm219.54-91h505.72v-504.96L291.41-162.87Z" ],
			600 => [ "0 -960 960 960", "m60.78-60.78 838.44-838.44v838.44H60.78Zm255.74-106h476.7v-476.26l-476.7 476.26Z" ],
			700 => [ "0 -960 960 960", "m46-46 868-868v868H46Zm304-126h438v-438L350-172Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSignalCellular0Bar" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
