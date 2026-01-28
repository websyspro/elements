<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowDownward
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-748v482L232-500l-20 20 268 268 268-268-20-20-234 234v-482h-28Z" ],
			200 => [ "0 -960 960 960", "M460-760v483.15L228.31-508.54 200-480l280 280 280-280-28.31-28.54L500-276.85V-760h-40Z" ],
			300 => [ "0 -960 960 960", "M450-780v485.08L222.15-522.77 180-480l300 300 300-300-42.15-42.77L510-294.92V-780h-60Z" ],
			400 => [ "0 -960 960 960", "M440-800v487L216-537l-56 57 320 320 320-320-56-57-224 224v-487h-80Z" ],
			500 => [ "0 -960 960 960", "M434.5-808.13v481.98L215.76-544.89 151.87-480 480-151.87 808.13-480l-63.89-64.89L525.5-326.15v-481.98h-91Z" ],
			600 => [ "0 -960 960 960", "M427-819.22v475.13L215.43-555.65 140.78-480 480-140.78 819.22-480l-74.65-75.65L533-344.09v-475.13H427Z" ],
			700 => [ "0 -960 960 960", "M417-834v466L215-570l-89 90 354 354 354-354-89-90-202 202v-466H417Z" ],
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
