<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconTextFields
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M326-206v-520H126v-28h428v28H354v520h-28Zm360 0v-320H566v-28h268v28H714v320h-28Z" ],
			200 => [ "0 -960 960 960", "M315.38-195.38v-520h-200v-49.24h449.24v49.24h-200v520h-49.24Zm360 0v-320h-120v-49.24h289.24v49.24h-120v320h-49.24Z" ],
			300 => [ "0 -960 960 960", "M297.69-177.69v-520h-200v-84.62h484.62v84.62h-200v520h-84.62Zm360 0v-320h-120v-84.62h324.62v84.62h-120v320h-84.62Z" ],
			400 => [ "0 -960 960 960", "M280-160v-520H80v-120h520v120H400v520H280Zm360 0v-320H520v-120h360v120H760v320H640Z" ],
			500 => [ "0 -960 960 960", "M272.59-152.59V-680h-200v-127.41H600V-680H400v527.41H272.59Zm367.41 0v-320H520V-600h367.41v127.41h-120v320H640Z" ],
			600 => [ "0 -960 960 960", "M262.48-142.48V-680h-200v-137.52H600V-680H400v537.52H262.48Zm377.52 0v-320H520V-600h377.52v137.52h-120v320H640Z" ],
			700 => [ "0 -960 960 960", "M249-129v-551H49v-151h551v151H400v551H249Zm391 0v-320H520v-151h391v151H791v320H640Z" ],
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
