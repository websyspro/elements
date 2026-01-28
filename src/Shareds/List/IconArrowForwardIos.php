<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowForwardIos
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m320-116-34-34 330-330-330-330 34-34 364 364-364 364Z" ],
			200 => [ "0 -960 960 960", "m320.23-107.69-42.54-42.54L607.46-480 277.69-809.77l42.54-42.54L692.54-480 320.23-107.69Z" ],
			300 => [ "0 -960 960 960", "m320.62-93.85-56.77-56.77L593.23-480 263.85-809.38l56.77-56.77L706.77-480 320.62-93.85Z" ],
			400 => [ "0 -960 960 960", "m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z" ],
			500 => [ "0 -960 960 960", "M321-72.35 242.35-151l329-329-329-329L321-887.65 728.65-480 321-72.35Z" ],
			600 => [ "0 -960 960 960", "M321-61.91 231.91-151l329-329-329-329L321-898.09 739.09-480 321-61.91Z" ],
			700 => [ "0 -960 960 960", "M321-48 218-151l329-329-329-329 103-103 432 432L321-48Z" ],
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
