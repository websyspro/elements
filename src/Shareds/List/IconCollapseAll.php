<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconCollapseAll
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m296-116-20-20 204-204 204 204-20 20-184-184-184 184Zm184-504L276-824l20-20 184 184 184-184 20 20-204 204Z" ],
			200 => [ "0 -960 960 960", "M296-107.69 267.69-136 480-348.31 692.31-136 664-107.69l-184-184-184 184Zm184-504L267.69-824 296-852.31l184 184 184-184L692.31-824 480-611.69Z" ],
			300 => [ "0 -960 960 960", "M296-93.85 253.85-136 480-362.15 706.15-136 664-93.85l-184-184-184 184Zm184-504L253.85-824 296-866.15l184 184 184-184L706.15-824 480-597.85Z" ],
			400 => [ "0 -960 960 960", "m296-80-56-56 240-240 240 240-56 56-184-184L296-80Zm184-504L240-824l56-56 184 184 184-184 56 56-240 240Z" ],
			500 => [ "0 -960 960 960", "M296-72.35 232.35-136 480-383.65 727.65-136 664-72.35l-184-184-184 184Zm184-504L232.35-824 296-887.65l184 184 184-184L727.65-824 480-576.35Z" ],
			600 => [ "0 -960 960 960", "M296-61.91 221.91-136 480-394.09 738.09-136 664-61.91l-184-184-184 184Zm184-504L221.91-824 296-898.09l184 184 184-184L738.09-824 480-565.91Z" ],
			700 => [ "0 -960 960 960", "m296-48-88-88 272-272 272 272-88 88-184-184L296-48Zm184-504L208-824l88-88 184 184 184-184 88 88-272 272Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconCollapseAll" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
