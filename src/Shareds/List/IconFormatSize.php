<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFormatSize
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M603-212v-507H407v-29h421v29H632v507h-29Zm-353 0v-312H132v-29h264v29H278v312h-28Z" ],
			200 => [ "0 -960 960 960", "M593.08-200v-510H396.15v-50H840v50H643.08v510h-50Zm-354.62 0v-313.85H120v-50h286.15v50H287.69V-200h-49.23Z" ],
			300 => [ "0 -960 960 960", "M576.54-180v-515H378.08v-85H860v85H661.54v515h-85Zm-357.31 0v-316.92H100v-85h323.08v85H303.84V-180h-84.61Z" ],
			400 => [ "0 -960 960 960", "M560-160v-520H360v-120h520v120H680v520H560Zm-360 0v-320H80v-120h360v120H320v320H200Z" ],
			500 => [ "0 -960 960 960", "M560.24-151.87v-528.61H359.52v-127.65h528.61v127.65H687.65v528.61H560.24Zm-368.13 0v-320.96H71.87v-127.41h367.89v127.41H319.52v320.96H192.11Z" ],
			600 => [ "0 -960 960 960", "M560.57-140.78v-540.35h-201.7v-138.09h540.35v138.09H698.09v540.35H560.57Zm-379.22 0v-322.26H60.78v-137.53h378.65v137.53H318.87v322.26H181.35Z" ],
			700 => [ "0 -960 960 960", "M561-126v-556H358v-152h556v152H712v556H561Zm-394 0v-324H46v-151h393v151H318v324H167Z" ],
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
