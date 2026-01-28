<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconChangeHistory
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m174-212 306-490 306 490H174Zm50-28h512L480-650 224-240Zm256-205Z" ],
			200 => [ "0 -960 960 960", "M152.31-200 480-724.62 807.69-200H152.31ZM224-240h512L480-650 224-240Zm256-205Z" ],
			300 => [ "0 -960 960 960", "M116.16-180 480-762.3 843.84-180H116.16ZM224-240h512L480-650 224-240Zm256-205Z" ],
			400 => [ "0 -960 960 960", "m80-160 400-640 400 640H80Zm144-80h512L480-650 224-240Zm256-205Z" ],
			500 => [ "0 -960 960 960", "M65.41-151.87 480-815.3l414.59 663.43H65.41Zm163.61-91h501.96L480-644.5 229.02-242.87ZM480-443.8Z" ],
			600 => [ "0 -960 960 960", "M45.52-140.78 480-836.18l434.48 695.4H45.52Zm190.35-106h488.26L480-637 235.87-246.78ZM480-442.17Z" ],
			700 => [ "0 -960 960 960", "m19-126 461-738 461 738H19Zm226-126h470L480-627 245-252Zm235-188Z" ],
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
