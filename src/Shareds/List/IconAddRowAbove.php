<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAddRowAbove
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M200-160h560v-269H200v269Zm588 28H172v-616h114v28h-86v263h560v-263h-86v-28h114v616ZM480-457Zm0 28v-28 28Zm0 0Zm-14-211v-80h-80v-28h80v-80h28v80h80v28h-80v80h-28Z" ],
			200 => [ "0 -960 960 960", "M200-160h560v-262.31H200V-160Zm600 40H160v-640h124.62v40H200v257.69h560V-720h-84.62v-40H800v640ZM480-462.31Zm0 40v-40 40Zm0 0ZM460-640v-80h-80v-40h80v-80h40v80h80v40h-80v80h-40Z" ],
			300 => [ "0 -960 960 960", "M200-160h560v-251.15H200V-160Zm620 60H140v-680h142.31v60H200v248.85h560V-720h-82.31v-60H820v680ZM480-471.15Zm0 60v-60 60Zm0 0ZM450-640v-80h-80v-60h80v-80h60v80h80v60h-80v80h-60Z" ],
			400 => [ "0 -960 960 960", "M200-160h560v-240H200v240Zm640 80H120v-720h160v80h-80v240h560v-240h-80v-80h160v720ZM480-480Zm0 80v-80 80Zm0 0Zm-40-240v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M202.63-162.63h554.74v-231.63H202.63v231.63Zm645.5 90.76H111.87v-736.26h167.41v90.76h-76.65v232.35h554.74v-232.35h-76.89v-90.76h167.65v736.26ZM480-485.02Zm0 90.76v-90.76 90.76Zm0 0Zm-45.5-243.11v-80h-80v-90.76h80v-80h90.76v80h80v90.76h-80v80H434.5Z" ],
			600 => [ "0 -960 960 960", "M206.22-166.22h547.56v-220.21H206.22v220.21Zm653 105.44H100.78v-758.44H278.3v105.44h-72.08v221.91h547.56v-221.91h-72.65v-105.44h178.09v758.44ZM480-491.87Zm0 105.44v-105.44 105.44Zm0 0Zm-53-247.35v-80h-80v-105.44h80v-80h105.44v80h80v105.44h-80v80H427Z" ],
			700 => [ "0 -960 960 960", "M211-171h538v-205H211v205ZM874-46H86v-788h191v125h-66v208h538v-208h-67v-125h192v788ZM480-501Zm0 125v-125 125Zm0 0Zm-63-253v-80h-80v-125h80v-80h125v80h80v125h-80v80H417Z" ],
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
