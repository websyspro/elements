<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFormatLetterSpacingWide
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-212v-536h28v536h-28Zm588 0v-536h28v536h-28Zm-444-68 146-396h33l149 396h-35l-42-117H390l-41 117h-33Zm85-145h156l-77-216h-2l-77 216Z" ],
			200 => [ "0 -960 960 960", "M160-200v-560h40v560h-40Zm600 0v-560h40v560h-40Zm-449.08-80 146.93-396.92h42L649.08-280H606l-40.15-113.54H392.31L352.46-280h-41.54Zm94.46-148.46h147.7l-72.62-204.46h-1.54l-73.54 204.46Z" ],
			300 => [ "0 -960 960 960", "M140-180v-600h60v600h-60Zm620 0v-600h60v600h-60ZM302.46-280l148.46-398.46h57L657.54-280H601l-37.08-107.77H396.15L358.23-280h-55.77Zm110.23-154.23h133.85l-65.31-185.23h-.77l-67.77 185.23Z" ],
			400 => [ "0 -960 960 960", "M120-160v-640h80v640h-80Zm640 0v-640h80v640h-80ZM294-280l150-400h72l150 400h-70l-34-102H400l-36 102h-70Zm126-160h120l-58-166-62 166Z" ],
			500 => [ "0 -960 960 960", "M111.87-151.63v-656.26h91v656.26h-91Zm645.02-.24v-656.26h91v656.26h-91Zm-466.48-125.5 150.24-402.87h78.7l150.48 402.87h-75.5l-33.76-100.09H401.43l-35.52 100.09h-75.5Zm132.22-163.35h114.74l-55.61-159.3h-.72l-58.41 159.3Z" ],
			600 => [ "0 -960 960 960", "M100.78-140.22v-678.43h106v678.43h-106Zm651.87-.56v-678.44h106v678.44h-106Zm-467.13-133 150.57-406.79h87.82l151.13 406.79h-83l-33.43-97.48H403.39l-34.87 97.48h-83Zm140.7-167.92h107.56l-52.35-150.17h-1.69L426.22-441.7Z" ],
			700 => [ "0 -960 960 960", "M86-125v-708h126v708H86Zm661-1v-708h126v708H747ZM279-269l151-412h100l152 412h-93l-33-94H406l-34 94h-93Zm152-174h98l-48-138h-3l-47 138Z" ],
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
