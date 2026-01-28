<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconPlaylistAdd
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M146-346v-28h280v28H146Zm0-160v-28h440v28H146Zm0-160v-28h440v28H146Zm520 480v-160H506v-28h160v-160h28v160h160v28H694v160h-28Z" ],
			200 => [ "0 -960 960 960", "M140-340v-40h280v40H140Zm0-160v-40h440v40H140Zm0-160v-40h440v40H140Zm520 480v-160H500v-40h160v-160h40v160h160v40H700v160h-40Z" ],
			300 => [ "0 -960 960 960", "M130-330v-60h280v60H130Zm0-160v-60h440v60H130Zm0-160v-60h440v60H130Zm520 480v-160H490v-60h160v-160h60v160h160v60H710v160h-60Z" ],
			400 => [ "0 -960 960 960", "M120-320v-80h280v80H120Zm0-160v-80h440v80H120Zm0-160v-80h440v80H120Zm520 480v-160H480v-80h160v-160h80v160h160v80H720v160h-80Z" ],
			500 => [ "0 -960 960 960", "M114.5-311.15v-91h294.59v91H114.5Zm0-167.42v-91h451v91h-451Zm0-167.41v-91h451v91h-451Zm527.41 491v-156.17H485.5v-91h156.41v-156.42h91v156.42h156.18v91H732.91v156.17h-91Z" ],
			600 => [ "0 -960 960 960", "M107-299.09v-106h314.48v106H107Zm0-177.52v-106h466v106H107Zm0-177.52v-106h466v106H107Zm537.52 506v-150.96H493v-106h151.52v-151.52h106v151.52h150.96v106H750.52v150.96h-106Z" ],
			700 => [ "0 -960 960 960", "M97-283v-126h341v126H97Zm0-191v-126h486v126H97Zm0-191v-126h486v126H97Zm551 526v-144H503v-126h145v-145h126v145h144v126H774v144H648Z" ],
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
