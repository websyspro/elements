<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFlag
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M252-146v-602h266l16 80h214v296H562l-16-80H280v306h-28Zm248-414Zm86 160h134v-240H510l-16-80H280v240h290l16 80Z" ],
			200 => [ "0 -960 960 960", "M240-140v-620h287.69l16 80H760v320H552.31l-16-80H280v300h-40Zm260-420Zm86 160h134v-240H510l-16-80H280v240h290l16 80Z" ],
			300 => [ "0 -960 960 960", "M220-130v-650h323.84l16 80H780v360H536.16l-16-80H280v290h-60Zm280-430Zm86 160h134v-240H510l-16-80H280v240h290l16 80Z" ],
			400 => [ "0 -960 960 960", "M200-120v-680h360l16 80h224v400H520l-16-80H280v280h-80Zm300-440Zm86 160h134v-240H510l-16-80H280v240h290l16 80Z" ],
			500 => [ "0 -960 960 960", "M191.87-111.87v-696.26H566.7l16.09 80h225.34v416.26H513.3l-16-80H282.87v280h-91ZM500-560Zm88.63 157.13h128.5v-234.26H507.35l-15.98-80h-208.5v234.26h289.77l15.99 80Z" ],
			600 => [ "0 -960 960 960", "M180.78-100.78v-718.44h395.05l16.22 80h227.17v438.44H504.17l-16-80H286.78v280h-106ZM500-560Zm92.22 153.22h121v-226.44H503.74l-15.96-80h-201v226.44h289.47l15.97 80Z" ],
			700 => [ "0 -960 960 960", "M166-86v-748h422l16.4 80H834v468H492l-16-80H292v280H166Zm334-474Zm97 148h111v-216H498.93L483-708H292v216h289.05L597-412Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFlag" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
