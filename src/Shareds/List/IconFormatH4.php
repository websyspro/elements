<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFormatH4
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-306v-348h28v160h212v-160h28v348h-28v-160H200v160h-28Zm548 0v-120H520v-228h28v200h172v-200h28v200h80v28h-80v120h-28Z" ],
			200 => [ "0 -960 960 960", "M160-300v-360h40v160h200v-160h40v360h-40v-160H200v160h-40Zm560 0v-120H520v-240h40v200h160v-200h40v200h80v40h-80v120h-40Z" ],
			300 => [ "0 -960 960 960", "M140-290v-380h60v160h180v-160h60v380h-60v-160H200v160h-60Zm580 0v-120H520v-260h60v200h140v-200h60v200h80v60h-80v120h-60Z" ],
			400 => [ "0 -960 960 960", "M120-280v-400h80v160h160v-160h80v400h-80v-160H200v160h-80Zm600 0v-120H520v-280h80v200h120v-200h80v200h80v80h-80v120h-80Z" ],
			500 => [ "0 -960 960 960", "M111.87-273.07V-686.7h91v161.2H349v-161.2h91v413.63h-91V-434.5H202.87v161.43h-91Zm605.26 0V-394.5H520v-292.2h91v201.2h106.13v-201.2h91v201.2h80v91h-80v121.43h-91Z" ],
			600 => [ "0 -960 960 960", "M100.78-263.61v-432.22h106V-533H334v-162.83h106v432.22H334V-427H206.78v163.39h-106Zm612.44 0V-387H520v-308.83h106V-493h87.22v-202.83h106V-493h80v106h-80v123.39h-106Z" ],
			700 => [ "0 -960 960 960", "M86-251v-457h126v165h102v-165h126v457H314v-166H212v166H86Zm622 0v-126H520v-331h126v205h62v-205h126v205h80v126h-80v126H708Z" ],
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
