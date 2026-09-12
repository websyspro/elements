<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconPlannerReview
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M503-106 359-770 251-266H106v-28h122l112-520h38l144 664 97-424h41l72 280h122v28H710l-70-274-99 434h-38Z" ],
			200 => [ "0 -960 960 960", "M497.69-100 359.23-740.46 255.85-260H100v-40h123.38l112.24-520h47.46L522-177.23 614.62-580h50l72 280H860v40H705.38l-64.92-254.15L545.38-100h-47.69Z" ],
			300 => [ "0 -960 960 960", "M488.85-90 359.62-691.23 263.92-250H90v-60h125.69l112.62-520h63.23L522-222.61 607.31-590h65l72 280H870v60H697.69l-56.46-221.08L552.69-90h-63.84Z" ],
			400 => [ "0 -960 960 960", "M480-80 360-642l-88 402H80v-80h128l113-520h79l122 572 78-332h80l72 280h128v80H690l-48-188-82 348h-80Z" ],
			500 => [ "0 -960 960 960", "M477.13-76.41 360-624.78l-85.13 388.37H76.41v-87.18h128.72l112.76-520h84.98L522-284.98l75.13-318.61h85.74l72 280h128.72v87.18H687.13L642-412.93 562.87-76.41h-85.74Z" ],
			600 => [ "0 -960 960 960", "M473.22-71.52 360-601.3l-81.22 369.78H71.52v-96.96h129.7l112.43-520h93.13L522-308.13l71.22-300.35h93.56l72 280h129.7v96.96H683.22L642-392.39 566.78-71.52h-93.56Z" ],
			700 => [ "0 -960 960 960", "M468-65 360-570l-76 345H65v-110h131l112-520h104l110 516 66-276h104l72 280h131v110H678l-36-140-70 300H468Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconPlannerReview" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
