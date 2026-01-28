<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFormatH1
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M252-306v-348h28v160h212v-160h28v348h-28v-160H280v160h-28Zm428 0v-320h-80v-28h108v348h-28Z" ],
			200 => [ "0 -960 960 960", "M240-300v-360h40v160h200v-160h40v360h-40v-160H280v160h-40Zm440 0v-320h-80v-40h120v360h-40Z" ],
			300 => [ "0 -960 960 960", "M220-290v-380h60v160h180v-160h60v380h-60v-160H280v160h-60Zm460 0v-320h-80v-60h140v380h-60Z" ],
			400 => [ "0 -960 960 960", "M200-280v-400h80v160h160v-160h80v400h-80v-160H280v160h-80Zm480 0v-320h-80v-80h160v400h-80Z" ],
			500 => [ "0 -960 960 960", "M189-273.07V-686.7h91v161.2h149v-161.2h91v413.63h-91V-434.5H280v161.43h-91Zm491 0V-595.7h-80v-91h171v413.63h-91Z" ],
			600 => [ "0 -960 960 960", "M174-263.61v-432.22h106V-533h134v-162.83h106v432.22H414V-427H280v163.39H174Zm506 0v-326.22h-80v-106h186v432.22H680Z" ],
			700 => [ "0 -960 960 960", "M154-251v-457h126v165h114v-165h126v457H394v-166H280v166H154Zm526 0v-331h-80v-126h206v457H680Z" ],
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
