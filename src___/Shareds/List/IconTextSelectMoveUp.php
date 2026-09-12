<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconTextSelectMoveUp
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-28h616v28H172Zm294-134v-283l-90 89-20-20 124-124 124 124-20 20-90-89v283h-28ZM172-760v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-160v-40h640v40H160Zm300-140v-274.69l-84 83L347.69-520 480-652.31 612.31-520 584-491.69l-84-83V-300h-40ZM160-760v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-140v-60h680v60H140Zm310-150v-260.85l-74 73L333.85-520 480-666.15 626.15-520 584-477.85l-74-73V-290h-60ZM140-760v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-120v-80h720v80H120Zm320-160v-247l-64 63-56-56 160-160 160 160-56 56-64-63v247h-80ZM120-760v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M114.5-104.7v-91h731v91h-731Zm320-169.8v-239.35l-58.5 57.5L312.11-520 480-687.89 647.89-520 584-456.35l-58.5-57.5v239.35h-91Zm-320-489.8v-91h731v91h-731Z" ],
			600 => [ "0 -960 960 960", "M107-83.82v-106.01h746v106.01H107ZM427-267v-228.91l-51 50L301.35-520 480-698.65 658.65-520 584-445.91l-51-50V-267H427ZM107-770.17v-106.01h746v106.01H107Z" ],
			700 => [ "0 -960 960 960", "M97-56v-126h766v126H97Zm320-201v-215l-41 40-89-88 193-193 193 193-89 88-41-40v215H417ZM97-778v-126h766v126H97Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconTextSelectMoveUp" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
