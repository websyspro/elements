<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSpellcheck
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M564-116 430-250l20-20 114 114 228-228 20 20-248 248ZM160-320l188-520h30l186 520h-32l-54-158H246l-56 158h-30Zm96-182h214L362-800h-2L256-502Z" ],
			200 => [ "0 -960 960 960", "M564-107.69 421.69-250 450-278.31l114 114 227.54-227.54 28.31 28.31L564-107.69ZM150.77-320l189.38-520h44.77l187.85 520h-45.85l-52.15-152H247.85l-53.7 152h-43.38ZM262-508h200.62L362-787.08h-2.46L262-508Z" ],
			300 => [ "0 -960 960 960", "M564-93.85 407.85-250 450-292.15l114 114 226.77-226.77 42.15 42.15L564-93.85ZM135.39-320l191.69-520h69.38l190.92 520h-68.92l-49.07-142H250.92l-49.84 142h-65.69ZM272-518h178.31L362-765.54h-3.23L272-518Z" ],
			400 => [ "0 -960 960 960", "M564-80 394-250l56-56 114 114 226-226 56 56L564-80ZM120-320l194-520h94l194 520h-92l-46-132H254l-46 132h-88Zm162-208h156l-76-216h-4l-76 216Z" ],
			500 => [ "0 -960 960 960", "M564-72.35 390.41-245.93l62.46-62.7L564-197.5l223.13-223.13 62.46 62.7L564-72.35ZM115.22-320l195.19-520H412.3l195.2 520H507.37l-45.52-130.8H254.72L209.2-320h-93.98ZM283.2-529.43h152.17l-74.09-210.98h-4L283.2-529.43Z" ],
			600 => [ "0 -960 960 960", "M564-61.91 385.52-240.39l71.26-71.83L564-205l219.22-219.22 71.26 71.83L564-61.91ZM108.7-320l196.82-520h112.65L615-320H503.78l-44.87-129.17H255.7L210.83-320H108.7Zm176.13-211.39h146.95L360.3-735.52h-4l-71.47 204.13Z" ],
			700 => [ "0 -960 960 960", "M564-48 379-233l83-84 102 102 214-214 83 84L564-48ZM100-320l199-520h127l199 520H499l-44-127H257l-44 127H100Zm187-214h140l-68-195h-4l-68 195Z" ],
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
