<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFlashOn
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m480-336 170-247H511l63-217H380v320h100v144Zm-28 92v-208H352v-376h259l-63 217h155L452-244Zm28-236H380h100Z" ],
			200 => [ "0 -960 960 960", "m480-336 160.31-232.46H507.08L574-800H375.38v320H480v144Zm-40 129.85V-440H335.38v-400h291.54L560-608.46h156.15L440-206.15ZM480-480H375.38 480Z" ],
			300 => [ "0 -960 960 960", "m480-336 144.16-208.23H500.54L574-800H367.69v320H480v144Zm-60 192.92V-420H307.69v-440h345.77L580-604.23h158.08L420-143.08ZM480-480H367.69 480Z" ],
			400 => [ "0 -960 960 960", "m480-336 128-184H494l80-280H360v320h120v144ZM400-80v-320H280v-480h400l-80 280h160L400-80Zm80-400H360h120Z" ],
			500 => [ "0 -960 960 960", "m483.83-348.2 123.45-177.54H491.61l77.37-270.43H362.63v321.91h121.2v126.06Zm-91 291.16v-326.22h-121.2v-503.91h417.94L612.2-616.74h168.37L392.83-57.04Zm91-417.22h-121.2 121.2Z" ],
			600 => [ "0 -960 960 960", "M489.04-364.83 606.3-533.57H488.35l73.78-257.39H366.22v324.53h122.82v101.6Zm-106 339.09v-334.69H260.22v-536.53h442.39l-73.78 257.39h179.78L383.04-25.74Zm106-440.69H366.22h122.82Z" ],
			700 => [ "0 -960 960 960", "m496-387 109-157H484l69-240H371v328h125v69ZM370 16v-346H245v-580h475l-69 240h195L370 16Zm126-472H371h125Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFlashOn" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
