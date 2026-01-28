<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconKeyboardControlKey
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m256-461-19-19 243-243 243 243-19 19-224-223-224 223Z" ],
			200 => [ "0 -960 960 960", "M256-452.46 228.46-480 480-731.54 731.54-480 704-452.46l-224-223-224 223Z" ],
			300 => [ "0 -960 960 960", "M256-438.23 214.23-480 480-745.77 745.77-480 704-438.23l-224-223-224 223Z" ],
			400 => [ "0 -960 960 960", "m256-424-56-56 280-280 280 280-56 56-224-223-224 223Z" ],
			500 => [ "0 -960 960 960", "M256-416.35 192.35-480 480-767.65 767.65-480 704-416.35l-224-223-224 223Z" ],
			600 => [ "0 -960 960 960", "M256-405.91 181.91-480 480-778.09 778.09-480 704-405.91l-224-223-224 223Z" ],
			700 => [ "0 -960 960 960", "m256-392-88-88 312-312 312 312-88 88-224-223-224 223Z" ],
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
