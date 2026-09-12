<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowForward
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M694-466H212v-28h482L460-728l20-20 268 268-268 268-20-20 234-234Z" ],
			200 => [ "0 -960 960 960", "M683.15-460H200v-40h483.15L451.46-731.69 480-760l280 280-280 280-28.54-28.31L683.15-460Z" ],
			300 => [ "0 -960 960 960", "M665.08-450H180v-60h485.08L437.23-737.85 480-780l300 300-300 300-42.77-42.15L665.08-450Z" ],
			400 => [ "0 -960 960 960", "M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" ],
			500 => [ "0 -960 960 960", "M633.85-434.5H151.87v-91h481.98L415.11-744.24 480-808.13 808.13-480 480-151.87l-64.89-63.89L633.85-434.5Z" ],
			600 => [ "0 -960 960 960", "M615.91-427H140.78v-106h475.13L404.35-744.57 480-819.22 819.22-480 480-140.78l-75.65-74.65L615.91-427Z" ],
			700 => [ "0 -960 960 960", "M592-417H126v-126h466L390-745l90-89 354 354-354 354-90-89 202-202Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowForward" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
