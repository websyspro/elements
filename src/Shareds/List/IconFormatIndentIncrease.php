<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFormatIndentIncrease
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-28h616v28H172Zm320-147v-28h296v28H492Zm0-147v-28h296v28H492Zm0-147v-28h296v28H492ZM172-760v-28h616v28H172Zm0 378v-196l98 98-98 98Z" ],
			200 => [ "0 -960 960 960", "M160-160v-40h640v40H160Zm320-150v-40h320v40H480Zm0-150v-40h320v40H480Zm0-150v-40h320v40H480ZM160-760v-40h640v40H160Zm0 392.31v-224.62L272.31-480 160-367.69Z" ],
			300 => [ "0 -960 960 960", "M140-140v-60h680v60H140Zm320-155v-60h360v60H460Zm0-155v-60h360v60H460Zm0-155v-60h360v60H460ZM140-760v-60h680v60H140Zm0 416.15v-272.3L276.15-480 140-343.85Z" ],
			400 => [ "0 -960 960 960", "M120-120v-80h720v80H120Zm320-160v-80h400v80H440Zm0-160v-80h400v80H440Zm0-160v-80h400v80H440ZM120-760v-80h720v80H120Zm0 440v-320l160 160-160 160Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-88.61h736.26v88.61H111.87Zm320-161.91v-88.61h416.26v88.61H431.87Zm0-161.92v-88.6h416.26v88.6H431.87Zm0-161.91v-88.61h416.26v88.61H431.87Zm-320-161.91v-88.61h736.26v88.61H111.87Zm0 452.67v-346.3L285.02-480 111.87-306.85Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-100.35h758.44v100.35H100.78Zm320-164.52v-100.35h438.44v100.35H420.78Zm0-164.53v-100.34h438.44v100.34H420.78Zm0-164.52V-694.7h438.44v100.35H420.78Zm-320-164.52v-100.35h758.44v100.35H100.78Zm0 469.96v-382.18L291.87-480 100.78-288.91Z" ],
			700 => [ "0 -960 960 960", "M86-86v-116h788v116H86Zm320-168v-116h468v116H406Zm0-168v-116h468v116H406Zm0-168v-116h468v116H406ZM86-758v-116h788v116H86Zm0 493v-430l215 215L86-265Z" ],
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
