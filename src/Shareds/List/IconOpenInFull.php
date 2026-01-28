<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconOpenInFull
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-268h28v221l541-541H520v-28h268v268h-28v-221L219-200h221v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-160v-280h40v212.46L732.46-760H520v-40h280v280h-40v-212.46L227.54-200H440v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-140v-300h60v198.23L718.23-760H520v-60h300v300h-60v-198.23L241.77-200H440v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-120v-320h80v184l504-504H520v-80h320v320h-80v-184L256-200h184v80H120Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-331h91v176.11l490.37-490.37H517.13v-91h331v331h-91v-176.11L266.76-202.87h176.11v91h-331Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-346h106v165.34l471.78-471.78H513.22v-106h346v346h-106v-165.34L281.44-206.78h165.34v106h-346Z" ],
			700 => [ "0 -960 960 960", "M86-86v-366h126v151l447-447H508v-126h366v366H748v-151L301-212h151v126H86Z" ],
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
