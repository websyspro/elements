<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconViewHeadline
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M186-392v-28h588v28H186Zm0 148v-28h588v28H186Zm0-296v-28h588v28H186Zm0-148v-28h588v28H186Z" ],
			200 => [ "0 -960 960 960", "M180-384.62v-40h600v40H180Zm0 150.77v-40h600v40H180Zm0-301.53v-40h600v40H180Zm0-150.77v-40h600v40H180Z" ],
			300 => [ "0 -960 960 960", "M170-372.31v-60h620v60H170Zm0 155.39v-60h620v60H170Zm0-310.77v-60h620v60H170Zm0-155.39v-60h620v60H170Z" ],
			400 => [ "0 -960 960 960", "M160-360v-80h640v80H160Zm0 160v-80h640v80H160Zm0-320v-80h640v80H160Zm0-160v-80h640v80H160Z" ],
			500 => [ "0 -960 960 960", "M154.5-349v-91h651v91h-651Zm0 171v-91h651v91h-651Zm0-342v-91h651v91h-651Zm0-171v-91h651v91h-651Z" ],
			600 => [ "0 -960 960 960", "M147-334v-106h666v106H147Zm0 186v-106h666v106H147Zm0-372v-106h666v106H147Zm0-186v-106h666v106H147Z" ],
			700 => [ "0 -960 960 960", "M137-314v-126h686v126H137Zm0 206v-126h686v126H137Zm0-412v-126h686v126H137Zm0-206v-126h686v126H137Z" ],
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
