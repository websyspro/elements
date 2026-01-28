<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLineEnd
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M780-406q-27 0-47.5-17T707-466H106v-28h601q5-26 25.5-43t47.5-17q31.08 0 52.54 21.44Q854-511.11 854-480.06q0 31.06-21.46 52.56Q811.08-406 780-406Z" ],
			200 => [ "0 -960 960 960", "M780-400q-27.92 0-49.46-17t-27.92-43H100v-40h602.62q6.38-26 27.92-43 21.54-17 49.46-17 33.6 0 56.8 23.19 23.2 23.18 23.2 56.77 0 33.58-23.2 56.81Q813.6-400 780-400Z" ],
			300 => [ "0 -960 960 960", "M780-390q-29.46 0-52.73-17-23.27-17-31.96-43H90v-60h605.31q8.69-26 31.96-43 23.27-17 52.73-17 37.8 0 63.9 26.09 26.1 26.1 26.1 63.89t-26.1 63.9Q817.8-390 780-390Z" ],
			400 => [ "0 -960 960 960", "M780-380q-31 0-56-17t-36-43H80v-80h608q11-26 36-43t56-17q42 0 71 29t29 71q0 42-29 71t-71 29Z" ],
			500 => [ "0 -960 960 960", "M774.5-374.5q-31.72 0-57.43-16.88-25.72-16.88-37.92-43.12H79.76v-91h599.39q12.2-26.24 37.92-43.12 25.71-16.88 57.43-16.88 44.15 0 74.83 30.67Q880-524.15 880-480t-30.67 74.83q-30.68 30.67-74.83 30.67Z" ],
			600 => [ "0 -960 960 960", "M767-367q-32.7 0-59.39-16.72-26.7-16.71-40.52-43.28H79.43v-106h587.66q13.82-26.57 40.52-43.28Q734.3-593 767-593q47.09 0 80.04 32.96Q880-527.09 880-480t-32.96 80.04Q814.09-367 767-367Z" ],
			700 => [ "0 -960 960 960", "M757-357q-34 0-62-16.5T651-417H79v-126h572q16-27 44-43.5t62-16.5q51 0 87 36t36 87q0 51-36 87t-87 36Z" ],
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
