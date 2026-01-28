<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconPersonalPlaces
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M292-198v-550h328q7 0 12.5 3.5t9.5 8.5l94 136-94 136q-4 5-9.5 8.5T620-452H320v254h-28Zm28-282h300l80-120-80-120H320v240Zm0 0v-240 240Z" ],
			200 => [ "0 -960 960 960", "M280-180v-580h342.31q8.61 0 15.61 4.19t11.93 10.58L750.77-600 649.85-454.77q-4.93 6.39-11.93 10.58T622.31-440H320v260h-40Zm40-300h300l80-120-80-120H320v240Zm0 0v-240 240Z" ],
			300 => [ "0 -960 960 960", "M260-150v-630h366.15q11.31 0 20.81 5.35 9.5 5.34 15.96 14.04L775.38-600 662.92-439.39q-6.46 8.7-15.96 14.04-9.5 5.35-20.81 5.35H320v270h-60Zm60-330h300l80-120-80-120H320v240Zm0 0v-240 240Z" ],
			400 => [ "0 -960 960 960", "M240-120v-680h390q14 0 26 6.5t20 17.5l124 176-124 176q-8 11-20 17.5t-26 6.5H320v280h-80Zm80-360h300l80-120-80-120H320v240Zm0 0v-240 240Z" ],
			500 => [ "0 -960 960 960", "M231.87-106.37v-701.76h394.78q17.83 0 33.3 8.29 15.46 8.3 25.62 22.64L809.09-600 685.57-422.8q-10.16 14.34-25.62 22.64-15.47 8.29-33.3 8.29H322.87v285.5h-91Zm91-376.5h295.7L696.65-600l-78.08-117.13h-295.7v234.26Zm0 0v-234.26 234.26Z" ],
			600 => [ "0 -960 960 960", "M220.78-87.78v-731.44h401.31q23.04 0 43.24 10.74 20.19 10.74 33.28 29.65L821.48-600 698.61-421.17q-13.09 18.91-33.28 29.65-20.2 10.74-43.24 10.74H326.78v293h-106Zm106-399h289.83L692.09-600l-75.48-113.22H326.78v226.44Zm0 0v-226.44 226.44Z" ],
			700 => [ "0 -960 960 960", "M206-63v-771h410q30 0 56.5 14t43.5 39l122 181-122 181q-17 25-43.5 39T616-366H332v303H206Zm126-429h282l72-108-72-108H332v216Zm0 0v-216 216Z" ],
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
