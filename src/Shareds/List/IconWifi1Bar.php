<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconWifi1Bar
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-150q-21 0-35.5-14.5T430-200q0-21 14.5-35.5T480-250q21 0 35.5 14.5T530-200q0 21-14.5 35.5T480-150Z" ],
			200 => [ "0 -960 960 960", "M480-143.08q-25.85 0-43.69-17.84-17.85-17.85-17.85-43.7 0-25.84 17.85-43.69 17.84-17.84 43.69-17.84 25.85 0 43.69 17.84 17.85 17.85 17.85 43.69 0 25.85-17.85 43.7-17.84 17.84-43.69 17.84Z" ],
			300 => [ "0 -960 960 960", "M480-131.54q-33.92 0-57.35-23.42-23.42-23.42-23.42-57.35 0-33.92 23.42-57.34 23.43-23.42 57.35-23.42t57.35 23.42q23.42 23.42 23.42 57.34 0 33.93-23.42 57.35-23.43 23.42-57.35 23.42Z" ],
			400 => [ "0 -960 960 960", "M480-120q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Z" ],
			500 => [ "0 -960 960 960", "M480-120q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Z" ],
			600 => [ "0 -960 960 960", "M480-120q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Z" ],
			700 => [ "0 -960 960 960", "M480-120q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Z" ],
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
