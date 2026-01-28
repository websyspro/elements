<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconTextIncrease
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m72-226 212-508h20l212 508h-34l-60-146H162l-60 146H72Zm100-172h240L295.67-682H290L172-398Zm568 52v-120H620v-28h120v-120h28v120h120v28H768v120h-28Z" ],
			200 => [ "0 -960 960 960", "m64.62-220 211.53-520h38.47l211.53 520h-48.3l-57.93-145.31H167.77L109.85-220H64.62Zm117.53-184h223.39L297.13-676h-5.28l-109.7 272Zm553.23 64v-120h-120v-40h120v-120h40v120h120v40h-120v120h-40Z" ],
			300 => [ "0 -960 960 960", "m52.31-210 210.77-540h69.23l210.77 540h-72.16l-54.46-144.15H177.38L122.92-210H52.31Zm146.77-204h195.69l-95.2-252h-4.65l-95.84 252Zm528.61 84v-120h-120v-60h120v-120h60v120h120v60h-120v120h-60Z" ],
			400 => [ "0 -960 960 960", "m40-200 210-560h100l210 560h-96l-51-143H187l-51 143H40Zm176-224h168l-82-232h-4l-82 232Zm504 104v-120H600v-80h120v-120h80v120h120v80H800v120h-80Z" ],
			500 => [ "0 -960 960 960", "m33.54-200 215.5-560h110.29l213.58 560H464.24l-49.81-139.41H190.59L140.3-200H33.54Zm187-224h163.94l-79.72-226.02h-3.89L220.54-424Zm498.5 107.59v-120h-120v-87.18h120v-120h87.42v120h120v87.18h-120v120h-87.42Z" ],
			600 => [ "0 -960 960 960", "m24.74-200 223-560h124.3l218.48 560H464.57l-48.18-134.52H195.48L146.17-200H24.74Zm202-224h158.39l-76.61-217.87h-3.74L226.74-424Zm491 112.48v-120h-120v-96.96h120v-120h97.52v120h120v96.96h-120v120h-97.52Z" ],
			700 => [ "0 -960 960 960", "m13-200 233-560h143l225 560H465l-46-128H202l-48 128H13Zm222-224h151l-72.47-207H310l-75 207Zm481 119v-120H596v-110h120v-120h111v120h120v110H827v120H716Z" ],
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
