<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconShiftLock
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M372-312v-140H230l250-346 250 346H588v140H372Zm28-28h160v-140h111L480-749 289-480h111v140Zm80-205ZM212-184v-28h536v28H212Z" ],
			200 => [ "0 -960 960 960", "M360-295.38v-153.85H204.61L480-816.92l275.39 367.69H600v153.85H360Zm40-40h160v-153.85h111L480-750.15 289-489.23h111v153.85Zm80-207.77ZM200-160v-40h560v40H200Z" ],
			300 => [ "0 -960 960 960", "M340-267.69v-176.93H162.31L480-848.46l317.69 403.84H620v176.93H340Zm60-60h160v-176.92h111L480-752.08 289-504.61h111v176.92Zm80-212.39ZM180-120v-60h600v60H180Z" ],
			400 => [ "0 -960 960 960", "M320-240v-200H120l360-440 360 440H640v200H320Zm80-80h160v-200h111L480-754 289-520h111v200Zm80-217ZM160-80v-80h640v80H160Z" ],
			500 => [ "0 -960 960 960", "M315.22-235.22v-200H109.96L480-887.65l370.04 452.43H644.78v200H315.22Zm91-91h147.56v-200h104.07L480-744.2 302.15-526.22h104.07v200ZM480-539.15ZM151.87-66.37v-91h656.26v91H151.87Z" ],
			600 => [ "0 -960 960 960", "M308.7-228.7v-200H96.26L480-898.09 863.74-428.7H651.3v200H308.7Zm106-106h130.6v-200h94.61L480-730.82 320.09-534.7h94.61v200ZM480-542.09ZM140.78-47.78v-106h678.44v106H140.78Z" ],
			700 => [ "0 -960 960 960", "M300-220v-200H78l402-492 402 492H660v200H300Zm126-126h108v-200h82L480-713 344-546h82v200Zm54-200ZM126-23v-126h708v126H126Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconShiftLock" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
