<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconMoreDown
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M226-226v-362h28v334h334v28H226Zm200-200v-362h28v334h334v28H426Z" ],
			200 => [ "0 -960 960 960", "M220-220v-380h40v340h340v40H220Zm200-200v-380h40v340h340v40H420Z" ],
			300 => [ "0 -960 960 960", "M210-210v-410h60v350h350v60H210Zm200-200v-410h60v350h350v60H410Z" ],
			400 => [ "0 -960 960 960", "M200-200v-440h80v360h360v80H200Zm200-200v-440h80v360h360v80H400Z" ],
			500 => [ "0 -960 960 960", "M192.59-192.59v-451h91v360h360v91h-451Zm203.82-203.82v-451h91v360h360v91h-451Z" ],
			600 => [ "0 -960 960 960", "M182.48-182.48v-466h106v360h360v106h-466Zm209.04-209.04v-466h106v360h360v106h-466Z" ],
			700 => [ "0 -960 960 960", "M169-169v-486h126v360h360v126H169Zm216-216v-486h126v360h360v126H385Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconMoreDown" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
