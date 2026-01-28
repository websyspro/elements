<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFormatAlignCenter
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-28h616v28H172Zm160-147v-28h296v28H332ZM172-466v-28h616v28H172Zm160-147v-28h296v28H332ZM172-760v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-160v-40h640v40H160Zm160-150v-40h320v40H320ZM160-460v-40h640v40H160Zm160-150v-40h320v40H320ZM160-760v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-140v-60h680v60H140Zm160-155v-60h360v60H300ZM140-450v-60h680v60H140Zm160-155v-60h360v60H300ZM140-760v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-120v-80h720v80H120Zm160-160v-80h400v80H280ZM120-440v-80h720v80H120Zm160-160v-80h400v80H280ZM120-760v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-88.61h736.26v88.61H111.87Zm160-161.91v-88.61h416.26v88.61H271.87Zm-160-161.92v-88.6h736.26v88.6H111.87Zm160-161.91v-88.61h416.26v88.61H271.87Zm-160-161.91v-88.61h736.26v88.61H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-100.35h758.44v100.35H100.78Zm160-164.52v-100.35h438.44v100.35H260.78Zm-160-164.53v-100.34h758.44v100.34H100.78Zm160-164.52V-694.7h438.44v100.35H260.78Zm-160-164.52v-100.35h758.44v100.35H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-86v-116h788v116H86Zm160-168v-116h468v116H246ZM86-422v-116h788v116H86Zm160-168v-116h468v116H246ZM86-758v-116h788v116H86Z" ],
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
