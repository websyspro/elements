<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSignalCellular1Bar
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m132-132 696-696v696H132Zm231-28h437v-600L363-323v163Z" ],
			200 => [ "0 -960 960 960", "m120-120 720-720v720H120Zm251.54-40H800v-582.92L371.54-314.46V-160Z" ],
			300 => [ "0 -960 960 960", "m100-100 760-760v760H100Zm285.77-60H800v-554.46L385.77-300.23V-160Z" ],
			400 => [ "0 -960 960 960", "m80-80 800-800v800H80Zm320-80h400v-526L400-286v126Z" ],
			500 => [ "0 -960 960 960", "m71.87-71.87 816.26-816.26v816.26H71.87Zm341.28-91h383.98v-504.96l-383.98 384v120.96Z" ],
			600 => [ "0 -960 960 960", "m60.78-60.78 838.44-838.44v838.44H60.78Zm370.31-106h362.13v-476.26L431.09-280.87v114.09Z" ],
			700 => [ "0 -960 960 960", "m46-46 868-868v868H46Zm409-126h333v-438L455-276.92V-172Z" ],
		};
	}

	public static function create(
		int $size,
		int $weight = 300,
		string $fill = "#000"
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->add( Path::create(
				$path
			))
			->props(
				[
					"xmlns" => "http://www.w3.org/2000/svg",
					"viewBox" => "{$viewBox}",
					"height" => "{$size}",
					"width" => "{$size}",
					"fill" => "{$fill}"
				]
			);
	}
}
