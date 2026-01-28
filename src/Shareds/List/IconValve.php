<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconValve
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-660v-120H306v-28h348v28H494v120h-28ZM186-152v-268h28v40h172v-172h-40v-28h268v28h-40v172h172v-40h28v268h-28v-40H214v40h-28Zm28-68h532v-132H546v-200H414v200H214v132Zm266 0Z" ],
			200 => [ "0 -960 960 960", "M460-655.38v-120H300v-40h360v40H500v120h-40ZM180-144.62v-280h40v40h160v-160h-40v-40h280v40h-40v160h160v-40h40v280h-40v-40H220v40h-40Zm40-80h520v-120H540v-200H420v200H220v120Zm260 0Z" ],
			300 => [ "0 -960 960 960", "M450-647.69v-120H290v-60h380v60H510v120h-60ZM170-132.31v-300h60v40h140v-140h-40v-60h300v60h-40v140h140v-40h60v300h-60v-40H230v40h-60Zm60-100h500v-100H530v-200H430v200H230v100Zm250 0Z" ],
			400 => [ "0 -960 960 960", "M440-640v-120H280v-80h400v80H520v120h-80ZM160-120v-320h80v40h120v-120h-40v-80h320v80h-40v120h120v-40h80v320h-80v-40H240v40h-80Zm80-120h480v-80H520v-200h-80v200H240v80Zm240 0Z" ],
			500 => [ "0 -960 960 960", "M434.5-641.91v-120h-160v-91h411v91h-160v120h-91Zm-287.41 542v-342h91v40h109v-109h-40v-91h345.82v91h-40v109h109v-40h91v342h-91v-40H238.09v40h-91Zm91-131h483.82v-80h-200v-200h-83.82v200h-200v80Zm241.91 0Z" ],
			600 => [ "0 -960 960 960", "M427-644.52v-120H267v-106h426v106H533v120H427Zm-297.52 572v-372h106v40h94v-94h-40v-106h381.04v106h-40v94h94v-40h106v372h-106v-40H235.48v40h-106Zm106-146h489.04v-80h-200v-200h-89.04v200h-200v80Zm244.52 0Z" ],
			700 => [ "0 -960 960 960", "M417-648v-120H257v-126h446v126H543v120H417ZM106-36v-412h126v40h74v-74h-40v-126h428v126h-40v74h74v-40h126v412H728v-40H232v40H106Zm126-166h496v-80H528v-200h-96v200H232v80Zm248 0Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconValve" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
