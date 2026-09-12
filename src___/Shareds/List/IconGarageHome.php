<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconGarageHome
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-172v-402l268-203 268 203v402h-28v-388L480-742 240-560v388h-28Zm122-29h292v-132H334v132Zm0-160h292v-132H334v132Zm-28 188v-348h348v348H306Z" ],
			200 => [ "0 -960 960 960", "M200-160v-420l280-211.54L760-580v420h-40v-400L480-741.54 240-560v400h-40Zm140-40.77h280v-120H340v120Zm0-160h280v-120H340v120Zm-40 200v-360h360v360H300Z" ],
			300 => [ "0 -960 960 960", "M180-140v-450l300-225.77L780-590v450h-60v-420L480-740.77 240-560v420h-60Zm170-60.38h260v-100.01H350v100.01Zm0-160h260v-100.01H350v100.01Zm-60 219.99v-379.99h380v379.99H290Z" ],
			400 => [ "0 -960 960 960", "M160-120v-480l320-240 320 240v480h-80v-440L480-740 240-560v440h-80Zm200-80h240v-80H360v80Zm0-160h240v-80H360v80Zm-80 240v-400h400v400H280Z" ],
			500 => [ "0 -960 960 960", "M151.87-111.87v-492.28L480-850.28l328.13 246.13v492.28h-91v-446.7L480-736.41 242.87-558.57v446.7h-91Zm218.41-87.41h219.44v-74.5H370.28v74.5Zm0-161.92h219.44v-74.5H370.28v74.5Zm-87.41 249.33v-411h394.26v411H282.87Z" ],
			600 => [ "0 -960 960 960", "M140.78-100.78V-609.8L480-864.31 819.22-609.8v509.02h-106v-455.83L480-731.52 246.78-556.61v455.83h-106Zm243.53-97.52h191.38v-67H384.31v67Zm0-164.53h191.38v-67H384.31v67Zm-97.53 262.05v-426h386.44v426H286.78Z" ],
			700 => [ "0 -960 960 960", "M126-86v-531.33L480-883l354 265.67V-86H708v-468L480-725 252-554v468H126Zm277-111h154v-57H403v57Zm0-168h154v-57H403v57ZM292-86v-446h376v446H292Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconGarageHome" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
