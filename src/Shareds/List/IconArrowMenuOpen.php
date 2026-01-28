<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowMenuOpen
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M412-172v-616h28v616h-28Zm128-179v-257l121 128-121 129Z" ],
			200 => [ "0 -960 960 960", "M400-160v-640h40v640h-40Zm135.38-174.62v-290L674.62-480 535.38-334.62Z" ],
			300 => [ "0 -960 960 960", "M380-140v-680h60v680h-60Zm147.69-167.31v-345L697.31-480 527.69-307.31Z" ],
			400 => [ "0 -960 960 960", "M360-120v-720h80v720h-80Zm160-160v-400l200 200-200 200Z" ],
			500 => [ "0 -960 960 960", "M347.56-111.87v-736.26h90.77v736.26h-90.77Zm170.77-154.26v-427.74L732.44-480 518.33-266.13Z" ],
			600 => [ "0 -960 960 960", "M330.61-100.78v-758.44h105.43v758.44H330.61Zm185.43-146.44v-465.56L749.39-480 516.04-247.22Z" ],
			700 => [ "0 -960 960 960", "M308-86v-788h125v788H308Zm205-136v-516l259 258-259 258Z" ],
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
