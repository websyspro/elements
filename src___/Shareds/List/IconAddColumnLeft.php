<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAddColumnLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M800-200v-560H531v560h269Zm-588 28v-114h28v86h263v-560H240v86h-28v-114h616v616H212Zm291-308Zm28 0h-28 28Zm0 0Zm-319 94v-80h-80v-28h80v-80h28v80h80v28h-80v80h-28Z" ],
			200 => [ "0 -960 960 960", "M800-200v-560H537.69v560H800Zm-600 40v-124.62h40V-200h257.69v-560H240v84.62h-40V-800h640v640H200Zm297.69-320Zm40 0h-40 40Zm0 0ZM200-380v-80h-80v-40h80v-80h40v80h80v40h-80v80h-40Z" ],
			300 => [ "0 -960 960 960", "M800-200v-560H548.85v560H800Zm-620 60v-142.31h60V-200h248.85v-560H240v82.31h-60V-820h680v680H180Zm308.85-340Zm60 0h-60 60Zm0 0ZM180-370v-80h-80v-60h80v-80h60v80h80v60h-80v80h-60Z" ],
			400 => [ "0 -960 960 960", "M800-200v-560H560v560h240Zm-640 80v-160h80v80h240v-560H240v80h-80v-160h720v720H160Zm320-360Zm80 0h-80 80Zm0 0ZM160-360v-80H80v-80h80v-80h80v80h80v80h-80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M797.37-202.63v-554.74H565.74v554.74h231.63Zm-645.5 90.76v-167.41h90.76v76.65h232.35v-554.74H242.63v76.89h-90.76v-167.65h736.26v736.26H151.87ZM474.98-480Zm90.76 0h-90.76 90.76Zm0 0ZM151.87-354.5v-80h-80v-90.76h80v-80h90.76v80h80v90.76h-80v80h-90.76Z" ],
			600 => [ "0 -960 960 960", "M793.78-206.22v-547.56H573.57v547.56h220.21Zm-653 105.44V-278.3h105.44v72.08h221.91v-547.56H246.22v72.65H140.78v-178.09h758.44v758.44H140.78ZM468.13-480Zm105.44 0H468.13h105.44Zm0 0ZM140.78-347v-80h-80v-105.44h80v-80h105.44v80h80V-427h-80v80H140.78Z" ],
			700 => [ "0 -960 960 960", "M789-211v-538H584v538h205ZM126-86v-191h125v66h208v-538H251v67H126v-192h788v788H126Zm333-394Zm125 0H459h125Zm0 0ZM126-337v-80H46v-125h80v-80h125v80h80v125h-80v80H126Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAddColumnLeft" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
