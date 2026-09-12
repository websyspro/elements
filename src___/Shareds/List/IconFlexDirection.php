<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFlexDirection
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-212v-218h300v218H132Zm0-318v-218h300v218H132Zm28-28h244v-162H160v162Zm505 346L502-375l19-19 130 128v-482h28v482l130-128 19 19-163 163Z" ],
			200 => [ "0 -960 960 960", "M120-200v-232.31h313.85V-200H120Zm0-327.69V-760h313.85v232.31H120Zm40-40h233.85V-720H160v152.31ZM677.69-200 506.15-371.54l27.54-27.54 124 122.23V-760h40v483.15l124-122.23 27.54 27.54L677.69-200Z" ],
			300 => [ "0 -960 960 960", "M100-180v-256.15h336.92V-180H100Zm0-343.85V-780h336.92v256.15H100Zm60-59.99h216.92V-720H160v136.16ZM698.84-180 513.08-365.77l41.76-41.77 114.01 112.62V-780h59.99v485.08l114-112.62 41.77 41.77L698.84-180Z" ],
			400 => [ "0 -960 960 960", "M80-160v-280h360v280H80Zm0-360v-280h360v280H80Zm80-80h200v-120H160v120Zm560 440L520-360l56-56 104 103v-487h80v487l104-103 56 56-200 200Z" ],
			500 => [ "0 -960 960 960", "M71.87-151.87V-440H441.2v288.13H71.87Zm0-368.13v-288.13H441.2V-520H71.87Zm91-91H350.2v-106.13H162.87V-611Zm559.04 459.13L511.63-359.76l66.28-63.65 98.5 97.5v-482.22h91v482.22l98.5-97.5 63.89 63.65-207.89 207.89Z" ],
			600 => [ "0 -960 960 960", "M60.78-140.78V-440h382.05v299.22H60.78Zm0-379.22v-299.22h382.05V-520H60.78Zm106-106h170.04v-87.22H166.78V-626Zm557.74 485.22-224.3-218.65 80.3-74.09 91 90v-475.7h106v475.7l91-90 74.66 74.09-218.66 218.65Z" ],
			700 => [ "0 -960 960 960", "M46-126v-314h399v314H46Zm0-394v-314h399v314H46Zm126-126h147v-62H172v62Zm556 520L485-359l99-88 81 80v-467h126v467l81-80 89 88-233 233Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFlexDirection" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
