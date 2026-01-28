<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconInfoI
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-680q-23 0-38.5-15.5T426-734q0-23 15.5-38.5T480-788q23 0 38.5 15.5T534-734q0 23-15.5 38.5T480-680Zm-34 508v-388h68v388h-68Z" ],
			200 => [ "0 -960 960 960", "M480-680q-25.31 0-42.65-17.35Q420-714.69 420-740t17.35-42.65Q454.69-800 480-800t42.65 17.35Q540-765.31 540-740t-17.35 42.65Q505.31-680 480-680Zm-40 520v-409.23h80V-160h-80Z" ],
			300 => [ "0 -960 960 960", "M480-680q-29.15 0-49.58-20.42Q410-720.85 410-750t20.42-49.58Q450.85-820 480-820t49.58 20.42Q550-779.15 550-750t-20.42 49.58Q509.15-680 480-680Zm-50 540v-444.61h100V-140H430Z" ],
			400 => [ "0 -960 960 960", "M480-680q-33 0-56.5-23.5T400-760q0-33 23.5-56.5T480-840q33 0 56.5 23.5T560-760q0 33-23.5 56.5T480-680Zm-60 560v-480h120v480H420Z" ],
			500 => [ "0 -960 960 960", "M480-677.13q-35.39 0-60.45-25.05-25.05-25.06-25.05-60.45t25.05-60.45q25.06-25.05 60.45-25.05t60.45 25.05q25.05 25.06 25.05 60.45t-25.05 60.45q-25.06 25.05-60.45 25.05Zm-65.5 565.26v-485.26h131v485.26h-131Z" ],
			600 => [ "0 -960 960 960", "M480-673.22q-38.65 0-65.83-27.17Q387-727.57 387-766.22t27.17-65.82q27.18-27.18 65.83-27.18t65.83 27.18Q573-804.87 573-766.22q0 38.65-27.17 65.83-27.18 27.17-65.83 27.17Zm-73 572.44v-492.44h146v492.44H407Z" ],
			700 => [ "0 -960 960 960", "M480-668q-43 0-73-30t-30-73q0-43 30-73t73-30q43 0 73 30t30 73q0 43-30 73t-73 30ZM397-86v-502h166v502H397Z" ],
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
