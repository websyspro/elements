<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLineCurve
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M720-160q0-116-44-218T556-556q-76-76-178-120t-218-44v-28q122 0 229 46t187 126q80 80 126 187t46 229h-28Z" ],
			200 => [ "0 -960 960 960", "M720-160q0-116-44-218T556-556q-76-76-178-120t-218-44v-40q124.31 0 233.5 47.04t190.81 128.65q81.61 81.62 128.65 190.81Q760-284.31 760-160h-40Z" ],
			300 => [ "0 -960 960 960", "M720-160q0-116-44-218T556-556q-76-76-178-120t-218-44v-60q128.15 0 241 48.77t197.15 133.08q84.31 84.3 133.08 197.15Q780-288.15 780-160h-60Z" ],
			400 => [ "0 -960 960 960", "M720-160q0-116-44-218T556-556q-76-76-178-120t-218-44v-80q132 0 248.5 50.5T612-612q87 87 137.5 203.5T800-160h-80Z" ],
			500 => [ "0 -960 960 960", "M714.5-154.5q0-116-44-218t-120-178q-76-76-178-120t-218-44v-91q134.39 0 252.88 51.33 118.48 51.34 206.96 139.78 88.49 88.43 139.82 206.99 51.34 118.57 51.34 252.9h-91Z" ],
			600 => [ "0 -960 960 960", "M707-147q0-116-44-218T543-543q-76-76-178-120t-218-44v-106q137.65 0 258.84 52.47 121.2 52.47 211.7 142.87 90.5 90.4 142.98 211.77Q813-284.52 813-147H707Z" ],
			700 => [ "0 -960 960 960", "M697-137q0-116-44-218T533-533q-76-76-178-120t-218-44v-126q142 0 266.8 53.99 124.8 53.99 218 147Q715-529 769-403.88 823-278.76 823-137H697Z" ],
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
