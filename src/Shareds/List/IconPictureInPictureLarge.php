<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconPictureInPictureLarge
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-212v-28h636q12 0 16-10t4-22v-476h40v476q0 26-17 43t-43 17H132Zm104-128v-384h464v384H236Z" ],
			200 => [ "0 -960 960 960", "M120-200v-40h655.38q9.24 0 12.31-7.69 3.08-7.69 3.08-16.93V-760H840v495.38q0 27.62-18.5 46.12Q803-200 775.38-200H120Zm116.92-135.38v-387.7h467.7v387.7h-467.7Z" ],
			300 => [ "0 -960 960 960", "M100-180v-60h687.69q4.62 0 6.16-3.85 1.53-3.84 1.53-8.46V-780H860v527.69Q860-222 839-201q-21 21-51.31 21H100Zm138.46-147.69v-393.85h473.85v393.85H238.46Z" ],
			400 => [ "0 -960 960 960", "M80-160v-80h720v-560h80v560q0 33-23.5 56.5T800-160H80Zm160-160v-400h480v400H240Z" ],
			500 => [ "0 -960 960 960", "M71.87-151.87v-91h725.26v-565.26h91v565.26q0 37.78-26.61 64.39t-64.39 26.61H71.87Zm165.26-171v-400h480v400h-480Z" ],
			600 => [ "0 -960 960 960", "M60.78-140.78v-106h732.44v-572.44h106v572.44q0 44.3-30.85 75.15-30.85 30.85-75.15 30.85H60.78Zm172.44-186v-400h480v400h-480Z" ],
			700 => [ "0 -960 960 960", "M46-126v-126h742v-582h126v582q0 53-36.5 89.5T788-126H46Zm182-206v-400h480v400H228Z" ],
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
