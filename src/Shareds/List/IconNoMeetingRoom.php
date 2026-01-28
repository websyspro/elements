<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconNoMeetingRoom
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m656-416-28-28v-276h-80v196l-28-28v-208H314l-28-28h262v40h108v332Zm120 272L548-372v200H172v-28h80v-468L144-776l20-20 632 632-20 20Zm-496-56h240v-200L280-640v440Zm137-456Zm-17 136Z" ],
			200 => [ "0 -960 960 960", "m680-392.46-40-40V-720h-80v207.54l-40-40V-760H314l-40-40h286v40h120v367.54Zm99.69 268.77L560-343.38V-160H160v-40h80v-463.38L123.69-779.69 152-808l656 656-28.31 28.31ZM280-200h240v-183.38l-240-240V-200Zm137-456.23Zm-17 152.85Z" ],
			300 => [ "0 -960 960 960", "m720-353.23-60-60V-720h-80v226.77l-60-60V-760H314l-60-60h326v40h140v426.77Zm65.85 263.38L580-295.7V-140H140v-60h80v-455.69L89.85-785.85 132-828l696 696-42.15 42.15ZM280-200h240v-155.69l-240-240V-200Zm137-456.62Zm-17 180.93Z" ],
			400 => [ "0 -960 960 960", "m760-314-80-80v-326h-80v246l-80-80v-206H314l-80-80h366v40h160v486Zm32 258L600-248v128H120v-80h80v-448L56-792l56-56 736 736-56 56ZM280-200h240v-128L280-568v368Zm137-457Zm-17 209Z" ],
			500 => [ "0 -960 960 960", "m775.07-302.52-91-91v-323.61h-80v243.61l-91-91v-192.61H320.46l-91-91h374.61v40h171v505.61Zm25.78 256.8L604.07-242.5v130.63H101.35v-91h83.58v-458.76L45.72-800.85l58.63-58.63 755.13 755.13-58.63 58.63ZM275.93-202.87h237.14V-333.5L275.93-570.63v367.76Zm140.83-457.96ZM394.5-452.07Z" ],
			600 => [ "0 -960 960 960", "m795.61-286.87-106-106v-320.35h-80v240.35l-106-106v-174.35H329.26l-106-106h386.35v40h186v532.35Zm17.3 255.18L609.61-235v134.22H75.91v-106h88.48v-473.44L31.69-812.91l62.22-62.22L875.13-93.91l-62.22 62.22ZM270.39-206.78h233.22V-341L270.39-574.22v367.44Zm146.04-459.26ZM387-457.61Z" ],
			700 => [ "0 -960 960 960", "M823-266 697-392v-316h-80v236L491-598v-150H341L215-874h402v40h206v568Zm6 253L617-225v139H42v-126h95v-493L13-829l67-67L896-80l-67 67ZM263-212h228v-139L263-579v367Zm153-461Zm-39 208Z" ],
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
