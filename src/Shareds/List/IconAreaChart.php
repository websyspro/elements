<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAreaChart
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-212v-364l120 90 198-279 172 137h126v416H172Zm148-68 160-220 280 218v-318H652L496-725 298-447l-98-73v144l120 96Z" ],
			200 => [ "0 -960 960 960", "M160-200v-400l129.23 96.92 198.46-279.23L666.15-640H800v440H160Zm160-80 160-220 280 218v-318H652L496-725 298-447l-98-73v144l120 96Z" ],
			300 => [ "0 -960 960 960", "M140-180v-460l144.62 108.46 199.23-279.61L673.08-660H820v480H140Zm180-100 160-220 280 218v-318H652L496-725 298-447l-98-73v144l120 96Z" ],
			400 => [ "0 -960 960 960", "M120-160v-520l160 120 200-280 200 160h160v520H120Zm200-120 160-220 280 218v-318H652L496-725 298-447l-98-73v144l120 96Z" ],
			500 => [ "0 -960 960 960", "M111.87-151.87v-544.15l166.22 124.54 200.24-280 204.54 163.35h165.26v536.26H111.87ZM319.52-284.3l160-220 277.61 216.32v-309.15H650.8L496.48-720.7l-197.76 278-95.85-71.32v136.59l116.65 93.13Z" ],
			600 => [ "0 -960 960 960", "M100.78-140.78v-577.09l174.7 130.74 200.56-280 210.74 167.91h172.44v558.44H100.78Zm218.09-149.39 160-220 274.35 214.04v-297.09H649.17L497.13-714.83l-197.43 278-92.92-69.04v126.48l112.09 89.22Z" ],
			700 => [ "0 -960 960 960", "M86-126v-621l186 139 201-280 219 174h182v588H86Zm232-172 160-220 270 211v-281H647L498-707 301-429l-89-66v113l106 84Z" ],
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
