<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowsMoreDown
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M252-172v-388h28v360h360v28H252Zm148-148v-388h28v360h360v28H400Z" ],
			200 => [ "0 -960 960 960", "M240-160v-400h40v360h360v40H240Zm160-160v-400h40v360h360v40H400Z" ],
			300 => [ "0 -960 960 960", "M220-140v-420h60v360h360v60H220Zm180-180v-420h60v360h360v60H400Z" ],
			400 => [ "0 -960 960 960", "M200-120v-440h80v360h360v80H200Zm200-200v-440h80v360h360v80H400Z" ],
			500 => [ "0 -960 960 960", "M193.54-113.54v-451h91v360h360v91h-451Zm201.44-201.44v-451h91v360h360v91h-451Z" ],
			600 => [ "0 -960 960 960", "M184.74-104.74v-466h106v360h360v106h-466Zm203.39-203.39v-466h106v360h360v106h-466Z" ],
			700 => [ "0 -960 960 960", "M173-93v-486h126v360h360v126H173Zm206-206v-486h126v360h360v126H379Z" ],
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
