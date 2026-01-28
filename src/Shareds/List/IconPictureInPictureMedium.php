<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconPictureInPictureMedium
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-212v-28h636q12 0 16-10t4-22v-476h40v476q0 26-17 43t-43 17H132Zm184-128v-304h384v304H316Z" ],
			200 => [ "0 -960 960 960", "M120-200v-40h655.38q9.24 0 12.31-7.69 3.08-7.69 3.08-16.93V-760H840v495.38q0 27.62-18.5 46.12Q803-200 775.38-200H120Zm196.92-135.38v-307.7h387.7v307.7h-387.7Z" ],
			300 => [ "0 -960 960 960", "M100-180v-60h687.69q4.62 0 6.16-3.85 1.53-3.84 1.53-8.46V-780H860v527.69Q860-222 839-201q-21 21-51.31 21H100Zm218.46-147.69v-313.85h393.85v313.85H318.46Z" ],
			400 => [ "0 -960 960 960", "M80-160v-80h720v-560h80v560q0 33-23.5 56.5T800-160H80Zm240-160v-320h400v320H320Z" ],
			500 => [ "0 -960 960 960", "M71.87-151.87v-91h725.26v-565.26h91v565.26q0 37.78-26.61 64.39t-64.39 26.61H71.87Zm245.26-171v-320h400v320h-400Z" ],
			600 => [ "0 -960 960 960", "M60.78-140.78v-106h732.44v-572.44h106v572.44q0 44.3-30.85 75.15-30.85 30.85-75.15 30.85H60.78Zm252.44-186v-320h400v320h-400Z" ],
			700 => [ "0 -960 960 960", "M46-126v-126h742v-582h126v582q0 53-36.5 89.5T788-126H46Zm262-206v-320h400v320H308Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconPictureInPictureMedium" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
