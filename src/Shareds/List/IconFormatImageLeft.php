<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFormatImageLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-319v-322h322v322H172Zm28-28h266v-266H200v266Zm-28-413v-28h616v28H172Zm422 147v-28h194v28H594Zm0 147v-28h194v28H594Zm0 147v-28h194v28H594ZM172-172v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-310v-340h340v340H160Zm40-40h260v-260H200v260Zm-40-410v-40h640v40H160Zm435.38 150v-40H800v40H595.38Zm0 150v-40H800v40H595.38Zm0 150v-40H800v40H595.38ZM160-160v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-295v-370h370v370H140Zm60-60h250v-250H200v250Zm-60-405v-60h680v60H140Zm457.69 155v-60H820v60H597.69Zm0 155v-60H820v60H597.69Zm0 155v-60H820v60H597.69ZM140-140v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-280v-400h400v400H120Zm80-80h240v-240H200v240Zm-80-400v-80h720v80H120Zm480 160v-80h240v80H600Zm0 160v-80h240v80H600Zm0 160v-80h240v80H600ZM120-120v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M112.11-273.78v-412.44h412.43v412.44H112.11Zm91-88.61h230.43v-235.22H203.11v235.22Zm-91.24-397.13v-88.61h736.26v88.61H111.87Zm492.67 161.91v-88.61h243.59v88.61H604.54Zm0 161.91v-88.6h243.59v88.6H604.54Zm0 161.92v-88.61h243.59v88.61H604.54ZM111.87-111.87v-88.61h736.26v88.61H111.87Z" ],
			600 => [ "0 -960 960 960", "M101.35-265.3v-429.4h429.39v429.4H101.35Zm106-100.35h217.39v-228.7H207.35v228.7ZM100.78-758.87v-100.35h758.44v100.35H100.78Zm509.96 164.52V-694.7h248.48v100.35H610.74Zm0 164.52v-100.34h248.48v100.34H610.74Zm0 164.53v-100.35h248.48v100.35H610.74ZM100.78-100.78v-100.35h758.44v100.35H100.78Z" ],
			700 => [ "0 -960 960 960", "M87-254v-452h452v452H87Zm126-116h200v-220H213v220ZM86-758v-116h788v116H86Zm533 168v-116h255v116H619Zm0 168v-116h255v116H619Zm0 168v-116h255v116H619ZM86-86v-116h788v116H86Z" ],
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
