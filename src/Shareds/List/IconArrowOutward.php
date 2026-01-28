<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowOutward
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m245-277-19-19 409-410H255v-28h428v428h-28v-380L245-277Z" ],
			200 => [ "0 -960 960 960", "M247.54-268.46 220-296l403.23-404H251.54v-40h440v440h-40v-371.69l-404 403.23Z" ],
			300 => [ "0 -960 960 960", "M251.77-254.23 210-296l393.62-394H245.77v-60h460v460h-60v-357.85l-394 393.62Z" ],
			400 => [ "0 -960 960 960", "m256-240-56-56 384-384H240v-80h480v480h-80v-344L256-240Z" ],
			500 => [ "0 -960 960 960", "M258.39-232.11 194.5-296 573-674.5H236.89v-91h491v491h-91v-336.11l-378.5 378.5Z" ],
			600 => [ "0 -960 960 960", "M261.65-221.35 187-296l371-371H232.65v-106h506v506h-106v-325.35l-371 371Z" ],
			700 => [ "0 -960 960 960", "m266-207-89-89 361-361H227v-126h526v526H627v-311L266-207Z" ],
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
