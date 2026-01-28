<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLineEndArrowNotch
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m502-313 84-153H106v-28h480l-84-153 263 167-263 167Z" ],
			200 => [ "0 -960 960 960", "M487.69-286.92 583.92-460H100v-40h483.92l-96.23-173.08L791.54-480 487.69-286.92Z" ],
			300 => [ "0 -960 960 960", "M463.85-243.46 580.46-450H90v-60h490.46L463.85-716.54 835.77-480 463.85-243.46Z" ],
			400 => [ "0 -960 960 960", "m440-200 137-240H80v-80h497L440-760l440 280-440 280Z" ],
			500 => [ "0 -960 960 960", "m435.22-191.39 131.5-243.11H74.5v-91h492.22l-131.5-243.11L888.85-480 435.22-191.39Z" ],
			600 => [ "0 -960 960 960", "M428.7-179.65 552.69-427H67v-106h485.69L428.7-780.35 900.91-480 428.7-179.65Z" ],
			700 => [ "0 -960 960 960", "m420-164 114-253H57v-126h477L420-796l497 316-497 316Z" ],
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
