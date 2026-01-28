<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconKeyboardTab
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M800-266v-428h28v428h-28Zm-303-11-20-19 170-170H132v-28h514L478-664l19-19 203 203-203 203Z" ],
			200 => [ "0 -960 960 960", "M800-260v-440h40v440h-40Zm-306.92-8.46L464.54-296l164-164H120v-40h507.77L465.54-664l27.54-27.54L704.62-480 493.08-268.46Z" ],
			300 => [ "0 -960 960 960", "M800-250v-460h60v460h-60Zm-313.46-4.23L443.77-296l154-154H100v-60h497.39L444.77-664l41.77-41.77L712.31-480 486.54-254.23Z" ],
			400 => [ "0 -960 960 960", "M800-240v-480h80v480h-80Zm-320 0-57-56 144-144H80v-80h487L424-664l56-56 240 240-240 240Z" ],
			500 => [ "0 -960 960 960", "M797.13-234.5v-491h91v491h-91Zm-327.65 2.15L404.59-296l138.74-138.5H71.87v-91h471.46L405.83-664l63.65-63.65L717.13-480 469.48-232.35Z" ],
			600 => [ "0 -960 960 960", "M793.22-227v-506h106v506h-106Zm-338.09 5.09L379.48-296l131.56-131H60.78v-106h450.26l-130-131 74.09-74.09L713.22-480 455.13-221.91Z" ],
			700 => [ "0 -960 960 960", "M788-217v-526h126v526H788Zm-352 9-90-88 122-121H46v-126h422L348-664l88-88 272 272-272 272Z" ],
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
