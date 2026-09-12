<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconCrop
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M706-66v-160H286q-26 0-43-17t-17-43v-420H66v-28h160v-160h28v608q0 12 10 22t22 10h608v28H734v160h-28Zm0-216v-392q0-12-10-22t-22-10H282v-28h392q26 0 43 17t17 43v392h-28Z" ],
			200 => [ "0 -960 960 960", "M700-60v-160H284.62q-27.62 0-46.12-18.5Q220-257 220-284.62V-700H60v-40h160v-160h40v615.38q0 9.24 7.69 16.93 7.69 7.69 16.93 7.69H900v40H740v160h-40Zm0-240v-375.38q0-9.24-7.69-16.93-7.69-7.69-16.93-7.69H300v-40h375.38q27.62 0 46.12 18.5Q740-703 740-675.38V-300h-40Z" ],
			300 => [ "0 -960 960 960", "M690-50v-160H282.31Q252-210 231-231q-21-21-21-51.31V-690H50v-60h160v-160h60v627.69q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85H910v60H750v160h-60Zm0-280v-347.69q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H330v-60h347.69Q708-750 729-729q21 21 21 51.31V-330h-60Z" ],
			400 => [ "0 -960 960 960", "M680-40v-160H280q-33 0-56.5-23.5T200-280v-400H40v-80h160v-160h80v640h640v80H760v160h-80Zm0-320v-320H360v-80h320q33 0 56.5 23.5T760-680v320h-80Z" ],
			500 => [ "0 -960 960 960", "M674.5-38.09V-194.5h-389q-37.78 0-64.39-26.61T194.5-285.5v-389H38.09v-91H194.5v-156.41h91v636.41h636.41v91H765.5v156.41h-91Zm0-327.41v-309h-309v-91h309q37.78 0 64.39 26.61t26.61 64.39v309h-91Z" ],
			600 => [ "0 -960 960 960", "M667-35.48V-187H293q-44.3 0-75.15-30.85Q187-248.7 187-293v-374H35.48v-106H187v-151.52h106V-293h631.52v106H773v151.52H667ZM667-373v-294H373v-106h294q44.3 0 75.15 30.85Q773-711.3 773-667v294H667Z" ],
			700 => [ "0 -960 960 960", "M657-32v-145H303q-53 0-89.5-36.5T177-303v-354H32v-126h145v-145h126v625h625v126H783v145H657Zm0-351v-274H383v-126h274q53 0 89.5 36.5T783-657v274H657Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconCrop" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
