<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconBorderStyle
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M316-172v-40h40v40h-40Zm144 0v-40h40v40h-40Zm144 0v-40h40v40h-40Zm144 0v-40h40v40h-40Zm0-144v-40h40v40h-40Zm0-144v-40h40v40h-40Zm0-144v-40h40v40h-40ZM172-172v-616h616v28H200v588h-28Z" ],
			200 => [ "0 -960 960 960", "M307.69-160v-49.23h49.23V-160h-49.23Zm147.69 0v-49.23h49.24V-160h-49.24Zm147.7 0v-49.23h49.23V-160h-49.23Zm147.69 0v-49.23H800V-160h-49.23Zm0-147.69v-49.23H800v49.23h-49.23Zm0-147.69v-49.24H800v49.24h-49.23Zm0-147.7v-49.23H800v49.23h-49.23ZM160-160v-640h640v40H200v600h-40Z" ],
			300 => [ "0 -960 960 960", "M293.85-140v-64.62h64.61V-140h-64.61Zm153.84 0v-64.62h64.62V-140h-64.62Zm153.85 0v-64.62h64.61V-140h-64.61Zm153.84 0v-64.62H820V-140h-64.62Zm0-153.85v-64.61H820v64.61h-64.62Zm0-153.84v-64.62H820v64.62h-64.62Zm0-153.85v-64.61H820v64.61h-64.62ZM140-140v-680h680v60H200v620h-60Z" ],
			400 => [ "0 -960 960 960", "M280-120v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm160 0v-80h80v80h-80Zm0-160v-80h80v80h-80Zm0-160v-80h80v80h-80Zm0-160v-80h80v80h-80ZM120-120v-720h720v80H200v640h-80Z" ],
			500 => [ "0 -960 960 960", "M273.3-111.87v-91h91v91h-91Zm161.2 0v-91h91v91h-91Zm161.43 0v-91h91v91h-91Zm161.2 0v-91h91v91h-91Zm0-161.43v-91h91v91h-91Zm0-161.2v-91h91v91h-91Zm0-161.43v-91h91v91h-91ZM111.87-111.87v-736.26h736.26v91H202.87v645.26h-91Z" ],
			600 => [ "0 -960 960 960", "M264.17-100.78v-106h106v106h-106Zm162.83 0v-106h106v106H427Zm163.39 0v-106h106v106h-106Zm162.83 0v-106h106v106h-106Zm0-163.39v-106h106v106h-106Zm0-162.83v-106h106v106h-106Zm0-163.39v-106h106v106h-106ZM100.78-100.78v-758.44h758.44v106H206.78v652.44h-106Z" ],
			700 => [ "0 -960 960 960", "M252-86v-126h126v126H252Zm165 0v-126h126v126H417Zm166 0v-126h126v126H583Zm165 0v-126h126v126H748Zm0-166v-126h126v126H748Zm0-165v-126h126v126H748Zm0-166v-126h126v126H748ZM86-86v-788h788v126H212v662H86Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconBorderStyle" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
