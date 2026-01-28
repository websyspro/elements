<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconExclamation
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-396v-308h28v308h-28Zm0 140v-28h28v28h-28Z" ],
			200 => [ "0 -960 960 960", "M460-396.92v-320h40v320h-40Zm0 153.84v-40h40v40h-40Z" ],
			300 => [ "0 -960 960 960", "M450-398.46v-340h60v340h-60Zm0 176.92v-60h60v60h-60Z" ],
			400 => [ "0 -960 960 960", "M440-400v-360h80v360h-80Zm0 200v-80h80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M434.5-396.41v-371h91v371h-91Zm0 203.82v-91h91v91h-91Z" ],
			600 => [ "0 -960 960 960", "M427-391.52v-386h106v386H427Zm0 209.04v-106h106v106H427Z" ],
			700 => [ "0 -960 960 960", "M417-385v-406h126v406H417Zm0 216v-126h126v126H417Z" ],
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
