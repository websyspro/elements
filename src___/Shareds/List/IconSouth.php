<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSouth
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-132 234-378l19-19 213 213v-645h28v644l213-213 19 20-246 246Z" ],
			200 => [ "0 -960 960 960", "M480-120 226.15-373.85l27.54-27.53L460-195.31v-645.46h40v644.69l206.31-206.3 27.54 28.53L480-120Z" ],
			300 => [ "0 -960 960 960", "M480-100 213.08-366.92l41.77-41.77L450-214.15v-646.23h60v645.84l195.15-195.15 41.77 42.77L480-100Z" ],
			400 => [ "0 -960 960 960", "M480-80 200-360l56-56 184 183v-647h80v647l184-184 56 57L480-80Z" ],
			500 => [ "0 -960 960 960", "M480-71.87 191.87-360l63.65-63.89L434.5-245.44v-642.21h91v642.21l178.98-179.21L768.37-360 480-71.87Z" ],
			600 => [ "0 -960 960 960", "M480-60.78 180.78-360l74.09-74.65L427-262.39v-635.7h106v635.7l172.13-172.7L779.78-360 480-60.78Z" ],
			700 => [ "0 -960 960 960", "M480-46 166-360l88-89 163 164v-627h126v627l163-164 89 89L480-46Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSouth" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
