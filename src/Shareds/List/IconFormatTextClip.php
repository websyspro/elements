<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFormatTextClip
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M216-186v-588h28v588h-28Zm500 0v-280H364v-28h352v-280h28v588h-28Z" ],
			200 => [ "0 -960 960 960", "M203.08-180v-600h40v600h-40Zm513.84 0v-280H353.85v-40h363.07v-280h40v600h-40Z" ],
			300 => [ "0 -960 960 960", "M181.54-170v-620h60v620h-60Zm536.92 0v-280H336.92v-60h381.54v-280h60v620h-60Z" ],
			400 => [ "0 -960 960 960", "M160-160v-640h80v640h-80Zm560 0v-280H320v-80h400v-280h80v640h-80Z" ],
			500 => [ "0 -960 960 960", "M154.5-154.5v-651h91v651h-91Zm560 0v-280h-389v-91h389v-280h91v651h-91Z" ],
			600 => [ "0 -960 960 960", "M147-147v-666h106v666H147Zm560 0v-280H333v-106h374v-280h106v666H707Z" ],
			700 => [ "0 -960 960 960", "M137-137v-686h126v686H137Zm560 0v-280H343v-126h354v-280h126v686H697Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFormatTextClip" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
