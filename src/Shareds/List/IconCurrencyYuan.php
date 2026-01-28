<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconCurrencyYuan
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-172v-254H266v-28h193L247-788h34l199 315 199-315h34L501-454h193v28H494v254h-28Z" ],
			200 => [ "0 -960 960 960", "M460-160v-260H260v-40h192.08L236.15-800h48.08L480-490.31 675.77-800h48.08L507.92-460H700v40H500v260h-40Z" ],
			300 => [ "0 -960 960 960", "M450-140v-270H250v-60h190.54L218.08-820h71.53L480-519.15 670.39-820h71.53L519.46-470H710v60H510v270h-60Z" ],
			400 => [ "0 -960 960 960", "M440-120v-280H240v-80h189L200-840h95l185 292 185-292h95L531-480h189v80H520v280h-80Z" ],
			500 => [ "0 -960 960 960", "M434.5-111.87V-394.5h-200v-91h184.46L188.52-848.13h108.15L480-558.28l183.33-289.85h108.15L541.04-485.5H725.5v91h-200v282.63h-91Z" ],
			600 => [ "0 -960 960 960", "M427-100.78V-387H227v-106h178.26L172.87-859.22h126.09L480-572.31l181.04-286.91h126.09L554.74-493H733v106H533v286.22H427Z" ],
			700 => [ "0 -960 960 960", "M417-86v-291H217v-126h170L152-874h150l178 283 178-283h150L573-503h170v126H543v291H417Z" ],
		};
	}

	public static function create(
		int $size,
		int $weight = 300,
		string $fill = "#000"
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->add( Path::create(
				$path
			))
			->props(
				[
					"xmlns" => "http://www.w3.org/2000/svg",
					"viewBox" => "{$viewBox}",
					"height" => "{$size}",
					"width" => "{$size}",
					"fill" => "{$fill}"
				]
			);
	}
}
