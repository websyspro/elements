<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconKeyboardDoubleArrowLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M453-276 249-480l204-204 20 20-184 184 184 184-20 20Zm238 0L487-480l204-204 20 20-184 184 184 184-20 20Z" ],
			200 => [ "0 -960 960 960", "M450-267.69 237.69-480 450-692.31 478.31-664 294.54-480l183.77 184L450-267.69Zm244 0L481.69-480 694-692.31 722.31-664 538.54-480l183.77 184L694-267.69Z" ],
			300 => [ "0 -960 960 960", "M445-253.85 218.85-480 445-706.15 487.15-664 303.77-480l183.38 184L445-253.85Zm254 0L472.85-480 699-706.15 741.15-664 557.77-480l183.38 184L699-253.85Z" ],
			400 => [ "0 -960 960 960", "M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z" ],
			500 => [ "0 -960 960 960", "M438.57-232.35 190.91-480l247.66-247.65L502.22-664 318.98-480l183.24 184-63.65 63.65Zm266.86 0L457.78-480l247.65-247.65L769.09-664l-183 184 183 184-63.66 63.65Z" ],
			600 => [ "0 -960 960 960", "M436.61-221.91 178.52-480l258.09-258.09L510.7-664 327.13-480 510.7-296l-74.09 74.09Zm270.78 0L449.3-480l258.09-258.09L781.48-664l-183 184 183 184-74.09 74.09Z" ],
			700 => [ "0 -960 960 960", "M434-208 162-480l272-272 88 88-184 184 184 184-88 88Zm276 0L438-480l272-272 88 88-183 184 183 184-88 88Z" ],
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
