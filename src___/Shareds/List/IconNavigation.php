<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconNavigation
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m250-198-12-10 242-544 242 544-12 10-230-98-230 98Zm34-46 196-84 196 84-196-440-196 440Zm196-84Z" ],
			200 => [ "0 -960 960 960", "M238.46-180 220-196.92l260-584.62 260 584.62L721.54-180 480-283.08 238.46-180ZM284-244l196-84 196 84-196-440-196 440Zm196-84Z" ],
			300 => [ "0 -960 960 960", "M219.23-150 190-178.46l290-652.31 290 652.31L740.77-150 480-261.54 219.23-150ZM284-244l196-84 196 84-196-440-196 440Zm196-84Z" ],
			400 => [ "0 -960 960 960", "m200-120-40-40 320-720 320 720-40 40-280-120-280 120Zm84-124 196-84 196 84-196-440-196 440Zm196-84Z" ],
			500 => [ "0 -960 960 960", "m198.09-105.41-47.66-47.66L480-894.59l329.57 741.52-47.66 47.66L480-226.13 198.09-105.41Zm91.89-139.07L480-326.09l190.02 81.61L480-671.56 289.98-244.48ZM480-326.09Z" ],
			600 => [ "0 -960 960 960", "m195.48-85.52-58.09-58.09L480-914.48l342.61 770.87-58.09 58.09L480-207.22 195.48-85.52Zm102.65-159.61L480-323.48l181.87 78.35L480-654.61 298.13-245.13ZM480-323.48Z" ],
			700 => [ "0 -960 960 960", "m192-59-72-72 360-810 360 810-72 72-288-123L192-59Zm117-187 171-74 171 74-171-386-171 386Zm171-74Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconNavigation" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
