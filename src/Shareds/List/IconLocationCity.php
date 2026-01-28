<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLocationCity
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M226-164v-508h160v-146l94-88 94 88v306h160v348H226Zm28-28h132v-132H254v132Zm0-160h132v-132H254v132Zm0-160h132v-132H254v132Zm160 320h132v-132H414v132Zm0-160h132v-132H414v132Zm0-160h132v-132H414v132Zm0-160h132v-132H414v132Zm160 480h132v-132H574v132Zm0-160h132v-132H574v132Z" ],
			200 => [ "0 -960 960 960", "M201.54-153.85v-520H380v-130.77L480-900l100 95.38v290.77h178.46v360H201.54Zm40-40h120v-120h-120v120Zm0-160h120v-120h-120v120Zm0-160h120v-120h-120v120Zm178.46 320h120v-120H420v120Zm0-160h120v-120H420v120Zm0-160h120v-120H420v120Zm0-160h120v-120H420v120Zm178.46 480h120v-120h-120v120Zm0-160h120v-120h-120v120Z" ],
			300 => [ "0 -960 960 960", "M160.77-136.92v-540H370v-105.39L480-890l110 107.69v265.39h209.23v380H160.77Zm60-60h100v-100h-100v100Zm0-160h100v-100h-100v100Zm0-160h100v-100h-100v100Zm209.23 320h100v-100H430v100Zm0-160h100v-100H430v100Zm0-160h100v-100H430v100Zm0-160h100v-100H430v100Zm209.23 480h100v-100h-100v100Zm0-160h100v-100h-100v100Z" ],
			400 => [ "0 -960 960 960", "M120-120v-560h240v-80l120-120 120 120v240h240v400H120Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 320h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 480h80v-80h-80v80Zm0-160h80v-80h-80v80Z" ],
			500 => [ "0 -960 960 960", "M109-109v-582h240v-72.59l131-131 131 131V-531h240v422H109Zm91-91h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 320h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 480h80v-80h-80v80Zm0-160h80v-80h-80v80Z" ],
			600 => [ "0 -960 960 960", "M94-94v-612h240v-62.48l146-146 146 146V-546h240v452H94Zm106-106h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 320h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 480h80v-80h-80v80Zm0-160h80v-80h-80v80Z" ],
			700 => [ "0 -960 960 960", "M74-74v-652h240v-49l166-166 166 166v209h240v492H74Zm126-126h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 320h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm240 480h80v-80h-80v80Zm0-160h80v-80h-80v80Z" ],
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
