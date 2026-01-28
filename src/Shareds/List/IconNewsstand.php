<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconNewsstand
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M106-192v-28h748v28H106Zm98-148v-268h28v268h-28Zm148 0v-428h28v428h-28Zm148 0v-428h28v428h-28Zm244 0L610-574l24-14 134 234-24 14Z" ],
			200 => [ "0 -960 960 960", "M100-184.62v-40h760v40H100Zm93.85-150.76v-280h40v280h-40Zm150.77 0v-440h40v440h-40Zm150.76 0v-440h40v440h-40Zm252.31 0L607.69-580l34.62-20 140 244.62-34.62 20Z" ],
			300 => [ "0 -960 960 960", "M90-172.31v-60h780v60H90Zm86.92-155.38v-300h60v300h-60Zm155.39 0v-460h60v460h-60Zm155.38 0v-460h60v460h-60Zm266.16 0L603.85-590l52.3-30 150 262.31-52.3 30Z" ],
			400 => [ "0 -960 960 960", "M80-160v-80h800v80H80Zm80-160v-320h80v320h-80Zm160 0v-480h80v480h-80Zm160 0v-480h80v480h-80Zm280 0L600-600l70-40 160 280-70 40Z" ],
			500 => [ "0 -960 960 960", "M65.41-154.5v-91h829.18v91H65.41Zm74.5-165.5v-331h91v331h-91Zm167.18 0v-491h91v491h-91Zm167.41 0v-491h91v491h-91Zm294.35 0-165.5-289.8 79.8-45.5 165.5 289.8-79.8 45.5Z" ],
			600 => [ "0 -960 960 960", "M45.52-147v-106h868.96v106H45.52Zm67-173v-346h106v346h-106Zm176.96 0v-506h106v506h-106ZM467-320v-506h106v506H467Zm313.91 0-173-303.18 93.18-53 173 303.18-93.18 53Z" ],
			700 => [ "0 -960 960 960", "M19-137v-126h922v126H19Zm57-183v-366h126v366H76Zm190 0v-526h126v526H266Zm191 0v-526h126v526H457Zm340 0L614-641l111-63 183 321-111 63Z" ],
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
