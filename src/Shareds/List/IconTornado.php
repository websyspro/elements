<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconTornado
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M130-788h700L480-184 130-788Zm49 28 85 146h432l85-146H179Zm101 174 99 172h202l99-172H280Zm115 200 85 146 85-146H395Z" ],
			200 => [ "0 -960 960 960", "M109.23-800h741.54L480-160 109.23-800ZM179-760l81.31 140h439.38L781-760H179Zm104.46 180 92.08 160h208.92l92.08-160H283.46Zm115.23 200L480-240l81.31-140H398.69Z" ],
			300 => [ "0 -960 960 960", "M74.62-820h810.76L480-120 74.62-820ZM179-760l75.15 130h451.7L781-760H179Zm110.23 190 80.54 140h220.46l80.54-140H289.23Zm115.62 200L480-240l75.15-130h-150.3Z" ],
			400 => [ "0 -960 960 960", "M40-840h880L480-80 40-840Zm139 80 69 120h464l69-120H179Zm116 200 69 120h232l69-120H295Zm116 200 69 120 69-120H411Z" ],
			500 => [ "0 -960 960 960", "M31.63-844.78h896.74L480-70.43 31.63-844.78Zm158.13 91 62.31 108.28h455.86l62.31-108.28H189.76ZM305.28-554.5l62.79 109h223.86l62.79-109H305.28Zm116 200L480-252.44l58.72-102.06H421.28Z" ],
			600 => [ "0 -960 960 960", "M20.22-851.3h919.56L480-57.39 20.22-851.3Zm184.22 106 53.17 92.3h444.78l53.17-92.3H204.44ZM319.31-547l54.3 94h212.78l54.3-94H319.31Zm116 200L480-269.39 524.69-347h-89.38Z" ],
			700 => [ "0 -960 960 960", "M5-860h950L480-40 5-860Zm219 126 41 71h430l41-71H224Zm114 197 43 74h198l43-74H338Zm116 200 26 45 26-45h-52Z" ],
		};
	}

	public static function create(
		int $size,
		int $weight = 300,
		string $fill = "#000"
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->add( Path::create(
				$path
			))
			->props(
				[
					"xmlns" => "http://www.w3.org/2000/svg",
					"viewBox" => "{$viewBox}",
					"height" => "{$size}",
					"width" => "{$size}",
					"fill" => "{$fill}"
				]
			);
	}
}
