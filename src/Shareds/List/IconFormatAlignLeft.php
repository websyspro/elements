<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFormatAlignLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-28h616v28H172Zm0-147v-28h376v28H172Zm0-147v-28h616v28H172Zm0-147v-28h376v28H172Zm0-147v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-160v-40h640v40H160Zm0-150v-40h400v40H160Zm0-150v-40h640v40H160Zm0-150v-40h400v40H160Zm0-150v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-140v-60h680v60H140Zm0-155v-60h440v60H140Zm0-155v-60h680v60H140Zm0-155v-60h440v60H140Zm0-155v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-120v-80h720v80H120Zm0-160v-80h480v80H120Zm0-160v-80h720v80H120Zm0-160v-80h480v80H120Zm0-160v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-88.61h736.26v88.61H111.87Zm0-161.91v-88.61h496.26v88.61H111.87Zm0-161.92v-88.6h736.26v88.6H111.87Zm0-161.91v-88.61h496.26v88.61H111.87Zm0-161.91v-88.61h736.26v88.61H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-100.35h758.44v100.35H100.78Zm0-164.52v-100.35h518.44v100.35H100.78Zm0-164.53v-100.34h758.44v100.34H100.78Zm0-164.52V-694.7h518.44v100.35H100.78Zm0-164.52v-100.35h758.44v100.35H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-86v-116h788v116H86Zm0-168v-116h548v116H86Zm0-168v-116h788v116H86Zm0-168v-116h548v116H86Zm0-168v-116h788v116H86Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFormatAlignLeft" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
