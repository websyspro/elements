<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconHome
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M240-200h156v-234h168v234h156v-360L480-742 240-560v360Zm-28 28v-402l268-203 268 203v402H536v-234H424v234H212Zm268-299Z" ],
			200 => [ "0 -960 960 960", "M240-200h147.69v-235.38h184.62V-200H720v-360L480-741.54 240-560v360Zm-40 40v-420l280-211.54L760-580v420H532.31v-235.38H427.69V-160H200Zm280-310.77Z" ],
			300 => [ "0 -960 960 960", "M240-200h133.85v-237.69h212.3V-200H720v-360L480-740.77 240-560v360Zm-60 60v-450l300-225.77L780-590v450H526.15v-237.69h-92.3V-140H180Zm300-330.38Z" ],
			400 => [ "0 -960 960 960", "M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z" ],
			500 => [ "0 -960 960 960", "M242.87-202.87H354.5V-445.5h251v242.63h111.63v-355.7L480-736.41 242.87-558.57v355.7Zm-91 91v-492.2L480-850.28l328.13 246.13v492.28H518.09v-246.22h-76.18v246.22H151.87ZM480-469.52Z" ],
			600 => [ "0 -960 960 960", "M246.78-206.78H347V-453h266v246.22h100.22v-349.83L480-731.52 246.78-556.61v349.83Zm-106 106v-508.83L480-864.31 819.22-609.8v509.02H515.48v-254.7h-70.96v254.7H140.78ZM480-468.87Z" ],
			700 => [ "0 -960 960 960", "M252-212h85v-251h286v251h85v-342L480-725 252-554v342ZM126-86v-531l354-266 354 265.67V-86H512v-266h-64v266H126Zm354-382Z" ],
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
