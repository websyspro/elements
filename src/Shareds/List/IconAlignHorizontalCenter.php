<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAlignHorizontalCenter
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-132v-184H292v-70h174v-188H172v-70h294v-184h28v184h294v70H494v188h174v70H494v184h-28Z" ],
			200 => [ "0 -960 960 960", "M460-120v-187.69H280v-81.54h180v-181.54H160v-81.54h300V-840h40v187.69h300v81.54H500v181.54h180v81.54H500V-120h-40Z" ],
			300 => [ "0 -960 960 960", "M450-100v-193.85H260v-100.76h190v-170.78H140v-100.76h310V-860h60v193.85h310v100.76H510v170.78h190v100.76H510V-100h-60Z" ],
			400 => [ "0 -960 960 960", "M440-80v-200H240v-120h200v-160H120v-120h320v-200h80v200h320v120H520v160h200v120H520v200h-80Z" ],
			500 => [ "0 -960 960 960", "M434.5-71.87v-200.72H231.87v-131H434.5v-152.82H111.87v-131H434.5v-200.72h91v200.72h322.63v131H525.5v152.82h202.63v131H525.5v200.72h-91Z" ],
			600 => [ "0 -960 960 960", "M427-60.78v-201.7H220.78v-146H427v-143.04H100.78v-146H427v-201.7h106v201.7h326.22v146H533v143.04h206.22v146H533v201.7H427Z" ],
			700 => [ "0 -960 960 960", "M417-46v-203H206v-166h211v-130H86v-166h331v-203h126v203h331v166H543v130h211v166H543v203H417Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAlignHorizontalCenter" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
