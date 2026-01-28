<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconHov
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-132 292-481l188-347 188 347-188 349Zm0-59 156-290-156-288-156 288 156 290Zm0-289Z" ],
			200 => [ "0 -960 960 960", "M480-120 280-480.77 480-840l200 359.23L480-120Zm0-81.38 153.92-279.39L480-758.62 326.08-480.77 480-201.38ZM480-480Z" ],
			300 => [ "0 -960 960 960", "M480-100 260-480.38 480-860l220 379.62L480-100Zm0-118.69 150.46-261.69L480-741.31 329.54-480.38 480-218.69ZM480-480Z" ],
			400 => [ "0 -960 960 960", "M480-80 240-480l240-400 240 400L480-80Zm0-156 147-244-147-244-147 244 147 244Zm0-244Z" ],
			500 => [ "0 -960 960 960", "M480-71.87 231.87-480 480-888.13 728.13-480 480-71.87ZM480-247l141.74-233L480-713 338.26-480 480-247Zm0-233Z" ],
			600 => [ "0 -960 960 960", "M480-60.78 220.78-480 480-899.22 739.22-480 480-60.78ZM480-262l134.56-218L480-698 345.44-480 480-262Zm0-218Z" ],
			700 => [ "0 -960 960 960", "M480-46 206-480l274-434 274 434L480-46Zm0-236 125-198-125-198-125 198 125 198Zm0-198Z" ],
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
