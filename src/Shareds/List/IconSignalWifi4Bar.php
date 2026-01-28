<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSignalWifi4Bar
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-194 74-600q85-73 189.5-110.5T480-748q112 0 216.5 37.5T886-600L480-194Z" ],
			200 => [ "0 -960 960 960", "M480-176.92 56.92-600q87.31-78.54 196.43-119.27Q362.46-760 480-760t226.65 40.73Q815.77-678.54 903.08-600L480-176.92Z" ],
			300 => [ "0 -960 960 960", "M480-148.46 28.46-600q91.16-87.77 207.96-133.88Q353.23-780 480-780q126.77 0 243.58 46.12Q840.38-687.77 931.54-600L480-148.46Z" ],
			400 => [ "0 -960 960 960", "M480-120 0-600q95-97 219.5-148.5T480-800q136 0 260.5 51.5T960-600L480-120Z" ],
			500 => [ "0 -960 960 960", "M480-101.59 0-600q94.76-98.2 219.14-151.13Q343.52-804.07 480-804.07q136.48 0 260.86 52.94Q865.24-698.2 960-600L480-101.59Z" ],
			600 => [ "0 -960 960 960", "M480-76.48 0-600q94.43-99.83 218.65-154.72T480-809.61q137.13 0 261.35 54.89Q865.57-699.83 960-600L480-76.48Z" ],
			700 => [ "0 -960 960 960", "M480-43 0-600q94-102 218-159.5T480-817q138 0 262 57.5T960-600L480-43Z" ],
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
