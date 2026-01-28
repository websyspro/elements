<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconVariableAdd
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M560-332H172v-296h616v68h-28v-40H200v240h360v28Zm-360-28v-240 240Zm560 148v-120H640v-28h120v-120h28v120h120v28H788v120h-28Z" ],
			200 => [ "0 -960 960 960", "M560-320H160v-320h640v80h-40v-40H200v240h360v40Zm-360-40v-240 240Zm560 160v-120H640v-40h120v-120h40v120h120v40H800v120h-40Z" ],
			300 => [ "0 -960 960 960", "M560-300H140v-360h680v100h-60v-40H200v240h360v60Zm-360-60v-240 240Zm560 180v-120H640v-60h120v-120h60v120h120v60H820v120h-60Z" ],
			400 => [ "0 -960 960 960", "M560-280H120v-400h720v120h-80v-40H200v240h360v80Zm-360-80v-240 240Zm560 200v-120H640v-80h120v-120h80v120h120v80H840v120h-80Z" ],
			500 => [ "0 -960 960 960", "M564.78-271.87H111.87v-416.26h736.26v132.91h-91v-41.91H202.87v234.26h361.91v91Zm-361.91-91v-234.26 234.26Zm558.56 203.35v-116.65H644.78v-82.4h116.65v-116.65h82.4v116.65h116.65v82.4H843.83v116.65h-82.4Z" ],
			600 => [ "0 -960 960 960", "M571.3-260.78H100.78v-438.44h758.44v150.52h-106v-44.52H206.78v226.44H571.3v106Zm-364.52-106v-226.44 226.44Zm556.61 207.91v-112.09H651.3v-85.65h112.09V-468.7h85.65v112.09h112.09v85.65H849.04v112.09h-85.65Z" ],
			700 => [ "0 -960 960 960", "M580-246H86v-468h788v174H748v-48H212v216h368v126ZM212-372v-216 216Zm554 214v-106H660v-90h106v-106h90v106h106v90H856v106h-90Z" ],
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
