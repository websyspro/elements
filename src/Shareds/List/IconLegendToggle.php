<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLegendToggle
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M186-238v-28h588v28H186Zm0-148v-28h588v28H186Zm0-168v-33l213-130 201 143 174-124v35L600-540 398-683 186-554Z" ],
			200 => [ "0 -960 960 960", "M180-229.23v-40h600v40H180ZM180-380v-40h600v40H180Zm0-166.15v-47.08l219.23-133.69L600-584.15l180-128.16v49.54L600-535.38 397.77-678.62 180-546.15Z" ],
			300 => [ "0 -960 960 960", "M170-214.62v-59.99h620v59.99H170ZM170-370v-60h620v60H170Zm0-163.08v-70.53l229.62-139.85L600-601.08l190-135.07v73.77L600-527.69 397.38-671.31 170-533.08Z" ],
			400 => [ "0 -960 960 960", "M160-200v-80h640v80H160Zm0-160v-80h640v80H160Zm0-160v-94l240-146 200 142 200-142v98L600-520 397-664 160-520Z" ],
			500 => [ "0 -960 960 960", "M154.5-189v-91h651v91h-651Zm0-165.5v-91h651v91h-651Zm0-162.39V-623.8l245.74-149.35L600-631.39l205.5-145.83v111.39L600-519.76 396.76-664 154.5-516.89Z" ],
			600 => [ "0 -960 960 960", "M147-174v-106h666v106H147Zm0-173v-106h666v106H147Zm0-165.65v-124.53l253.57-153.91L600-649.65 813-800.7v129.66L600-519.43 396.43-664 147-512.65Z" ],
			700 => [ "0 -960 960 960", "M137-154v-126h686v126H137Zm0-183v-126h686v126H137Zm0-170v-148l264-160 199 141 223-158v154L600-519 396-664 137-507Z" ],
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
