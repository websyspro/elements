<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconCurrencyYen
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-172v-144H266v-28h200v-122H266v-28h184L263-788h34l183 289 183-289h34L510-494h184v28H494v122h200v28H494v144h-28Z" ],
			200 => [ "0 -960 960 960", "M460-160v-147.69H260v-40h200V-460H260v-40h179.15L248.46-800h48.08L480-510.31 663.46-800h48.08L520.85-500H700v40H500v112.31h200v40H500V-160h-40Z" ],
			300 => [ "0 -960 960 960", "M450-140v-153.85H250v-60h200V-450H250v-60h171.08L224.23-820h71.54L480-529.15 664.23-820h71.54L538.92-510H710v60H510v96.15h200v60H510V-140h-60Z" ],
			400 => [ "0 -960 960 960", "M440-120v-160H240v-80h200v-80H240v-80h163L200-840h95l185 292 185-292h95L557-520h163v80H520v80h200v80H520v160h-80Z" ],
			500 => [ "0 -960 960 960", "M434.5-111.87V-269h-200v-91h200v-74.5h-200v-91h158.46L188.28-848.13h108.15L480-558.28l183.57-289.85h108.15L567.04-525.5H725.5v91h-200v74.5h200v91h-200v157.13h-91Z" ],
			600 => [ "0 -960 960 960", "M427-100.78V-254H227v-106h200v-67H227v-106h152.26L172.3-859.22h126.09L480-572.31l181.61-286.91H787.7L580.74-533H733v106H533v67h200v106H533v153.22H427Z" ],
			700 => [ "0 -960 960 960", "M417-86v-148H217v-126h200v-57H217v-126h144L151-874h150l179 283 179-283h150L599-543h144v126H543v57h200v126H543v148H417Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconCurrencyYen" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
