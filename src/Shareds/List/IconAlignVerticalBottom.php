<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignVerticalBottom
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-158v-28h696v28H132Zm184-138v-507h70v507h-70Zm258 0v-267h70v267h-70Z" ],
			200 => [ "0 -960 960 960", "M120-140v-40h720v40H120Zm187.69-143.08v-537.69h81.54v537.69h-81.54Zm263.08 0v-297.69h81.54v297.69h-81.54Z" ],
			300 => [ "0 -960 960 960", "M100-110v-60h760v60H100Zm193.85-151.54v-588.84h100.76v588.84H293.85Zm271.54 0v-348.84h100.76v348.84H565.39Z" ],
			400 => [ "0 -960 960 960", "M80-80v-80h800v80H80Zm200-160v-640h120v640H280Zm280 0v-400h120v400H560Z" ],
			500 => [ "0 -960 960 960", "M71.87-71.87v-91h816.26v91H71.87Zm200.72-171v-645.26h131v645.26h-131Zm283.82 0v-405.26h131v405.26h-131Z" ],
			600 => [ "0 -960 960 960", "M60.78-60.78v-106h838.44v106H60.78Zm201.7-186v-652.44h146v652.44h-146Zm289.04 0v-412.44h146v412.44h-146Z" ],
			700 => [ "0 -960 960 960", "M46-46v-126h868v126H46Zm203-206v-662h166v662H249Zm296 0v-422h166v422H545Z" ],
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
