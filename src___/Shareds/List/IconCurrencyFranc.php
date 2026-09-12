<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconCurrencyFranc
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M316-172v-120h-80v-28h80v-468h368v28H344v256h300v28H344v156h150v28H344v120h-28Z" ],
			200 => [ "0 -960 960 960", "M307.69-160v-120h-80v-40h80v-480h384.62v40H347.69v252.31h304.62v40H347.69V-320H500v40H347.69v120h-40Z" ],
			300 => [ "0 -960 960 960", "M293.85-140v-120h-80v-60h80v-500h412.3v60h-352.3v246.15h312.3v60h-312.3V-320H510v60H353.85v120h-60Z" ],
			400 => [ "0 -960 960 960", "M280-120v-120h-80v-80h80v-520h440v80H360v240h320v80H360v120h160v80H360v120h-80Z" ],
			500 => [ "0 -960 960 960", "M274.5-111.87v-120h-80v-91h80v-525.26h451v91h-360v231.63h320v91h-320v111.63h160v91h-160v120h-91Z" ],
			600 => [ "0 -960 960 960", "M267-100.78v-120h-80v-106h80v-532.44h466v106H373V-533h320v106H373v100.22h160v106H373v120H267Z" ],
			700 => [ "0 -960 960 960", "M257-86v-120h-80v-126h80v-542h486v126H383v205h320v126H383v85h160v126H383v120H257Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconCurrencyFranc" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
