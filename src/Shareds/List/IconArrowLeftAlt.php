<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowLeftAlt
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M395-276 191-480l204-204 20 20-170 170h524v28H245l170 170-20 20Z" ],
			200 => [ "0 -960 960 960", "M396.15-267.69 183.85-480l212.3-212.31 28.31 28.77L260.92-500h515.23v40H260.92l163.54 163.54-28.31 28.77Z" ],
			300 => [ "0 -960 960 960", "M398.08-253.85 171.92-480l226.16-226.15 42.15 43.38L287.46-510h500.62v60H287.46l152.77 152.77-42.15 43.38Z" ],
			400 => [ "0 -960 960 960", "M400-240 160-480l240-240 56 58-142 142h486v80H314l142 142-56 58Z" ],
			500 => [ "0 -960 960 960", "M401.2-232.35 153.3-480l247.9-247.65 63.65 65.17L327.87-525.5H806.7v91H327.87l136.98 136.98-63.65 65.17Z" ],
			600 => [ "0 -960 960 960", "M402.83-221.91 144.17-480l258.66-258.09 74.08 74.96L346.78-533h469.05v106H346.78l130.13 130.13-74.08 74.96Z" ],
			700 => [ "0 -960 960 960", "M405-208 132-480l273-272 88 88-121 121h456v126H372l121 121-88 88Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowLeftAlt" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
