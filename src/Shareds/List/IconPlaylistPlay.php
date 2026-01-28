<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconPlaylistPlay
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-332v-28h269v28H172Zm0-160v-28h426v28H172Zm0-160v-28h426v28H172Zm491 480v-213l166 107-166 106Z" ],
			200 => [ "0 -960 960 960", "M160-329.23v-40h280.77v40H160Zm0-160v-40h438.46v40H160Zm0-160v-40h438.46v40H160ZM657.69-160v-237.69l183.08 119.23L657.69-160Z" ],
			300 => [ "0 -960 960 960", "M140-324.62v-59.99h300.38v59.99H140Zm0-160v-59.99h459.23v59.99H140Zm0-160v-59.99h459.23v59.99H140ZM648.85-140v-278.84l211.53 139.61L648.85-140Z" ],
			400 => [ "0 -960 960 960", "M120-320v-80h320v80H120Zm0-160v-80h480v80H120Zm0-160v-80h480v80H120Zm520 520v-320l240 160-240 160Z" ],
			500 => [ "0 -960 960 960", "M111.87-299.43v-90.77H434.5v90.77H111.87Zm0-167.18v-90.76h480.96v90.76H111.87Zm0-167.17v-90.76h480.96v90.76H111.87Zm520.96 521.91v-328.37l255.3 164.07-255.3 164.3Z" ],
			600 => [ "0 -960 960 960", "M100.78-271.39v-105.43H427v105.43H100.78Zm0-176.96v-105.43h482.26v105.43H100.78Zm0-176.95v-105.44h482.26v105.44H100.78Zm522.26 524.52v-339.79l276.18 169.61-276.18 170.18Z" ],
			700 => [ "0 -960 960 960", "M86-234v-125h331v125H86Zm0-190v-125h484v125H86Zm0-190v-125h484v125H86ZM610-86v-355l304 177L610-86Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconPlaylistPlay" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
