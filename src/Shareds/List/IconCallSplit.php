<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconCallSplit
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-212v-262L240-700v140h-28v-188h188v28H260l234 234v274h-28Zm92-326-20-20 162-162H560v-28h188v188h-28v-140L558-538Z" ],
			200 => [ "0 -960 960 960", "M460-200v-271.69l-220-220V-560h-40v-200h200v40H268.31L500-488.31V-200h-40Zm106.31-337.54-28.77-28.77L691.69-720H560v-40h200v200h-40v-131.69L566.31-537.54Z" ],
			300 => [ "0 -960 960 960", "M450-180v-287.85l-210-210V-560h-60v-220h220v60H282.15L510-492.15V-180h-60Zm130.15-356.77-43.38-43.38L677.85-720H560v-60h220v220h-60v-117.85L580.15-536.77Z" ],
			400 => [ "0 -960 960 960", "M440-160v-304L240-664v104h-80v-240h240v80H296l224 224v336h-80Zm154-376-58-58 128-126H560v-80h240v240h-80v-104L594-536Z" ],
			500 => [ "0 -960 960 960", "M434.5-152.11v-309.74L242.87-653.48v96.35h-91v-251h251v91h-96.35L525.5-498.15v346.04h-91Zm167.15-383.65L536-601.41l117-115.72h-95.87v-91h251v251h-91V-653L601.65-535.76Z" ],
			600 => [ "0 -960 960 960", "M427-141.35v-317.56L246.78-639.13v85.91h-106v-266h266v106h-85.91L533-501.09v359.74H427Zm185.09-394.08L536-611.52l102-101.7h-84.78v-106h266v266h-106V-638L612.09-535.43Z" ],
			700 => [ "0 -960 960 960", "M417-127v-328L252-620v72H126v-286h286v126h-72l203 203v378H417Zm209-408-90-90 82-83h-70v-126h286v286H708v-70l-82 83Z" ],
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
