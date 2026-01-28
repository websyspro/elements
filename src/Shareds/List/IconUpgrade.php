<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconUpgrade
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M306-212v-28h348v28H306Zm160-128v-356L335-565l-19-19 164-164 164 164-19 19-131-131v356h-28Z" ],
			200 => [ "0 -960 960 960", "M300-200v-40h360v40H300Zm160-135.38v-349.31L335.23-560.15l-27.54-27.54L480-760l172.31 172.31-27.54 27.54L500-684.69v349.31h-40Z" ],
			300 => [ "0 -960 960 960", "M290-180v-60h380v60H290Zm160-147.69v-338.16L335.62-552.08l-41.77-41.77L480-780l186.15 186.15-41.77 41.77L510-665.85v338.16h-60Z" ],
			400 => [ "0 -960 960 960", "M280-160v-80h400v80H280Zm160-160v-327L336-544l-56-56 200-200 200 200-56 56-104-103v327h-80Z" ],
			500 => [ "0 -960 960 960", "M274.5-151.87v-91h411v91h-411Zm160-171v-321.26L336-546.39l-63.65-63.65L480-817.7l207.65 207.66L624-546.39l-98.5-97.74v321.26h-91Z" ],
			600 => [ "0 -960 960 960", "M267-140.78v-106h426v106H267Zm160-186v-313.44l-91 90.57-74.09-74.09L480-841.83l218.09 218.09L624-549.65l-91-90.57v313.44H427Z" ],
			700 => [ "0 -960 960 960", "M257-126v-126h446v126H257Zm160-206v-303l-81 81-88-88 232-232 232 232-88 88-81-81v303H417Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconUpgrade" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
