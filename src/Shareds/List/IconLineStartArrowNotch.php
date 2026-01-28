<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLineStartArrowNotch
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M458-313 195-480l263-167-84 153h480v28H374l84 153Z" ],
			200 => [ "0 -960 960 960", "M472.31-286.92 168.46-480l303.85-193.08L376.08-500H860v40H376.08l96.23 173.08Z" ],
			300 => [ "0 -960 960 960", "M496.15-243.46 124.23-480l371.92-236.54L379.54-510H870v60H379.54l116.61 206.54Z" ],
			400 => [ "0 -960 960 960", "M520-200 80-480l440-280-137 240h497v80H383l137 240Z" ],
			500 => [ "0 -960 960 960", "M524.78-191.39 71.15-480l453.63-288.61-131.5 243.11H885.5v91H393.28l131.5 243.11Z" ],
			600 => [ "0 -960 960 960", "M531.3-179.65 59.09-480 531.3-780.35 407.31-533H893v106H407.31L531.3-179.65Z" ],
			700 => [ "0 -960 960 960", "M540-164 43-480l497-316-114 253h477v126H426l114 253Z" ],
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
