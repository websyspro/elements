<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconKeyboardOptionKey
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M606-226 329-706H172v-28h173l277 480h166v28H606Zm20-480v-28h162v28H626Z" ],
			200 => [ "0 -960 960 960", "m602.54-220-277-480H160v-40h188.46l277 480H800v40H602.54ZM620-700v-40h180v40H620Z" ],
			300 => [ "0 -960 960 960", "m596.77-210-277-480H140v-60h214.23l277 480H820v60H596.77ZM610-690v-60h210v60H610Z" ],
			400 => [ "0 -960 960 960", "M591-200 314-680H120v-80h240l277 480h203v80H591Zm9-480v-80h240v80H600Z" ],
			500 => [ "0 -960 960 960", "m587.89-194.5-277-480H112.11v-91h251l277 480h208.02v91H587.89Zm6.61-480v-91h253.63v91H594.5Z" ],
			600 => [ "0 -960 960 960", "m583.65-187-277-480h-205.3v-106h266l277 480h214.87v106H583.65ZM587-667v-106h272.22v106H587Z" ],
			700 => [ "0 -960 960 960", "M578-177 301-657H87v-126h286l277 480h224v126H578Zm-1-480v-126h297v126H577Z" ],
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
