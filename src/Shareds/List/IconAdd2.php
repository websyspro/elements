<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAdd2
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-172v-294H172v-28h294v-294h28v294h294v28H494v294h-28Z" ],
			200 => [ "0 -960 960 960", "M460-160v-300H160v-40h300v-300h40v300h300v40H500v300h-40Z" ],
			300 => [ "0 -960 960 960", "M450-140v-310H140v-60h310v-310h60v310h310v60H510v310h-60Z" ],
			400 => [ "0 -960 960 960", "M440-120v-320H120v-80h320v-320h80v320h320v80H520v320h-80Z" ],
			500 => [ "0 -960 960 960", "M434.5-111.87V-434.5H111.87v-91H434.5v-322.63h91v322.63h322.63v91H525.5v322.63h-91Z" ],
			600 => [ "0 -960 960 960", "M427-100.78V-427H100.78v-106H427v-326.22h106V-533h326.22v106H533v326.22H427Z" ],
			700 => [ "0 -960 960 960", "M417-86v-331H86v-126h331v-331h126v331h331v126H543v331H417Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAdd2" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
