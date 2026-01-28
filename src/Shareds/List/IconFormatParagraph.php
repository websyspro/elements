<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFormatParagraph
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M430-216v-236h-10q-62 0-105-43t-43-105q0-62 43-105t105-43h226v28h-80v504h-28v-504h-80v504h-28Z" ],
			200 => [ "0 -960 960 960", "M413.85-203.08V-440h-7.7q-66.84 0-113.42-46.58-46.58-46.57-46.58-113.42t46.58-113.42Q339.31-760 406.15-760h256.93v40h-80v516.92h-40V-720h-89.23v516.92h-40Z" ],
			300 => [ "0 -960 960 960", "M386.93-181.54V-420h-3.85q-74.92 0-127.46-52.54-52.54-52.54-52.54-127.46 0-74.92 52.54-127.46Q308.16-780 383.08-780h308.46v60h-80v538.46h-60V-720H446.92v538.46h-59.99Z" ],
			400 => [ "0 -960 960 960", "M360-160v-240q-83 0-141.5-58.5T160-600q0-83 58.5-141.5T360-800h360v80h-80v560h-80v-560H440v560h-80Z" ],
			500 => [ "0 -960 960 960", "M353.78-154.5v-240.24q-83.48-2.15-141.74-61.73-58.26-59.57-58.26-143.53 0-85.28 60.11-145.39Q274-805.5 359.28-805.5h366.94v91h-80v560h-91v-560H444.78v560h-91Z" ],
			600 => [ "0 -960 960 960", "M345.3-147v-240.56q-84.13-5.09-142.06-66.14Q145.3-514.74 145.3-600q0-88.4 62.31-150.7Q269.91-813 358.3-813h376.4v106h-80v560h-106v-560h-97.4v560h-106Z" ],
			700 => [ "0 -960 960 960", "M334-137v-241q-85-9-142.5-72T134-600q0-92.54 65.23-157.77T357-823h389v126h-80v560H540v-560h-80v560H334Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFormatParagraph" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
