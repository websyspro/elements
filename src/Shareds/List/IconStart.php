<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconStart
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-266v-428h28v428h-28Zm493-11-20-19 170-170H260v-28h514L606-664l19-19 203 203-203 203Z" ],
			200 => [ "0 -960 960 960", "M120-260v-440h40v440h-40Zm508.46-8.46L599.92-296l164-164H255.38v-40h507.77L600.92-664l27.54-27.54L840-480 628.46-268.46Z" ],
			300 => [ "0 -960 960 960", "M100-250v-460h60v460h-60Zm534.23-4.23L591.46-296l154-154H247.69v-60h497.39L592.46-664l41.77-41.77L860-480 634.23-254.23Z" ],
			400 => [ "0 -960 960 960", "M80-240v-480h80v480H80Zm560 0-57-56 144-144H240v-80h487L584-664l56-56 240 240-240 240Z" ],
			500 => [ "0 -960 960 960", "M71.87-234.5v-491h91v491h-91Zm568.61 2.15L575.59-296l138.74-138.5H242.87v-91h471.46L576.83-664l63.65-63.65L888.13-480 640.48-232.35Z" ],
			600 => [ "0 -960 960 960", "M60.78-227v-506h106v506h-106Zm580.35 5.09L565.48-296l131.56-131H246.78v-106h450.26l-130-131 74.09-74.09L899.22-480 641.13-221.91Z" ],
			700 => [ "0 -960 960 960", "M46-217v-526h126v526H46Zm596 9-90-88 122-121H252v-126h422L554-664l88-88 272 272-272 272Z" ],
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
