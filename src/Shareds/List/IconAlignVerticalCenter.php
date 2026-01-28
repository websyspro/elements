<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAlignVerticalCenter
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M311-172v-294H132v-28h179v-294h70v294h198v-174h70v174h179v28H649v174h-70v-174H381v294h-70Z" ],
			200 => [ "0 -960 960 960", "M303.85-160v-300H120v-40h183.85v-300h81.53v300h189.24v-180h81.53v180H840v40H656.15v180h-81.53v-180H385.38v300h-81.53Z" ],
			300 => [ "0 -960 960 960", "M291.92-140v-310H100v-60h191.92v-310h100.77v310h174.62v-190h100.77v190H860v60H668.08v190H567.31v-190H392.69v310H291.92Z" ],
			400 => [ "0 -960 960 960", "M280-120v-320H80v-80h200v-320h120v320h160v-200h120v200h200v80H680v200H560v-200H400v320H280Z" ],
			500 => [ "0 -960 960 960", "M272.59-111.87V-434.5H71.87v-91h200.72v-322.63h131v322.63h152.82v-202.63h131v202.63h200.72v91H687.41v202.63h-131V-434.5H403.59v322.63h-131Z" ],
			600 => [ "0 -960 960 960", "M262.48-100.78V-427H60.78v-106h201.7v-326.22h146V-533h143.04v-206.22h146V-533h201.7v106h-201.7v206.22h-146V-427H408.48v326.22h-146Z" ],
			700 => [ "0 -960 960 960", "M249-86v-331H46v-126h203v-331h166v331h130v-211h166v211h203v126H711v211H545v-211H415v331H249Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAlignVerticalCenter" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
