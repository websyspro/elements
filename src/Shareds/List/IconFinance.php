<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFinance
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M206-172q-26 0-43-17t-17-43v-608h28v608q0 12 10 22t22 10h608v28H206Zm106-146v-272h56v272h-56Zm174 0v-472h56v472h-56Zm174 0v-112h56v112h-56Z" ],
			200 => [ "0 -960 960 960", "M204.62-160q-27.62 0-46.12-18.5Q140-197 140-224.62V-840h40v615.38q0 9.24 7.69 16.93 7.69 7.69 16.93 7.69H820v40H204.62Zm90.76-140v-292.31h80V-300h-80Zm180 0v-492.31h80V-300h-80Zm180 0v-132.31h80.01V-300h-80.01Z" ],
			300 => [ "0 -960 960 960", "M202.31-140Q172-140 151-161q-21-21-21-51.31V-840h60v627.69q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85H830v60H202.31Zm65.38-130v-326.15h120V-270h-120Zm190 0v-526.15h120V-270h-120Zm190 0v-166.15h120V-270h-120Z" ],
			400 => [ "0 -960 960 960", "M200-120q-33 0-56.5-23.5T120-200v-640h80v640h640v80H200Zm40-120v-360h160v360H240Zm200 0v-560h160v560H440Zm200 0v-200h160v200H640Z" ],
			500 => [ "0 -960 960 960", "M200-109q-37.78 0-64.39-26.61T109-200v-647.41h91V-200h651v91H200Zm40-131v-367.41h163.59V-240H240Zm203.59 0v-567.41h163.82V-240H443.59Zm203.82 0v-207.41H811V-240H647.41Z" ],
			600 => [ "0 -960 960 960", "M200-94q-44.3 0-75.15-30.85Q94-155.7 94-200v-657.52h106V-200h666v106H200Zm40-146v-377.52h168.48V-240H240Zm208.48 0v-577.52h169.04V-240H448.48Zm209.04 0v-217.52H826V-240H657.52Z" ],
			700 => [ "0 -960 960 960", "M200-74q-53 0-89.5-36.5T74-200v-671h126v671h686v126H200Zm40-166v-391h175v391H240Zm215 0v-591h176v591H455Zm216 0v-231h175v231H671Z" ],
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
