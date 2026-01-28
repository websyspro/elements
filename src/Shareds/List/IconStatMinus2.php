<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconStatMinus2
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-238 276-442l20-20 184 184 184-184 20 20-204 204Zm0-238L276-680l20-20 184 184 184-184 20 20-204 204Z" ],
			200 => [ "0 -960 960 960", "M480-229.23 267.69-441.54 296-469.85l184 183.77 184-183.77 28.31 28.31L480-229.23Zm0-238.46L267.69-680 296-708.31l184 183.77 184-183.77L692.31-680 480-467.69Z" ],
			300 => [ "0 -960 960 960", "M480-214.62 253.85-440.77 296-482.92l184 183.38 184-183.38 42.15 42.15L480-214.62Zm0-239.23L253.85-680 296-722.15l184 183.38 184-183.38L706.15-680 480-453.85Z" ],
			400 => [ "0 -960 960 960", "M480-200 240-440l56-56 184 183 184-183 56 56-240 240Zm0-240L240-680l56-56 184 183 184-183 56 56-240 240Z" ],
			500 => [ "0 -960 960 960", "M480-188.52 232.35-436.41 296-500.07l184 183.24 184-183.24 63.65 63.66L480-188.52Zm0-247.41L232.35-683.59 296-747.48l184 183.24 184-183.24 63.65 63.89L480-435.93Z" ],
			600 => [ "0 -960 960 960", "M480-172.87 221.91-431.52 296-505.61l184 183.57 184-183.57 74.09 74.09L480-172.87Zm0-257.52L221.91-688.48 296-763.13l184 183.56 184-183.56 74.09 74.65L480-430.39Z" ],
			700 => [ "0 -960 960 960", "M480-152 208-425l88-88 184 184 184-184 88 88-272 273Zm0-271L208-695l88-89 184 184 184-184 88 89-272 272Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconStatMinus2" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
