<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowWarmUp
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-777 253-564l-19-19 246-246 246 246-19 20-213-213v284h-28v-285Zm0 485v-120h28v120h-28Zm0 160v-80h28v80h-28Z" ],
			200 => [ "0 -960 960 960", "M460-765.46 253.69-559.38l-27.54-27.54L480-840.77l253.85 253.85-27.54 28.54L500-764.69V-480h-40v-285.46ZM460-280v-120h40v120h-40Zm0 160v-80h40v80h-40Z" ],
			300 => [ "0 -960 960 960", "M450-746.23 254.85-551.69l-41.77-41.77L480-860.38l266.92 266.92-41.77 42.77L510-745.85V-460h-60v-286.23ZM450-260v-120h60v120h-60Zm0 160v-80h60v80h-60Z" ],
			400 => [ "0 -960 960 960", "M440-727 256-544l-56-56 280-280 280 280-56 57-184-184v287h-80v-287Zm0 487v-120h80v120h-80Zm0 160v-80h80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M434.5-714.09 255.52-535.63l-63.65-63.89L480-887.65l288.37 288.13-63.89 64.65L525.5-714.09v269.79h-91v-269.79Zm0 471.22V-364.3h91v121.43h-91Zm0 171v-91h91v91h-91Z" ],
			600 => [ "0 -960 960 960", "M427-696.48 254.87-524.22l-74.09-74.65L480-898.09l299.78 299.22-74.65 75.09L533-696.48v246.31H427v-246.31Zm0 449.7v-123.39h106v123.39H427Zm0 186v-106h106v106H427Z" ],
			700 => [ "0 -960 960 960", "M417-673 254-509l-88-89 314-314 315 314-89 89-163-164v215H417v-215Zm0 421v-126h126v126H417Zm0 206v-126h126v126H417Z" ],
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
