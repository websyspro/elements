<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconMenuOpen
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-292v-28h438v28H172Zm596-35L613-480l155-152 20 20-135 132 135 133-20 20ZM172-466v-28h326v28H172Zm0-174v-28h438v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-280v-40h456.92v40H160Zm611.69-36.15L606.31-480l165.38-163.08L800-614.77 662.92-480 800-344.46l-28.31 28.31ZM160-460v-40h343.08v40H160Zm0-180v-40h456.92v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-260v-60h488.46v60H140Zm637.85-38.08L595.15-480l182.7-181.54L820-619.38 679.46-480 820-340.23l-42.15 42.15ZM140-450v-60h371.54v60H140Zm0-190v-60h488.46v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-240v-80h520v80H120Zm664-40L584-480l200-200 56 56-144 144 144 144-56 56ZM120-440v-80h400v80H120Zm0-200v-80h520v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-231.87v-90.76h523.35v90.76H111.87Zm672.85-41.2L579.7-480l205.02-206.93 63.41 63.65L706.52-480l141.61 143.52-63.41 63.41ZM111.87-434.5v-90.76h405.26v90.76H111.87Zm0-202.87v-90.76h523.35v90.76H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-220.78v-105.44H628.7v105.44H100.78Zm684.92-42.83L573.83-480 785.7-696.39l73.52 74.09L720.87-480l138.35 142.87-73.52 73.52ZM100.78-427v-105.44h412.44V-427H100.78Zm0-206.78v-105.44H628.7v105.44H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-206v-125h534v125H86Zm701-45L566-480l221-229 87 88-134 141 134 142-87 87ZM86-417v-125h422v125H86Zm0-212v-125h534v125H86Z" ],
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
