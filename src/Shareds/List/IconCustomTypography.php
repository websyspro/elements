<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconCustomTypography
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-132v-188h28v80h294v28H494v80h-28Zm-294-80v-28h194v28H172Zm138-168h30l42-120h196l42 120h30L490-828h-20L310-380Zm82-148 86-242h4l86 242H392Z" ],
			200 => [ "0 -960 960 960", "M460-120v-200h40v80h300v40H500v80h-40Zm-300-80v-40h204.62v40H160Zm137.77-184.62H340l42.46-120.69h195.31L620-384.62h42.23L497.62-840h-35.24L297.77-384.62Zm97.92-158.15L478-774.85h4l82.31 232.08H395.69Z" ],
			300 => [ "0 -960 960 960", "M450-100v-220h60v80h310v60H510v80h-60Zm-310-80v-60h222.31v60H140Zm137.39-212.31H340l43.23-121.84h194.15L620-392.31h62.61L510.31-860h-60.62l-172.3 467.69Zm124.46-175.07L478-782.92h4l76.15 215.54h-156.3Z" ],
			400 => [ "0 -960 960 960", "M440-80v-240h80v80h320v80H520v80h-80Zm-320-80v-80h240v80H120Zm137-240h83l44-123h193l43 123h83L523-880h-86L257-400Zm151-192 70-199h4l70 199H408Z" ],
			500 => [ "0 -960 960 960", "M436.41-71.87v-247.41h87.42v80h324.3v87.41h-324.3v80h-87.42Zm-324.54-80v-87.41h244.54v87.41H111.87Zm141.3-256.26h87.31L384-528.74h192.28l42.29 120.61h88.26l-181.2-480h-91.26l-181.2 480Zm155.31-192.72L478-798.17h3.52l69.28 197.32H408.48Z" ],
			600 => [ "0 -960 960 960", "M431.52-60.78V-318.3h97.52v80h330.18v97.52H529.04v80h-97.52Zm-330.74-80v-97.52h250.74v97.52H100.78Zm147.18-278.44h93.17L384-536.57h191.3l41.31 117.35h95.43l-182.82-480h-98.44l-182.82 480Zm161.17-193.69L478-807.96h2.87l68.3 195.05H409.13Z" ],
			700 => [ "0 -960 960 960", "M425-46v-271h111v80h338v111H536v80H425ZM86-126v-111h259v111H86Zm155-308h101l42-113h190l40 113h105L534-914H426L241-434Zm169-195 68-192h2l67 192H410Z" ],
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
