<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconVerticalAlignCenter
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-132v-220l-90 90-20-20 124-124 124 124-20 20-90-90v220h-28ZM212-466v-28h536v28H212Zm268-88L356-678l20-20 90 90v-220h28v220l90-90 20 20-124 124Z" ],
			200 => [ "0 -960 960 960", "M460-120v-208l-84 84-28.31-28.31L480-404.62l132.31 132.31L584-244l-84-84v208h-40ZM200-460v-40h560v40H200Zm280-95.38L347.69-687.69 376-716l84 84v-208h40v208l84-84 28.31 28.31L480-555.38Z" ],
			300 => [ "0 -960 960 960", "M450-100v-188l-74 74-42.15-42.16L480-402.31l146.15 146.15L584-214l-74-74v188h-60ZM180-450v-60h600v60H180Zm300-107.69L333.85-703.84 376-746l74 74v-188h60v188l74-74 42.15 42.16L480-557.69Z" ],
			400 => [ "0 -960 960 960", "M440-80v-168l-64 64-56-56 160-160 160 160-56 56-64-64v168h-80ZM160-440v-80h640v80H160Zm320-120L320-720l56-56 64 64v-168h80v168l64-64 56 56-160 160Z" ],
			500 => [ "0 -960 960 960", "M434.5-60.87V-221.7L376-163.2l-63.65-63.65L480-394.5l167.65 167.65L584-163.2l-58.5-58.5v160.83h-91ZM151.87-434.5v-91h656.26v91H151.87ZM480-565.5 312.35-733.15 376-796.8l58.5 58.5v-160.83h91v160.83l58.5-58.5 63.65 63.65L480-565.5Z" ],
			600 => [ "0 -960 960 960", "M427-34.78v-151.04l-51 51-74.09-74.09L480-387l178.09 178.09L584-134.82l-51-51v151.04H427ZM140.78-427v-106h678.44v106H140.78ZM480-573 301.91-751.09 376-825.18l51 51v-151.04h106v151.04l51-51 74.09 74.09L480-573Z" ],
			700 => [ "0 -960 960 960", "M417 0v-138l-41 41-88-88 192-192 192 192-88 88-41-41V0H417ZM126-417v-126h708v126H126Zm354-166L288-775l88-88 41 41v-138h126v138l41-41 88 88-192 192Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconVerticalAlignCenter" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
