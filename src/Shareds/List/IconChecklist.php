<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconChecklist
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M237-257 132-362l19-19 85 85 170-170 19 20-188 189Zm0-280L132-642l19-19 85 85 170-170 19 20-188 189Zm284 211v-28h308v28H521Zm0-280v-28h308v28H521Z" ],
			200 => [ "0 -960 960 960", "M233.54-243.85 120-357.38l27.54-27.54 85 85 170-170 27.54 28.54-196.54 197.53Zm0-289.23L120-646.62l27.54-27.53 85 85 170-170 27.54 28.53-196.54 197.54Zm287.23 217.7v-40h320v40h-320Zm0-289.24v-40h320v40h-320Z" ],
			300 => [ "0 -960 960 960", "M227.77-221.92 100-349.69l41.77-41.77 85 85 170-170 41.77 42.77-210.77 211.77Zm0-304.62L100-654.31l41.77-41.77 85 85 170-170 41.77 42.77-210.77 211.77Zm292.61 228.85v-60h340v60h-340Zm0-304.62v-60h340v60h-340Z" ],
			400 => [ "0 -960 960 960", "M222-200 80-342l56-56 85 85 170-170 56 57-225 226Zm0-320L80-662l56-56 85 85 170-170 56 57-225 226Zm298 240v-80h360v80H520Zm0-320v-80h360v80H520Z" ],
			500 => [ "0 -960 960 960", "M223.2-192.35 73.3-342l63.9-63.65 85 85 170-170.24L455.85-426 223.2-192.35Zm0-320L73.3-662l63.9-63.65 85 85 170-170.24L455.85-746 223.2-512.35Zm298 237.85v-91h365.5v91H521.2Zm0-320v-91h365.5v91H521.2Z" ],
			600 => [ "0 -960 960 960", "M224.83-181.91 64.17-342l74.66-74.09 85 85 170-170.56L467.91-426 224.83-181.91Zm0-320L64.17-662l74.66-74.09 85 85 170-170.56L467.91-746 224.83-501.91Zm298 234.91v-106h373v106h-373Zm0-320v-106h373v106h-373Z" ],
			700 => [ "0 -960 960 960", "M227-168 52-342l89-88 85 85 170-171 88 90-257 258Zm0-320L52-662l89-88 85 85 170-171 88 90-257 258Zm298 231v-126h383v126H525Zm0-320v-126h383v126H525Z" ],
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
