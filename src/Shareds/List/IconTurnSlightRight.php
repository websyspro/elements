<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconTurnSlightRight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M386-172v-274q0-12 5-23.5t13-19.5l232-231H508v-28h175v175h-28v-128L423-470q-5 5-7 10.5t-2 11.5v276h-28Z" ],
			200 => [ "0 -960 960 960", "M380-169.23v-280.69q0-12.93 5.23-25.12 5.23-12.19 13.92-20.88L624-720H504.77v-40h186.77v186.77h-40v-119.23L426.92-468.62q-3.84 3.85-5.38 8.08t-1.54 8.85v282.46h-40Z" ],
			300 => [ "0 -960 960 960", "M370-164.62v-291.84q0-14.46 5.62-27.81 5.61-13.34 15.46-23.19L604-720H499.39v-60h206.38v206.38h-60v-104.61L433.46-466.31q-1.92 1.93-2.69 4.04-.77 2.12-.77 4.42v293.23h-60Z" ],
			400 => [ "0 -960 960 960", "M360-160v-303q0-16 6-30.5t17-25.5l201-201h-90v-80h226v226h-80v-90L440-464v304h-80Z" ],
			500 => [ "0 -960 960 960", "M354.5-151.87v-307.78q0-18.15 6.96-34.81 6.95-16.65 19.39-29.08L574.2-717.13h-90v-91h244.89v244.89h-91v-90L445.5-460.89v309.02h-91Z" ],
			600 => [ "0 -960 960 960", "M347-140.78v-314.31q0-21.08 8.26-40.67 8.26-19.59 22.65-33.98l182.91-183.48h-90v-106h270.66v270.66h-106v-90L453-456.65v315.87H347Z" ],
			700 => [ "0 -960 960 960", "M337-126v-323q0-25 10-48.5t27-40.5l169-170h-90v-126h305v305H632v-90L463-451v325H337Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconTurnSlightRight" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
