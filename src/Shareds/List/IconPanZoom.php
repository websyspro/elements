<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconPanZoom
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-188h28v140l150-150 20 20-150 150h140v28H172Zm438-418-20-20 150-150H600v-28h188v188h-28v-140L610-590Z" ],
			200 => [ "0 -960 960 960", "M160-160v-200h40v131.69l144-144L372.31-344l-144 144H360v40H160Zm456-427.69L587.69-616l144-144H600v-40h200v200h-40v-131.69l-144 144Z" ],
			300 => [ "0 -960 960 960", "M140-140v-220h60v117.85l134-134L376.15-334l-134 134H360v60H140Zm486-443.85L583.85-626l134-134H600v-60h220v220h-60v-117.85l-134 134Z" ],
			400 => [ "0 -960 960 960", "M120-120v-240h80v104l124-124 56 56-124 124h104v80H120Zm516-460-56-56 124-124H600v-80h240v240h-80v-104L636-580Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87V-366.7h91v100.18l118.5-118.5 63.65 63.65-118.5 118.5H366.7v91H111.87Zm526.76-463.11-63.65-63.65 118.5-118.5H593.3v-91h254.83v254.83h-91v-100.18l-118.5 118.5Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-275.05h106v94.96l111-111 74.09 74.09-111 111h94.96v106H100.78Zm541.44-467.35-74.09-74.09 111-111h-94.96v-106h275.05v275.05h-106v-94.96l-111 111Z" ],
			700 => [ "0 -960 960 960", "M86-86v-302h126v88l101-101 88 88-101 101h88v126H86Zm561-473-88-88 101-101h-88v-126h302v302H748v-88L647-559Z" ],
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
