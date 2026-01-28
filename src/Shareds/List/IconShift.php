<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconShift
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M372-172v-280H230l250-346 250 346H588v280H372Zm28-28h160v-280h111L480-749 289-480h111v280Zm80-280Z" ],
			200 => [ "0 -960 960 960", "M360-160v-289.23H204.61L480-816.92l275.39 367.69H600V-160H360Zm40-40h160v-289.23h111L480-750.15 289-489.23h111V-200Zm80-289.23Z" ],
			300 => [ "0 -960 960 960", "M340-140v-304.62H162.31L480-848.46l317.69 403.84H620V-140H340Zm60-60h160v-304.61h111L480-752.08 289-504.61h111V-200Zm80-304.61Z" ],
			400 => [ "0 -960 960 960", "M320-120v-320H120l360-440 360 440H640v320H320Zm80-80h160v-320h111L480-754 289-520h111v320Zm80-320Z" ],
			500 => [ "0 -960 960 960", "M315.22-115.22v-320H109.96L480-887.65l370.04 452.43H644.78v320H315.22Zm91-91h147.56v-320h104.07L480-744.2 302.15-526.22h104.07v320Zm73.78-320Z" ],
			600 => [ "0 -960 960 960", "M308.7-108.7v-320H96.26L480-898.09 863.74-428.7H651.3v320H308.7Zm106-106h130.6v-320h94.61L480-730.82 320.09-534.7h94.61v320Zm65.3-320Z" ],
			700 => [ "0 -960 960 960", "M300-100v-320H78l402-492 402 492H660v320H300Zm126-126h108v-320h82L480-713 344-546h82v320Zm54-320Z" ],
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
