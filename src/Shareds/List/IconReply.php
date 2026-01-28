<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconReply
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M760-252v-108q0-60-43-103t-103-43H226l170 170-20 20-204-204 204-204 20 20-170 170h388q72 0 123 51t51 123v108h-28Z" ],
			200 => [ "0 -960 960 960", "M760-240v-120q0-57.69-41.15-98.85Q677.69-500 620-500H236.85l164 164-28.54 28.31L160-520l212.31-212.31L400.85-704l-164 164H620q74.54 0 127.27 52.73Q800-434.54 800-360v120h-40Z" ],
			300 => [ "0 -960 960 960", "M760-220v-140q0-53.85-38.08-91.92Q683.85-490 630-490H254.92l154 154-42.77 42.15L140-520l226.15-226.15L408.92-704l-154 154H630q78.77 0 134.38 55.62Q820-438.77 820-360v140h-60Z" ],
			400 => [ "0 -960 960 960", "M760-200v-160q0-50-35-85t-85-35H273l144 144-57 56-240-240 240-240 57 56-144 144h367q83 0 141.5 58.5T840-360v160h-80Z" ],
			500 => [ "0 -960 960 960", "M757.13-191.87V-360q0-47.85-33.33-81.17-33.32-33.33-81.17-33.33H285.44L423.93-336l-64.41 63.65L111.87-520l247.65-247.65L423.93-704 285.44-565.5h357.19q85.15 0 145.33 60.17 60.17 60.18 60.17 145.33v168.13h-91Z" ],
			600 => [ "0 -960 960 960", "M753.22-180.78V-360q0-44.91-31.05-75.96Q691.13-467 646.22-467H302.39l131 131-74.52 74.09L100.78-520l258.09-258.09L433.39-704l-131 131h343.83q88.08 0 150.54 62.46 62.46 62.45 62.46 150.54v179.22h-106Z" ],
			700 => [ "0 -960 960 960", "M748-166v-194q0-41-28-69t-69-28H325l121 121-88 88L86-520l272-272 88 88-121 121h326q92 0 157.5 65.5T874-360v194H748Z" ],
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
