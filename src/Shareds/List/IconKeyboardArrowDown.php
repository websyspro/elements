<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconKeyboardArrowDown
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-380 276-584l20-20 184 184 184-184 20 20-204 204Z" ],
			200 => [ "0 -960 960 960", "M480-371.69 267.69-584 296-612.31l184 184 184-184L692.31-584 480-371.69Z" ],
			300 => [ "0 -960 960 960", "M480-357.85 253.85-584 296-626.15l184 184 184-184L706.15-584 480-357.85Z" ],
			400 => [ "0 -960 960 960", "M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" ],
			500 => [ "0 -960 960 960", "M480-336.35 232.35-584 296-647.65l184 184 184-184L727.65-584 480-336.35Z" ],
			600 => [ "0 -960 960 960", "M480-325.91 221.91-584 296-658.09l184 184 184-184L738.09-584 480-325.91Z" ],
			700 => [ "0 -960 960 960", "M480-312 208-584l88-88 184 184 184-184 88 88-272 272Z" ],
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
