<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFormatAlignRight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-760v-28h616v28H172Zm240 147v-28h376v28H412ZM172-466v-28h616v28H172Zm240 147v-28h376v28H412ZM172-172v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-760v-40h640v40H160Zm240 150v-40h400v40H400ZM160-460v-40h640v40H160Zm240 150v-40h400v40H400ZM160-160v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-760v-60h680v60H140Zm240 155v-60h440v60H380ZM140-450v-60h680v60H140Zm240 155v-60h440v60H380ZM140-140v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-760v-80h720v80H120Zm240 160v-80h480v80H360ZM120-440v-80h720v80H120Zm240 160v-80h480v80H360ZM120-120v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-759.52v-88.61h736.26v88.61H111.87Zm240 161.91v-88.61h496.26v88.61H351.87Zm-240 161.91v-88.6h736.26v88.6H111.87Zm240 161.92v-88.61h496.26v88.61H351.87Zm-240 161.91v-88.61h736.26v88.61H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-758.87v-100.35h758.44v100.35H100.78Zm240 164.52V-694.7h518.44v100.35H340.78Zm-240 164.52v-100.34h758.44v100.34H100.78Zm240 164.53v-100.35h518.44v100.35H340.78Zm-240 164.52v-100.35h758.44v100.35H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-758v-116h788v116H86Zm240 168v-116h548v116H326ZM86-422v-116h788v116H86Zm240 168v-116h548v116H326ZM86-86v-116h788v116H86Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFormatAlignRight" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
