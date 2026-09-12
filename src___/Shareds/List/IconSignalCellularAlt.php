<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSignalCellularAlt
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M252-212v-136h48v136h-48Zm230 0v-336h48v336h-48Zm218 0v-536h48v536h-48Z" ],
			200 => [ "0 -960 960 960", "M240-200v-160h64.62v160H240Zm232.31 0v-360h64.61v360h-64.61Zm223.07 0v-560H760v560h-64.62Z" ],
			300 => [ "0 -960 960 960", "M220-180v-200h92.31v200H220Zm236.16 0v-400h92.3v400h-92.3Zm231.53 0v-600H780v600h-92.31Z" ],
			400 => [ "0 -960 960 960", "M200-160v-240h120v240H200Zm240 0v-440h120v440H440Zm240 0v-640h120v640H680Z" ],
			500 => [ "0 -960 960 960", "M194.26-151.87v-232.35h131v232.35h-131Zm241.44 0v-432.35h131v432.35h-131Zm241.43 0v-656.26h131v656.26h-131Z" ],
			600 => [ "0 -960 960 960", "M186.43-140.78v-221.91h146.01v221.91H186.43Zm243.4 0v-421.91h146v421.91h-146Zm243.39 0v-678.44h146v678.44h-146Z" ],
			700 => [ "0 -960 960 960", "M176-126v-208h166v208H176Zm246 0v-408h166v408H422Zm246 0v-708h166v708H668Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSignalCellularAlt" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
