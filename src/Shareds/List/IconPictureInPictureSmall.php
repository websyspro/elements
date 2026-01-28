<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconPictureInPictureSmall
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-212v-28h636q12 0 22-10t10-22v-476h28v476q0 26-17 43t-43 17H132Zm264-128v-224h304v224H396Z" ],
			200 => [ "0 -960 960 960", "M120-200v-40h655.38q9.24 0 16.93-7.69 7.69-7.69 7.69-16.93V-760h40v495.38q0 27.62-18.5 46.12Q803-200 775.38-200H120Zm276.92-135.38v-227.7h307.7v227.7h-307.7Z" ],
			300 => [ "0 -960 960 960", "M100-180v-60h687.69q4.62 0 8.46-3.85 3.85-3.84 3.85-8.46V-780h60v527.69Q860-222 839-201q-21 21-51.31 21H100Zm298.46-147.69v-233.85h313.85v233.85H398.46Z" ],
			400 => [ "0 -960 960 960", "M80-160v-80h720v-560h80v560q0 33-23.5 56.5T800-160H80Zm320-160v-240h320v240H400Z" ],
			500 => [ "0 -960 960 960", "M71.87-151.87v-91h725.26v-565.26h91v565.26q0 37.78-26.61 64.39t-64.39 26.61H71.87Zm325.26-171v-240h320v240h-320Z" ],
			600 => [ "0 -960 960 960", "M60.78-140.78v-106h732.44v-572.44h106v572.44q0 44.3-30.85 75.15-30.85 30.85-75.15 30.85H60.78Zm332.44-186v-240h320v240h-320Z" ],
			700 => [ "0 -960 960 960", "M46-126v-126h742v-582h126v582q0 53-36.5 89.5T788-126H46Zm342-206v-240h320v240H388Z" ],
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
