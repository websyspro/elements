<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconCallReceived
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M252-252v-348h28v300l448-448 20 20-448 448h300v28H252Z" ],
			200 => [ "0 -960 960 960", "M240-240v-360h40v291.69L731.69-760 760-731.69 308.31-280H600v40H240Z" ],
			300 => [ "0 -960 960 960", "M220-220v-380h60v277.85L737.85-780 780-737.85 322.15-280H600v60H220Z" ],
			400 => [ "0 -960 960 960", "M200-200v-400h80v264l464-464 56 56-464 464h264v80H200Z" ],
			500 => [ "0 -960 960 960", "M192.59-192.11v-411h91v256.35l460.89-460.89L808.13-744 347.24-283.11h256.35v91h-411Z" ],
			600 => [ "0 -960 960 960", "M182.48-181.35v-426h106v245.91l456.65-456.65L819.22-744 362.57-287.35h245.91v106h-426Z" ],
			700 => [ "0 -960 960 960", "M169-167v-446h126v232l451-451 88 88-451 451h232v126H169Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconCallReceived" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
