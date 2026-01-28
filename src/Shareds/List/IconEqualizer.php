<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconEqualizer
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-212v-206h108v206H212Zm214 0v-536h108v536H426Zm214 0v-346h108v346H640Z" ],
			200 => [ "0 -960 960 960", "M200-200v-232.31h120V-200H200Zm220 0v-560h120v560H420Zm220 0v-367.69h120V-200H640Z" ],
			300 => [ "0 -960 960 960", "M180-180v-276.15h140V-180H180Zm230 0v-600h140v600H410Zm230 0v-403.84h140V-180H640Z" ],
			400 => [ "0 -960 960 960", "M160-160v-320h160v320H160Zm240 0v-640h160v640H400Zm240 0v-440h160v440H640Z" ],
			500 => [ "0 -960 960 960", "M151.87-151.87v-331.48h167.41v331.48H151.87Zm244.54 0v-656.26h167.18v656.26H396.41Zm244.31 0v-456.26h167.41v456.26H640.72Z" ],
			600 => [ "0 -960 960 960", "M140.78-140.78v-347.13H318.3v347.13H140.78Zm250.74 0v-678.44h176.96v678.44H391.52Zm250.18 0v-478.44h177.52v478.44H641.7Z" ],
			700 => [ "0 -960 960 960", "M126-126v-368h191v368H126Zm259 0v-708h190v708H385Zm258 0v-508h191v508H643Z" ],
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
