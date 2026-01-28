<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconMoreUp
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M706-344v-362H372v-28h362v390h-28ZM506-144v-362H172v-28h362v390h-28Z" ],
			200 => [ "0 -960 960 960", "M700-338.46V-700H360v-40h380v401.54h-40Zm-200 200V-500H160v-40h380v401.54h-40Z" ],
			300 => [ "0 -960 960 960", "M690-329.23V-690H340v-60h410v420.77h-60Zm-200 200V-490H140v-60h410v420.77h-60Z" ],
			400 => [ "0 -960 960 960", "M680-320v-360H320v-80h440v440h-80ZM480-120v-360H120v-80h440v440h-80Z" ],
			500 => [ "0 -960 960 960", "M678.09-318.09v-360h-360v-91h451v451h-91ZM474.5-114.5v-360h-360v-91h451v451h-91Z" ],
			600 => [ "0 -960 960 960", "M675.48-315.48v-360h-360v-106h466v466h-106ZM467-107v-360H107v-106h466v466H467Z" ],
			700 => [ "0 -960 960 960", "M672-312v-360H312v-126h486v486H672ZM457-97v-360H97v-126h486v486H457Z" ],
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
