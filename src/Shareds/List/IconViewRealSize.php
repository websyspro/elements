<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconViewRealSize
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M323-332v-268h-71v-28h99v296h-28Zm141 0v-28h28v28h-28Zm176 0v-268h-70v-28h98v296h-28ZM464-466v-28h28v28h-28Z" ],
			200 => [ "0 -960 960 960", "M313.08-320v-280H240v-40h113.08v320h-40Zm145.38 0v-40h40v40h-40ZM640-320v-280h-72.31v-40H680v320h-40ZM458.46-460v-40h40v40h-40Z" ],
			300 => [ "0 -960 960 960", "M296.54-300v-300H220v-60h136.54v360h-60Zm152.69 0v-60h60v60h-60ZM640-300v-300h-76.15v-60H700v360h-60ZM449.23-450v-60h60v60h-60Z" ],
			400 => [ "0 -960 960 960", "M280-280v-320h-80v-80h160v400h-80Zm160 0v-80h80v80h-80Zm200 0v-320h-80v-80h160v400h-80ZM440-440v-80h80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M272.59-271.87v-325.26h-80.96v-91h171.96v416.26h-91Zm166.21 0v-91h91v91h-91Zm201.44 0v-325.26h-80.96v-91h171.96v416.26h-91ZM438.8-433.3v-91h91v91h-91Z" ],
			600 => [ "0 -960 960 960", "M262.48-260.78v-332.44h-82.26v-106h188.26v438.44h-106Zm174.69 0v-106h106.01v106H437.17Zm203.4 0v-332.44H558.3v-106h188.27v438.44h-106Zm-203.4-163.39v-106h106.01v106H437.17Z" ],
			700 => [ "0 -960 960 960", "M249-246v-342h-84v-126h210v468H249Zm186 0v-126h126v126H435Zm206 0v-342h-84v-126h210v468H641ZM435-412v-126h126v126H435Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconViewRealSize" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
