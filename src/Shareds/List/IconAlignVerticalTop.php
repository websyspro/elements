<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAlignVerticalTop
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M316-158v-507h70v507h-70Zm258-240v-267h70v267h-70ZM132-775v-28h696v28H132Z" ],
			200 => [ "0 -960 960 960", "M307.69-140v-537.69h81.54V-140h-81.54Zm263.08-240v-297.69h81.54V-380h-81.54ZM120-780.77v-40h720v40H120Z" ],
			300 => [ "0 -960 960 960", "M293.85-110v-588.84h100.76V-110H293.85Zm271.54-240v-348.84h100.76V-350H565.39ZM100-790.38v-60h760v60H100Z" ],
			400 => [ "0 -960 960 960", "M280-80v-640h120v640H280Zm280-240v-400h120v400H560ZM80-800v-80h800v80H80Z" ],
			500 => [ "0 -960 960 960", "M272.59-71.87v-645.26h131v645.26h-131Zm283.82-240v-405.26h131v405.26h-131ZM71.87-797.13v-91h816.26v91H71.87Z" ],
			600 => [ "0 -960 960 960", "M262.48-60.78v-652.44h146v652.44h-146Zm289.04-240v-412.44h146v412.44h-146ZM60.78-793.22v-106h838.44v106H60.78Z" ],
			700 => [ "0 -960 960 960", "M249-46v-662h166v662H249Zm296-240v-422h166v422H545ZM46-788v-126h868v126H46Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAlignVerticalTop" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
