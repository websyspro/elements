<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconKeyboardCapslock
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M266-266v-28h428v28H266Zm214-434 204 204-20 20-184-184-184 184-20-20 204-204Z" ],
			200 => [ "0 -960 960 960", "M260-260v-40h440v40H260Zm220-448.31L692.31-496 664-467.69l-184-184-184 184L267.69-496 480-708.31Z" ],
			300 => [ "0 -960 960 960", "M250-250v-60h460v60H250Zm230-472.15L706.15-496 664-453.85l-184-184-184 184L253.85-496 480-722.15Z" ],
			400 => [ "0 -960 960 960", "M240-240v-80h480v80H240Zm240-496 240 240-56 56-184-184-184 184-56-56 240-240Z" ],
			500 => [ "0 -960 960 960", "M234.5-234.5v-91h491v91h-491ZM480-743.65 727.65-496 664-432.35l-184-184-184 184L232.35-496 480-743.65Z" ],
			600 => [ "0 -960 960 960", "M227-227v-106h506v106H227Zm253-527.09L738.09-496 664-421.91l-184-184-184 184L221.91-496 480-754.09Z" ],
			700 => [ "0 -960 960 960", "M217-217v-126h526v126H217Zm263-551 272 272-88 88-184-184-184 184-88-88 272-272Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconKeyboardCapslock" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
