<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconTurnSlightLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M546-172v-276q0-6-2-11.5t-7-10.5L305-701v128h-28v-175h175v28H324l232 231q8 8 13 19.5t5 23.5v274h-28Z" ],
			200 => [ "0 -960 960 960", "M540-169.23v-282.46q0-4.62-1.54-8.85-1.54-4.23-5.38-8.08L308.46-692.46v119.23h-40V-760h186.77v40H336l224.85 224.08q8.69 8.69 13.92 20.88t5.23 25.12v280.69h-40Z" ],
			300 => [ "0 -960 960 960", "M530-164.62v-293.23q0-2.3-.77-4.42-.77-2.11-2.69-4.04L314.23-678.23v104.61h-60V-780h206.38v60H356l212.92 212.54q9.85 9.85 15.46 23.19 5.62 13.35 5.62 27.81v291.84h-60Z" ],
			400 => [ "0 -960 960 960", "M520-160v-304L320-664v90h-80v-226h226v80h-90l201 201q11 11 17 25.5t6 30.5v303h-80Z" ],
			500 => [ "0 -960 960 960", "M516.41-151.87v-309.02L323.83-653.24v90h-91v-244.89h244.89v91h-90l193.35 193.59q12.43 12.43 19.39 29.08 6.95 16.66 6.95 34.81v307.78h-91Z" ],
			600 => [ "0 -960 960 960", "M511.52-140.78v-315.87L329.04-638.56v90h-106v-270.66H493.7v106h-90l182.91 183.48q14.39 14.39 22.65 33.98 8.26 19.59 8.26 40.67v314.31h-106Z" ],
			700 => [ "0 -960 960 960", "M505-126v-325L336-619v90H210v-305h305v126h-90l169 170q17 17 27 40.5t10 48.5v323H505Z" ],
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
