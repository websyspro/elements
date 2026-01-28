<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconPlaylistAddCheck
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M146-346v-28h268v28H146Zm0-160v-28h428v28H146Zm0-160v-28h428v28H146Zm508 430L548-342l20-20 86 86 170-170 20 20-190 190Z" ],
			200 => [ "0 -960 960 960", "M140-340v-40h280v40H140Zm0-160v-40h440v40H140Zm0-160v-40h440v40H140Zm514 432.31L539.69-342 568-370.31l86 85.54 170-170L852.31-426 654-227.69Z" ],
			300 => [ "0 -960 960 960", "M130-330v-60h300v60H130Zm0-160v-60h460v60H130Zm0-160v-60h460v60H130Zm524 436.15L525.85-342 568-384.15l86 84.77 170-170L866.15-426 654-213.85Z" ],
			400 => [ "0 -960 960 960", "M120-320v-80h320v80H120Zm0-160v-80h480v80H120Zm0-160v-80h480v80H120Zm534 440L512-342l56-56 86 84 170-170 56 58-226 226Z" ],
			500 => [ "0 -960 960 960", "M114.5-311.15v-91H440v91H114.5Zm0-167.42v-91h483.59v91H114.5Zm0-167.41v-91h483.59v91H114.5Zm543.09 460.57L507.93-335.07l63.66-63.65 86 84 170-169.76 63.89 65.41-233.89 233.66Z" ],
			600 => [ "0 -960 960 960", "M107-299.09v-106h333v106H107Zm0-177.52v-106h488.48v106H107Zm0-177.52v-106h488.48v106H107Zm555.48 488.61L502.39-325.61l74.09-74.09 86 84 170-169.43 74.65 75.52-244.65 244.09Z" ],
			700 => [ "0 -960 960 960", "M97-283v-126h343v126H97Zm0-191v-126h495v126H97Zm0-191v-126h495v126H97Zm572 526L495-313l88-88 86 84 170-169 89 89-259 258Z" ],
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
