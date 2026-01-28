<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLineWeight
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M250-250v-14h460v14H250Zm0-94v-28h460v28H250Zm0-108v-40h460v40H250Zm0-122v-136h460v136H250Z" ],
			200 => [ "0 -960 960 960", "M220-229.23v-20h520v20H220Zm0-100v-40h520v40H220Zm0-120v-58.46h520v58.46H220Zm0-140v-141.54h520v141.54H220Z" ],
			300 => [ "0 -960 960 960", "M170-194.62v-30h620v30H170Zm0-110v-60h620v60H170Zm0-140v-89.22h620v89.22H170Zm0-169.99v-150.77h620v150.77H170Z" ],
			400 => [ "0 -960 960 960", "M120-160v-40h720v40H120Zm0-120v-80h720v80H120Zm0-160v-120h720v120H120Zm0-200v-160h720v160H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-141.59v-50.28h736.26v50.28H111.87Zm0-126.69v-91h736.26v91H111.87Zm0-167.42v-123.58h736.26v123.58H111.87Zm0-200v-182.71h736.26v182.71H111.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-116.48v-64.3h758.44v64.3H100.78Zm0-135.82v-106h758.44v106H100.78Zm0-177.53V-558.3h758.44v128.47H100.78Zm0-200v-213.69h758.44v213.69H100.78Z" ],
			700 => [ "0 -960 960 960", "M86-83v-83h788v83H86Zm0-148v-126h788v126H86Zm0-191v-135h788v135H86Zm0-200v-255h788v255H86Z" ],
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
