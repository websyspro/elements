<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconGoToLine
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M446-680v-68h68v68h-68Zm0 468v-68h68v68h-68Z" ],
			200 => [ "0 -960 960 960", "M440-680v-80h80v80h-80Zm0 480v-80h80v80h-80Z" ],
			300 => [ "0 -960 960 960", "M430-680v-100h100v100H430Zm0 500v-100h100v100H430Z" ],
			400 => [ "0 -960 960 960", "M420-680v-120h120v120H420Zm0 520v-120h120v120H420Z" ],
			500 => [ "0 -960 960 960", "M414.5-674.5v-131h131v131h-131Zm0 520v-131h131v131h-131Z" ],
			600 => [ "0 -960 960 960", "M407-667v-146h146v146H407Zm0 520v-146h146v146H407Z" ],
			700 => [ "0 -960 960 960", "M397-657v-166h166v166H397Zm0 520v-166h166v166H397Z" ],
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
