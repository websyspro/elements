<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconBolt
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m422-232 207-248H469l29-227-185 267h139l-30 208Zm-42 94 40-274H259l281-405-39 309h188L380-138Zm91-332Z" ],
			200 => [ "0 -960 960 960", "m422-232 207-248H469l29-227-185 267h139l-30 208Zm-55.85 107.38 40-275.38h-170l299.23-431.54h18.47L514.62-520h200l-330 395.38h-18.47ZM471-470Z" ],
			300 => [ "0 -960 960 960", "m422-232 207-248H469l29-227-185 267h139l-30 208Zm-78.92 129.69 40-277.69h-185l329.61-475.77h49.23L537.31-540H757.3L392.31-102.31h-49.23ZM471-470Z" ],
			400 => [ "0 -960 960 960", "m422-232 207-248H469l29-227-185 267h139l-30 208ZM320-80l40-280H160l360-520h80l-40 320h240L400-80h-80Zm151-390Z" ],
			500 => [ "0 -960 960 960", "m425.59-237.02 202.45-243.46H470.43l28.05-220.06-180.94 261.02h137.33l-29.28 202.5ZM312.83-70.91l40-280H148.04l372.68-538.18H611l-40 320h246.46L402.87-70.91h-90.04Zm160.08-398.37Z" ],
			600 => [ "0 -960 960 960", "m430.48-243.87 196.26-237.26H472.39l26.74-210.61-175.39 252.87h135.04l-28.3 195ZM303.04-58.52l40-280h-211.3L521.7-901.48H626l-40 320h255.26L406.78-58.52H303.04ZM475.52-468.3Z" ],
			700 => [ "0 -960 960 960", "m437-253 188-229H475l25-198-168 242h132l-27 185ZM290-42l40-280H110l413-596h123l-40 320h267L412-42H290Zm189-425Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconBolt" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
