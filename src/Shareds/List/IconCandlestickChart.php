<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconCandlestickChart
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M332-212v-80h-80v-376h80v-80h28v80h80v376h-80v80h-28Zm-52-108h132v-320H280v320Zm320 108v-180h-80v-206h80v-150h28v150h80v206h-80v180h-28Zm-52-208h132v-150H548v150Zm-202-60Zm268-15Z" ],
			200 => [ "0 -960 960 960", "M320-200v-80h-80v-400h80v-80h40v80h80v400h-80v80h-40Zm-40-120h120v-320H280v320Zm320 120v-184.62h-80v-223.07h80V-760h40v152.31h80v223.07h-80V-200h-40Zm-40-224.62h120v-143.07H560v143.07ZM340-480Zm280-16.15Z" ],
			300 => [ "0 -960 960 960", "M300-180v-80h-80v-440h80v-80h60v80h80v440h-80v80h-60Zm-20-140h100v-320H280v320Zm320 140v-192.31h-80v-251.53h80V-780h60v156.16h80v251.53h-80V-180h-60Zm-20-252.31h100v-131.54H580v131.54ZM330-480Zm300-18.08Z" ],
			400 => [ "0 -960 960 960", "M280-160v-80h-80v-480h80v-80h80v80h80v480h-80v80h-80Zm0-160h80v-320h-80v320Zm320 160v-200h-80v-280h80v-160h80v160h80v280h-80v200h-80Zm0-280h80v-120h-80v120Zm-280-40Zm320-20Z" ],
			500 => [ "0 -960 960 960", "M271.87-151.87v-80h-81.91v-496.26h81.91v-80h91v80h81.91v496.26h-81.91v80h-91Zm5.5-167.41h80v-321.44h-80v321.44Zm319.76 167.41v-200h-81.91v-296.26h81.91v-160h91v160h81.91v296.26h-81.91v200h-91Zm5.5-287.41h80v-121.44h-80v121.44ZM317.37-480Zm325.26-20Z" ],
			600 => [ "0 -960 960 960", "M260.78-140.78v-80h-84.52v-518.44h84.52v-80h106v80h84.52v518.44h-84.52v80h-106Zm13-177.52h80v-323.4h-80v323.4Zm319.44 177.52v-200H508.7v-318.44h84.52v-160h106v160h84.52v318.44h-84.52v200h-106Zm13-297.52h80v-123.4h-80v123.4ZM313.78-480Zm332.44-20Z" ],
			700 => [ "0 -960 960 960", "M246-126v-80h-88v-548h88v-80h126v80h88v548h-88v80H246Zm23-191h80v-326h-80v326Zm319 191v-200h-88v-348h88v-160h126v160h88v348h-88v200H588Zm23-311h80v-126h-80v126Zm-302-43Zm342-20Z" ],
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
