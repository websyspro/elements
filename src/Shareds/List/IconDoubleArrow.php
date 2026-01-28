<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconDoubleArrow
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m296-226 182-254-182-254h34l182 254-182 254h-34Zm230 0 182-254-182-254h34l182 254-182 254h-34Z" ],
			200 => [ "0 -960 960 960", "m283.54-220 186.15-260-186.15-260h48.77l186.15 260-186.15 260h-48.77Zm231.84 0 186.16-260-186.16-260h48.77l186.16 260-186.16 260h-48.77Z" ],
			300 => [ "0 -960 960 960", "m262.77-210 193.08-270-193.08-270h73.38l193.08 270-193.08 270h-73.38Zm234.92 0 193.08-270-193.08-270h73.39l193.07 270-193.07 270h-73.39Z" ],
			400 => [ "0 -960 960 960", "m242-200 200-280-200-280h98l200 280-200 280h-98Zm238 0 200-280-200-280h98l200 280-200 280h-98Z" ],
			500 => [ "0 -960 960 960", "M224.78-194.5 428.37-480 224.78-765.5h111.63L540-480 336.41-194.5H224.78Zm251.63 0L680-480 476.41-765.5H587.8L791.63-480 587.8-194.5H476.41Z" ],
			600 => [ "0 -960 960 960", "m201.3-187 208.48-293L201.3-773h130.22L540-480 331.52-187H201.3Zm270.22 0L680-480 471.52-773h129.66l209.04 293-209.04 293H471.52Z" ],
			700 => [ "0 -960 960 960", "m170-177 215-303-215-303h155l215 303-215 303H170Zm295 0 215-303-215-303h154l216 303-216 303H465Z" ],
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
