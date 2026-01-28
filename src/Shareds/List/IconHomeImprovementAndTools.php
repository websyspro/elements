<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconHomeImprovementAndTools
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M342-828h276l-70 100v506l-68 68-68-68v-506l-70-100Zm98 294h80v-202l40-64H400l40 64v202Zm80 28h-80v132h80v-132Zm0 270v-110h-80v110l40 40 40-40Zm-40-298Zm0 160Zm0-160Zm0 28Zm0 160Z" ],
			200 => [ "0 -960 960 960", "M318.46-840h323.08L560-724.31v507.39l-80 80-80-80v-507.39L318.46-840ZM440-540h80v-196l40-64H400l40 64v196Zm80 40h-80v120h80v-120Zm0 263.08V-340h-80v103.08l40 40 40-40ZM480-540Zm0 160Zm0-160Zm0 40Zm0 160Z" ],
			300 => [ "0 -960 960 960", "M279.23-860h401.54L580-718.15v509.69l-100 100-100-100v-509.69L279.23-860ZM440-550h80v-186l40-64H400l40 64v186Zm80 60h-80v100h80v-100Zm0 251.54V-330h-80v91.54l40 40 40-40ZM480-550Zm0 160Zm0-160Zm0 60Zm0 160Z" ],
			400 => [ "0 -960 960 960", "M240-880h480L600-712v512L480-80 360-200v-512L240-880Zm200 320h80v-176l40-64H400l40 64v176Zm80 80h-80v80h80v-80Zm0 240v-80h-80v80l40 40 40-40Zm-40-320Zm0 160Zm0-160Zm0 80Zm0 160Z" ],
			500 => [ "0 -960 960 960", "M221.35-887.65h517.3L608.13-706.02v512.72L480-65.41 351.87-193.3v-512.72L221.35-887.65Zm221.52 331h74.26v-176l40-64H402.87l40 64v176Zm74.26 80h-74.26v80h74.26v-80Zm0 240v-80h-74.26v80L480-199.52l37.13-37.13Zm-37.13-320Zm0 160Zm0-160Zm0 80Zm0 160Z" ],
			600 => [ "0 -960 960 960", "M195.91-898.09h568.18L619.22-697.87v513.7L480-45.52 340.78-184.17v-513.7L195.91-898.09Zm250.87 346h66.44v-176l40-64H406.78l40 64v176Zm66.44 80h-66.44v80h66.44v-80Zm0 240v-80h-66.44v80L480-198.87l33.22-33.22Zm-33.22-320Zm0 160Zm0-160Zm0 80Zm0 160Z" ],
			700 => [ "0 -960 960 960", "M162-912h636L634-687v515L480-19 326-172v-515L162-912Zm290 366h56v-176l40-64H412l40 64v176Zm56 80h-56v80h56v-80Zm0 240v-80h-56v80l28 28 28-28Zm-28-320Zm0 160Zm0-160Zm0 80Zm0 160Z" ],
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
