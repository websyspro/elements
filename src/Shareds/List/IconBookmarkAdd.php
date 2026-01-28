<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconBookmarkAdd
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M252-198v-530q0-26 17-43t43-17h208v28H312q-12 0-22 10t-10 22v486l200-86 200 86v-278h28v322l-228-98-228 98Zm28-562h240-240Zm400 160v-80h-80v-28h80v-80h28v80h80v28h-80v80h-28Z" ],
			200 => [ "0 -960 960 960", "M240-180v-555.38q0-27.62 18.5-46.12Q277-800 304.62-800H520v40H304.62q-9.24 0-16.93 7.69-7.69 7.69-7.69 16.93V-242l200-86 200 86v-278h40v340L480-283.08 240-180Zm40-580h240-240Zm400 160v-80h-80v-40h80v-80h40v80h80v40h-80v80h-40Z" ],
			300 => [ "0 -960 960 960", "M220-150v-597.69Q220-778 241-799q21-21 51.31-21H520v60H292.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46V-242l200-86 200 86v-278h60v370L480-261.54 220-150Zm60-610h240-240Zm400 160v-80h-80v-60h80v-80h60v80h80v60h-80v80h-60Z" ],
			400 => [ "0 -960 960 960", "M200-120v-640q0-33 23.5-56.5T280-840h240v80H280v518l200-86 200 86v-278h80v400L480-240 200-120Zm80-640h240-240Zm400 160v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M191.87-107.8v-649.33q0-37.78 26.61-64.39t64.39-26.61H518.8v91H282.87v510.83L480-330.87l197.13 84.57v-274.18h91v412.68L480-231.15 191.87-107.8Zm91-649.33H518.8 282.87ZM678.8-600.48v-80h-80v-87.41h80v-80h87.42v80h80v87.41h-80v80H678.8Z" ],
			600 => [ "0 -960 960 960", "M180.78-91.17v-662.05q0-44.3 30.85-75.15 30.85-30.85 75.15-30.85h230.39v106H286.78v501.05L480-334.78l193.22 82.61v-268.96h106v429.96L480-219.09 180.78-91.17Zm106-662.05h230.39-230.39Zm390.39 152.09v-80h-80v-97.52h80v-80h97.53v80h80v97.52h-80v80h-97.53Z" ],
			700 => [ "0 -960 960 960", "M166-69v-679q0-53 36.5-89.5T292-874h223v126H292v488l188-80 188 80v-262h126v453L480-203 166-69Zm126-679h223-223Zm383 146v-80h-80v-111h80v-80h111v80h80v111h-80v80H675Z" ],
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
