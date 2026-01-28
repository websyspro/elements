<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFormatClear
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m494-566-21-21 41-99H372l-28-28h410v28H545l-51 120Zm274 414L453-468l-96 226h-31l106-247-290-289 20-20 626 626-20 20Z" ],
			200 => [ "0 -960 960 960", "M501.85-561.38 464.23-599l31.54-76.15H386.54l-49.46-49.47h427.54v49.24H550.31l-48.46 114Zm271.69 431.53L454.62-449.54l-92.31 217.23h-54.08l109-254.61-295.08-294.31 28.31-28.31 651.39 651.39-28.31 28.3Z" ],
			300 => [ "0 -960 960 960", "M514.92-553.69 449.62-619l15.77-38.08h-54.62l-85.23-85.23h456.77v84.62H559.15l-44.23 104ZM782.77-92.93 457.31-418.77l-86.16 202.61h-92.53l114-267.3L89.08-786.61l42.15-42.16 693.69 693.69-42.15 42.15Z" ],
			400 => [ "0 -960 960 960", "m528-546-93-93-121-121h486v120H568l-40 94ZM792-56 460-388l-80 188H249l119-280L56-792l56-56 736 736-56 56Z" ],
			500 => [ "0 -960 960 960", "M536.85-547.43 436.2-648.09 318.78-765.5H805.5v131H573.98l-37.13 87.07ZM794.63-53.37 465.98-382.02l-80.96 190.15H242.3l123.31-290.52L53.37-794.63 112-853.02 853.02-112l-58.39 58.63Z" ],
			600 => [ "0 -960 960 960", "M548.91-549.39 437.83-660.48 325.3-773H813v146H582.13l-33.22 77.61ZM798.22-49.78 474.13-373.87l-82.26 193.09h-158.7l129.18-304.87L49.78-798.22 112-859.87 859.87-112l-61.65 62.22Z" ],
			700 => [ "0 -960 960 960", "M565-552 440-677 334-783h489v166H593l-28 65ZM803-45 485-363l-84 197H221l137-324L45-803l67-66 757 757-66 67Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFormatClear" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
