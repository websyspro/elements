<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconTrendingDown
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M640-287v-28h142L531-562 371-402 132-643l20-20 219 219 160-160 269 269v-140h28v188H640Z" ],
			200 => [ "0 -960 960 960", "M640-276.15v-40h133.23L532.15-553.69l-160 160L120-647.85l28.31-28.3 223.84 223.84 160-160L800-344.46v-131.69h40v200H640Z" ],
			300 => [ "0 -960 960 960", "M640-258.08v-60h118.62L534.08-539.85l-160 160L100-655.92l42.15-42.16 231.93 231.93 160-160L800-360.23v-117.85h60v220H640Z" ],
			400 => [ "0 -960 960 960", "M640-240v-80h104L536-526 376-366 80-664l56-56 240 240 160-160 264 264v-104h80v240H640Z" ],
			500 => [ "0 -960 960 960", "M631.87-232.83v-91h101.37L537.2-518.35l-160 160L71.87-665.43l63.89-63.66L377.2-487.65l160-160 259.93 260.17v-101.37h91v256.02H631.87Z" ],
			600 => [ "0 -960 960 960", "M620.78-223.04v-106h97.78L538.83-507.91l-160 160L60.78-667.39l74.65-74.09 243.4 243.39 160-160 254.39 254.96v-97.78h106v277.87H620.78Z" ],
			700 => [ "0 -960 960 960", "M606-210v-126h93L541-494 381-334 46-670l89-88 246 246 160-160 247 248v-93h126v307H606Z" ],
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
