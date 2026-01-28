<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAddColumnRight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M160-760v560h269v-560H160Zm-28 588v-616h616v114h-28v-86H457v560h263v-86h28v114H132Zm325-308Zm-28 0h28-28Zm0 0Zm291 94v-80h-80v-28h80v-80h28v80h80v28h-80v80h-28Z" ],
			200 => [ "0 -960 960 960", "M160-760v560h262.31v-560H160Zm-40 600v-640h640v124.62h-40V-760H462.31v560H720v-84.62h40V-160H120Zm342.31-320Zm-40 0h40-40Zm0 0ZM720-380v-80h-80v-40h80v-80h40v80h80v40h-80v80h-40Z" ],
			300 => [ "0 -960 960 960", "M160-760v560h251.15v-560H160Zm-60 620v-680h680v142.31h-60V-760H471.15v560H720v-82.31h60V-140H100Zm371.15-340Zm-60 0h60-60Zm0 0ZM720-370v-80h-80v-60h80v-80h60v80h80v60h-80v80h-60Z" ],
			400 => [ "0 -960 960 960", "M160-760v560h240v-560H160ZM80-120v-720h720v160h-80v-80H480v560h240v-80h80v160H80Zm400-360Zm-80 0h80-80Zm0 0Zm320 120v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M162.63-757.37v554.74h231.63v-554.74H162.63Zm-90.76 645.5v-736.26h736.26v167.41h-90.76v-76.65H485.02v554.74h232.35v-76.89h90.76v167.65H71.87ZM485.02-480Zm-90.76 0h90.76-90.76Zm0 0Zm323.11 125.26v-80h-80v-90.76h80v-80h90.76v80h80v90.76h-80v80h-90.76Z" ],
			600 => [ "0 -960 960 960", "M166.22-753.78v547.56h220.21v-547.56H166.22Zm-105.44 653v-758.44h758.44v177.52H713.78v-72.08H491.87v547.56h221.91v-72.65h105.44v178.09H60.78ZM491.87-480Zm-105.44 0h105.44-105.44Zm0 0Zm327.35 132.44v-80h-80V-533h80v-80h105.44v80h80v105.44h-80v80H713.78Z" ],
			700 => [ "0 -960 960 960", "M171-749v538h205v-538H171ZM46-86v-788h788v191H709v-66H501v538h208v-67h125v192H46Zm455-394Zm-125 0h125-125Zm0 0Zm333 142v-80h-80v-125h80v-80h125v80h80v125h-80v80H709Z" ],
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
