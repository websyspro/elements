<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLaptopChromebook
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M52-248v-28h80v-484h696v484h80v28H52Zm348-28h160v-28H400v28Zm-240-56h640v-400H160v400Zm320-200Z" ],
			200 => [ "0 -960 960 960", "M40-227.69v-40h80v-510.77h720v510.77h80v40H40Zm360-40h160v-30.77H400v30.77Zm-240-70.77h640v-400H160v400Zm320-200Z" ],
			300 => [ "0 -960 960 960", "M20-193.85v-60h80v-555.38h760v555.38h80v60H20Zm380-60h160v-35.38H400v35.38Zm-240-95.38h640v-400H160v400Zm320-200Z" ],
			400 => [ "0 -960 960 960", "M0-160v-80h80v-600h800v600h80v80H0Zm400-80h160v-40H400v40ZM160-360h640v-400H160v400Zm320-200Z" ],
			500 => [ "0 -960 960 960", "M0-152.59v-83.82h76.41v-611.72h807.18v611.72H960v83.82H0Zm400-83.82h160v-40H400v40ZM167.41-360h625.18v-397.13H167.41V-360ZM480-558.57Z" ],
			600 => [ "0 -960 960 960", "M0-142.48v-89.04h71.52v-627.7h816.96v627.7H960v89.04H0Zm400-89.04h160v-40H400v40ZM177.52-360h604.96v-393.22H177.52V-360ZM480-556.61Z" ],
			700 => [ "0 -960 960 960", "M0-129v-96h65v-649h830v649h65v96H0Zm400-96h160v-40H400v40ZM191-360h578v-388H191v388Zm289-194Z" ],
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
