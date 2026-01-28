<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconExpandContent
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M252-252v-188h28v160h160v28H252Zm428-268v-160H520v-28h188v188h-28Z" ],
			200 => [ "0 -960 960 960", "M240-240v-200h40v160h160v40H240Zm440-280v-160H520v-40h200v200h-40Z" ],
			300 => [ "0 -960 960 960", "M220-220v-220h60v160h160v60H220Zm460-300v-160H520v-60h220v220h-60Z" ],
			400 => [ "0 -960 960 960", "M200-200v-240h80v160h160v80H200Zm480-320v-160H520v-80h240v240h-80Z" ],
			500 => [ "0 -960 960 960", "M194.5-194.5v-251h91v160h160v91h-251Zm480-320v-160h-160v-91h251v251h-91Z" ],
			600 => [ "0 -960 960 960", "M187-187v-266h106v160h160v106H187Zm480-320v-160H507v-106h266v266H667Z" ],
			700 => [ "0 -960 960 960", "M177-177v-286h126v160h160v126H177Zm480-320v-160H497v-126h286v286H657Z" ],
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
