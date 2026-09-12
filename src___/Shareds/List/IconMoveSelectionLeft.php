<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconMoveSelectionLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-290v-380h380v380H132Zm28-28h324v-324H160v324Zm470-312v-40h40v40h-40Zm0 340v-40h40v40h-40Zm158-340v-40h40v40h-40Zm0 170v-40h40v40h-40Zm0 170v-40h40v40h-40ZM322-480Z" ],
			200 => [ "0 -960 960 960", "M120-278.46v-403.08h403.08v403.08H120Zm40-40h323.08v-323.08H160v323.08Zm472.31-313.85v-49.23h49.23v49.23h-49.23Zm0 353.85v-49.23h49.23v49.23h-49.23Zm158.46-353.85v-49.23H840v49.23h-49.23Zm0 176.93v-49.24H840v49.24h-49.23Zm0 176.92v-49.23H840v49.23h-49.23ZM321.54-480Z" ],
			300 => [ "0 -960 960 960", "M100-259.23v-441.54h441.54v441.54H100Zm60-60h321.54v-321.54H160v321.54Zm476.15-316.92v-64.62h64.62v64.62h-64.62Zm0 376.92v-64.62h64.62v64.62h-64.62Zm159.23-376.92v-64.62H860v64.62h-64.62Zm0 188.46v-64.62H860v64.62h-64.62Zm0 188.46v-64.62H860v64.62h-64.62ZM320.77-480Z" ],
			400 => [ "0 -960 960 960", "M80-240v-480h480v480H80Zm80-80h320v-320H160v320Zm480-320v-80h80v80h-80Zm0 400v-80h80v80h-80Zm160-400v-80h80v80h-80Zm0 200v-80h80v80h-80Zm0 200v-80h80v80h-80ZM320-480Z" ],
			500 => [ "0 -960 960 960", "M71.87-233.54v-493.39h493.39v493.39H71.87Zm91-91h311.39v-311.39H162.87v311.39ZM635.7-635.93v-91h91v91h-91Zm0 402.39v-91h91v91h-91Zm161.43-402.39v-91h91v91h-91Zm0 201.19v-91h91v91h-91Zm0 201.2v-91h91v91h-91Zm-478.56-246.7Z" ],
			600 => [ "0 -960 960 960", "M60.78-224.74v-511.65h511.66v511.65H60.78Zm106-106h299.65v-299.65H166.78v299.65Zm463.05-299.65v-106h106v106h-106Zm0 405.65v-106h106v106h-106Zm163.39-405.65v-106h106v106h-106Zm0 202.83v-106.01h106v106.01h-106Zm0 202.82v-106h106v106h-106ZM316.61-480.57Z" ],
			700 => [ "0 -960 960 960", "M46-213v-536h536v536H46Zm126-126h284v-284H172v284Zm450-284v-126h126v126H622Zm0 410v-126h126v126H622Zm166-410v-126h126v126H788Zm0 205v-126h126v126H788Zm0 205v-126h126v126H788ZM314-481Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconMoveSelectionLeft" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
