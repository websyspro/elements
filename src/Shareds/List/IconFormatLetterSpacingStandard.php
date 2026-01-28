<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFormatLetterSpacingStandard
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-212v-536h28v536h-28Zm508 0v-536h28v536h-28Zm-404-68 146-396h33l149 396h-35l-42-117H390l-41 117h-33Zm85-145h156l-77-216h-2l-77 216Z" ],
			200 => [ "0 -960 960 960", "M200-200v-560h40v560h-40Zm520 0v-560h40v560h-40Zm-409.08-80 146.93-396.92h42L649.08-280h-42.85l-40.61-113.54H392.08L352.23-280h-41.31Zm94.46-148.46h147.7l-72.62-204.46H478l-72.62 204.46Z" ],
			300 => [ "0 -960 960 960", "M180-180v-600h60v600h-60Zm540 0v-600h60v600h-60ZM302.46-280l148.46-398.46h57L657.54-280h-55.92l-38.31-107.77H395.54L357.61-280h-55.15Zm110.23-154.23h133.85l-65.31-185.23H478l-65.31 185.23Z" ],
			400 => [ "0 -960 960 960", "M160-160v-640h80v640h-80Zm560 0v-640h80v640h-80ZM294-280l150-400h72l150 400h-69l-36-102H399l-36 102h-69Zm126-160h120l-58-166h-4l-58 166Z" ],
			500 => [ "0 -960 960 960", "M151.87-151.87v-656.26h91v656.26h-91Zm565.26 0v-656.26h91v656.26h-91Zm-426.72-125.5 150.24-402.87h78.7l150.48 402.87h-74.74L559.8-377.46H400.67l-35.52 100.09h-74.74Zm132.22-163.35h114.74l-55.61-159.3H478l-55.37 159.3Z" ],
			600 => [ "0 -960 960 960", "M140.78-140.78v-678.44h106v678.44h-106Zm572.44 0v-678.44h106v678.44h-106Zm-427.7-133 150.57-406.79h87.82l151.13 406.79h-82.56l-34.31-97.48H402.96l-34.87 97.48h-82.57Zm140.7-167.92h107.56l-52.35-150.17H478L426.22-441.7Z" ],
			700 => [ "0 -960 960 960", "M126-126v-708h126v708H126Zm582 0v-708h126v708H708ZM279-269l151-412h100l152 412h-93l-33-94H406l-34 94h-93Zm152-174h98l-48-138h-3l-47 138Z" ],
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
