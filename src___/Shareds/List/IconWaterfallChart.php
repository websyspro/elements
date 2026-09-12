<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconWaterfallChart
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-212v-173h64v173h-64Zm183-218v-137h65v137h-65Zm184-182v-136h65v136h-65Zm184 400v-536h65v536h-65Z" ],
			200 => [ "0 -960 960 960", "M160-200v-188.46h76.92V-200H160Zm186.92-223.08v-151.54h77.7v151.54h-77.7Zm187.7-186.15V-760h77.69v150.77h-77.69ZM722.31-200v-560H800v560h-77.69Z" ],
			300 => [ "0 -960 960 960", "M140-180v-214.23h98.46V-180H140Zm193.46-231.54v-175.77h98.85v175.77h-98.85Zm193.85-193.08V-780h98.84v175.38h-98.84ZM721.15-180v-600H820v600h-98.85Z" ],
			400 => [ "0 -960 960 960", "M120-160v-240h120v240H120Zm200-240v-200h120v200H320Zm200-200v-200h120v200H520Zm200 440v-640h120v640H720Z" ],
			500 => [ "0 -960 960 960", "M111.87-151.87V-404.3h131v252.43h-131Zm201.67-242.39v-211.96h131v211.96h-131Zm201.68-201.91v-211.96h131.24v211.96H515.22Zm201.67 444.3v-656.26h131.24v656.26H716.89Z" ],
			600 => [ "0 -960 960 960", "M100.78-140.78v-269.39h146v269.39h-146Zm203.96-245.65V-614.7h146v228.27h-146ZM508.7-590.96v-228.26h146.56v228.26H508.7Zm203.95 450.18v-678.44h146.57v678.44H712.65Z" ],
			700 => [ "0 -960 960 960", "M86-126v-292h166v292H86Zm207-250v-250h166v250H293Zm207-208v-250h167v250H500Zm207 458v-708h167v708H707Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconWaterfallChart" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
