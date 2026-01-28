<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAzm
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M452-165v-287H165l296-296h287v287L452-165Zm162-202 106-106v-247H473L367-614h247v247ZM480-233l106-106v-247H339L233-480h247v247Z" ],
			200 => [ "0 -960 960 960", "M440-136.15V-440H136.15l320-320H760v303.85l-320 320ZM620-373l100-100v-247H473L373-620h247v247ZM480-233l100-100v-247H333L233-480h247v247Z" ],
			300 => [ "0 -960 960 960", "M420-88.08V-420H88.08l360-360H780v331.92l-360 360ZM630-383l90-90v-247H473l-90 90h247v247ZM480-233l90-90v-247H323l-90 90h247v247Z" ],
			400 => [ "0 -960 960 960", "M400-40v-360H40l400-400h360v360L400-40Zm240-353 80-80v-247H473l-80 80h247v247ZM480-233l80-80v-247H313l-80 80h247v247Z" ],
			500 => [ "0 -960 960 960", "M395.22-28.28v-366.94H28.28l409.57-409.56h366.93v366.93L395.22-28.28ZM644.3-402.57l71.87-71.86v-241.74H474.43l-71.86 71.87H644.3v241.73ZM483.83-242.09l71.87-71.87V-555.7H313.96l-71.87 71.87h241.74v241.74Z" ],
			600 => [ "0 -960 960 960", "M388.7-12.3v-376.4H12.3l422.61-422.6H811.3v376.39L388.7-12.3Zm261.47-403.31 60.79-60.78v-234.57H476.39l-60.78 60.79h234.56v234.56ZM489.04-254.48l60.79-60.78v-234.57H315.26l-60.78 60.79h234.56v234.56Z" ],
			700 => [ "0 -960 960 960", "M380 9v-389H-9l440-440h389v389L380 9Zm278-442 46-46v-225H479l-46 46h225v225ZM496-271l46-46v-225H317l-46 46h225v225Z" ],
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
