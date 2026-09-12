<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconEject
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M260-234v-24h440v24H260Zm4-144 216-322 216 322H264Zm216-24Zm-166 0h332L480-650 314-402Z" ],
			200 => [ "0 -960 960 960", "M246.15-226.15v-36.93h467.7v36.93h-467.7Zm6.31-147.7 227.54-340 227.54 340H252.46ZM480-410.77Zm-154.92 0h309.84L480-642.15 325.08-410.77Z" ],
			300 => [ "0 -960 960 960", "M223.08-213.08v-58.46h513.84v58.46H223.08Zm10.15-153.84 246.77-370 246.77 370H233.23ZM480-425.38Zm-136.46 0h272.92L480-629.08l-136.46 203.7Z" ],
			400 => [ "0 -960 960 960", "M200-200v-80h560v80H200Zm14-160 266-400 266 400H214Zm266-80Zm-118 0h236L480-616 362-440Z" ],
			500 => [ "0 -960 960 960", "M189-189v-91h582v91H189Zm9.93-171L480-782.72 761.07-360H198.93ZM480-451Zm-112.5 0h225L480-618.87 367.5-451Z" ],
			600 => [ "0 -960 960 960", "M174-174v-106h612v106H174Zm4.39-186L480-813.7 781.61-360H178.39ZM480-466Zm-105 0h210L480-622.78 375-466Z" ],
			700 => [ "0 -960 960 960", "M154-154v-126h652v126H154Zm-3-206 329-495 329 495H151Zm329-126Zm-95 0h190l-95-142-95 142Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconEject" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
