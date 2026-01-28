<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconWarehouse
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M160-200h132v-320h376v320h132v-426L480-754 160-626v426Zm-28 28v-473l348-139 348 139v473H640v-320H320v320H132Zm257 0v-56h56v56h-56Zm63-120v-56h56v56h-56Zm63 120v-56h56v56h-56ZM292-520h376-376Z" ],
			200 => [ "0 -960 960 960", "M160-200h120v-320h400v320h120v-426L480-754 160-626v426Zm-40 40v-493.08l360-143.84 360 143.84V-160H640v-320H320v320H120Zm262.31 0v-61.54h61.54V-160h-61.54Zm66.92-120v-61.54h61.54V-280h-61.54Zm66.92 120v-61.54h61.54V-160h-61.54ZM280-520h400-400Z" ],
			300 => [ "0 -960 960 960", "M160-200h100v-320h440v320h100v-426L480-754 160-626v426Zm-60 60v-526.54l380-151.92 380 151.92V-140H640v-320H320v320H100Zm271.15 0v-70.77h70.77V-140h-70.77Zm73.47-120v-70.77h70.76V-260h-70.76Zm73.46 120v-70.77h70.77V-140h-70.77ZM260-520h440-440Z" ],
			400 => [ "0 -960 960 960", "M160-200h80v-320h480v320h80v-426L480-754 160-626v426Zm-80 80v-560l400-160 400 160v560H640v-320H320v320H80Zm280 0v-80h80v80h-80Zm80-120v-80h80v80h-80Zm80 120v-80h80v80h-80ZM240-520h480-480Z" ],
			500 => [ "0 -960 960 960", "M163.59-203.59h72.82v-309h487.18v309h72.82v-419.78L480-749.93 163.59-623.37v419.78Zm-91 91v-572.43L480-847.89l407.41 162.87v572.43h-251v-312.82H323.59v312.82h-251Zm291 0v-80h80v80h-80Zm76.41-120v-80h80v80h-80Zm76.41 120v-80h80v80h-80Zm-280-400h487.18-487.18Z" ],
			600 => [ "0 -960 960 960", "M168.48-208.48h63.04v-294h496.96v294h63.04v-411.3L480-744.39 168.48-619.78v411.3Zm-106 106v-589.39L480-858.65l417.52 166.78v589.39h-266v-303.04H328.48v303.04h-266Zm306 0v-80h80v80h-80Zm71.52-120v-80h80v80h-80Zm71.52 120v-80h80v80h-80Zm-280-400h496.96-496.96Z" ],
			700 => [ "0 -960 960 960", "M175-215h50v-274h510v274h50v-400L480-737 175-615v400ZM49-89v-612l431-172 431 172v612H625v-290H335v290H49Zm326 0v-80h80v80h-80Zm65-120v-80h80v80h-80Zm65 120v-80h80v80h-80ZM225-489h510-510Z" ],
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
