<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconUnfoldLess
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m356-196-20-20 144-144 144 144-20 20-124-124-124 124Zm124-404L336-744l20-20 124 124 124-124 20 20-144 144Z" ],
			200 => [ "0 -960 960 960", "M356-187.69 327.69-216 480-368.31 632.31-216 604-187.69l-124-124-124 124Zm124-404L327.69-744 356-772.31l124 124 124-124L632.31-744 480-591.69Z" ],
			300 => [ "0 -960 960 960", "M356-173.85 313.85-216 480-382.15 646.15-216 604-173.85l-124-124-124 124Zm124-404L313.85-744 356-786.15l124 124 124-124L646.15-744 480-577.85Z" ],
			400 => [ "0 -960 960 960", "m356-160-56-56 180-180 180 180-56 56-124-124-124 124Zm124-404L300-744l56-56 124 124 124-124 56 56-180 180Z" ],
			500 => [ "0 -960 960 960", "M356-152.35 292.35-216 480-403.65 667.65-216 604-152.35l-124-124-124 124Zm124-404L292.35-744 356-807.65l124 124 124-124L667.65-744 480-556.35Z" ],
			600 => [ "0 -960 960 960", "M356-141.91 281.91-216 480-414.09 678.09-216 604-141.91l-124-124-124 124Zm124-404L281.91-744 356-818.09l124 124 124-124L678.09-744 480-545.91Z" ],
			700 => [ "0 -960 960 960", "m356-128-88-88 212-212 212 212-88 88-124-124-124 124Zm124-404L268-744l88-88 124 124 124-124 88 88-212 212Z" ],
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
