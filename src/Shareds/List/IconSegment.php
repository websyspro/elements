<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSegment
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M412-278v-28h376v28H412Zm0-188v-28h376v28H412ZM172-654v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M400-269.23v-40h400v40H400ZM400-460v-40h400v40H400ZM160-650.77v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M380-254.62v-59.99h440v59.99H380ZM380-450v-60h440v60H380ZM140-645.39v-59.99h680v59.99H140Z" ],
			400 => [ "0 -960 960 960", "M360-240v-80h480v80H360Zm0-200v-80h480v80H360ZM120-640v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M351.87-228.28v-91h496.26v91H351.87Zm0-206.22v-91h496.26v91H351.87Zm-240-206.22v-91h736.26v91H111.87Z" ],
			600 => [ "0 -960 960 960", "M340.78-212.3v-106h518.44v106H340.78Zm0-214.7v-106h518.44v106H340.78Zm-240-214.7v-106h758.44v106H100.78Z" ],
			700 => [ "0 -960 960 960", "M326-191v-126h548v126H326Zm0-226v-126h548v126H326ZM86-643v-126h788v126H86Z" ],
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
