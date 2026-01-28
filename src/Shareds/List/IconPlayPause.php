<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconPlayPause
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M226-362v-236l169 118-169 118Zm320 16v-268h28v268h-28Zm160 0v-268h28v268h-28Z" ],
			200 => [ "0 -960 960 960", "M220-350.46v-259.08L405.38-480 220-350.46ZM540-340v-280h40v280h-40Zm160 0v-280h40v280h-40Z" ],
			300 => [ "0 -960 960 960", "M210-331.23v-297.54L422.69-480 210-331.23ZM530-330v-300h60v300h-60Zm160 0v-300h60v300h-60Z" ],
			400 => [ "0 -960 960 960", "M200-312v-336l240 168-240 168Zm320-8v-320h80v320h-80Zm160 0v-320h80v320h-80Z" ],
			500 => [ "0 -960 960 960", "M183.5-301.48v-357.04L438.57-480 183.5-301.48Zm331-8.24v-340.56h91v340.56h-91Zm171 0v-340.56h91v340.56h-91Z" ],
			600 => [ "0 -960 960 960", "M161-287.13v-385.74L436.61-480 161-287.13Zm346-8.56v-368.62h106v368.62H507Zm186 0v-368.62h106v368.62H693Z" ],
			700 => [ "0 -960 960 960", "M131-268v-424l303 212-303 212Zm366-9v-406h126v406H497Zm206 0v-406h126v406H703Z" ],
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
