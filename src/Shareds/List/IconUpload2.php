<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconUpload2
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-132v-28h536v28H212Zm181-148v-269H271l209-279 208 279H566v269H393Zm28-28h117v-270h92L480-782 329-578h92v270Zm59-270Z" ],
			200 => [ "0 -960 960 960", "M200-120v-40h560v40H200Zm185.38-150.77v-271.54H254.62L480-840l224.62 297.69H573.85v271.54H385.38Zm40-40h108.47v-272.31h88.3L480-774.62 337.08-583.08h88.3v272.31ZM480-583.08Z" ],
			300 => [ "0 -960 960 960", "M180-100v-60h600v60H180Zm192.69-155.39v-275.76H227.31L480-860l252.31 328.85H586.92v275.76H372.69Zm60-59.99h94.23v-276.16h82.16L480-762.31 350.54-591.54h82.15v276.16ZM480-591.54Z" ],
			400 => [ "0 -960 960 960", "M160-80v-80h640v80H160Zm200-160v-280H200l280-360 280 360H600v280H360Zm80-80h80v-280h76L480-750 364-600h76v280Zm40-280Z" ],
			500 => [ "0 -960 960 960", "M151.87-71.87v-91h656.26v91H151.87Zm197.13-171v-265.65H182.3L480-888.13l297.7 379.61H611v265.65H349Zm91-91h80v-265.41h70.98L480-740.2 369.02-599.28H440v265.41Zm40-265.41Z" ],
			600 => [ "0 -960 960 960", "M140.78-60.78v-106h678.44v106H140.78Zm193.22-186v-246.09H158.17L480-899.22l321.83 406.35H626v246.09H334Zm106-106h80V-598.3h64.13L480-726.82 375.87-598.3H440v245.52Zm40-245.52Z" ],
			700 => [ "0 -960 960 960", "M126-46v-126h708v126H126Zm188-206v-220H126l354-442 354 442H646v220H314Zm126-126h80v-219h55l-95-112-95 112h55v219Zm40-219Z" ],
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
