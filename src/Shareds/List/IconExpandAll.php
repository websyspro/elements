<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconExpandAll
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-116 276-320l20-20 184 182 184-182 20 20-204 204ZM296-620l-20-20 204-204 204 204-20 20-184-182-184 182Z" ],
			200 => [ "0 -960 960 960", "M480-107.69 267.69-320l28.54-28.54L480-166.31l183.77-182.23L692.31-320 480-107.69Zm-183.54-504L267.69-640 480-852.31 692.31-640l-28.77 28.31-183.54-182-183.54 182Z" ],
			300 => [ "0 -960 960 960", "M480-93.85 253.85-320l42.77-42.77L480-180.15l183.38-182.62L706.15-320 480-93.85Zm-182.77-504L253.85-640 480-866.15 706.15-640l-43.38 42.15-182.77-182-182.77 182Z" ],
			400 => [ "0 -960 960 960", "M480-80 240-320l57-57 183 183 183-183 57 57L480-80ZM298-584l-58-56 240-240 240 240-58 56-182-182-182 182Z" ],
			500 => [ "0 -960 960 960", "M480-72.35 232.35-320l64.41-64.41 183.24 183 183.24-183L727.65-320 480-72.35Zm-182.48-504L232.35-640 480-887.65 727.65-640l-65.17 63.65L480-758.59 297.52-576.35Z" ],
			600 => [ "0 -960 960 960", "M480-61.91 221.91-320l74.52-74.52 183.57 183 183.57-183L738.09-320 480-61.91Zm-183.13-504L221.91-640 480-898.09 738.09-640l-74.96 74.09L480-748.48 296.87-565.91Z" ],
			700 => [ "0 -960 960 960", "M480-48 208-320l88-88 184 183 184-183 88 88L480-48ZM296-552l-88-88 272-272 272 272-88 88-184-183-184 183Z" ],
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
