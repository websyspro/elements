<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconNetworkCell
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m132-132 696-696v696H132Zm537-28h131v-600L669-629v469Z" ],
			200 => [ "0 -960 960 960", "m120-120 720-720v720H120Zm551.54-40H800v-582.92L671.54-614.46V-160Z" ],
			300 => [ "0 -960 960 960", "m100-100 760-760v760H100Zm575.77-60H800v-554.46L675.77-590.23V-160Z" ],
			400 => [ "0 -960 960 960", "m80-80 800-800v800H80Zm600-80h120v-526L680-566v406Z" ],
			500 => [ "0 -960 960 960", "m71.87-71.87 816.26-816.26v816.26H71.87Zm604.3-91h120.96v-504.96L676.17-546.87v384Z" ],
			600 => [ "0 -960 960 960", "m60.78-60.78 838.44-838.44v838.44H60.78Zm610.18-106h122.26v-476.26L670.96-520.78v354Z" ],
			700 => [ "0 -960 960 960", "m46-46 868-868v868H46Zm618-126h124v-438L664-486v314Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconNetworkCell" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
