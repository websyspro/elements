<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconRectangle
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-212v-536h696v536H132Zm28-28h640v-480H160v480Zm0 0v-480 480Z" ],
			200 => [ "0 -960 960 960", "M120-200v-560h720v560H120Zm40-40h640v-480H160v480Zm0 0v-480 480Z" ],
			300 => [ "0 -960 960 960", "M100-180v-600h760v600H100Zm60-60h640v-480H160v480Zm0 0v-480 480Z" ],
			400 => [ "0 -960 960 960", "M80-160v-640h800v640H80Zm80-80h640v-480H160v480Zm0 0v-480 480Z" ],
			500 => [ "0 -960 960 960", "M71.87-151.87v-656.26h816.26v656.26H71.87Zm91-91h634.26v-474.26H162.87v474.26Zm0 0v-474.26 474.26Z" ],
			600 => [ "0 -960 960 960", "M60.78-140.78v-678.44h838.44v678.44H60.78Zm106-106h626.44v-466.44H166.78v466.44Zm0 0v-466.44 466.44Z" ],
			700 => [ "0 -960 960 960", "M46-126v-708h868v708H46Zm126-126h616v-456H172v456Zm0 0v-456 456Z" ],
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
