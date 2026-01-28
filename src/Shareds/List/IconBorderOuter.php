<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconBorderOuter
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M200-200h560v-560H200v560Zm-28 28v-616h616v616H172Zm144-288v-40h40v40h-40Zm144 144v-40h40v40h-40Zm0-144v-40h40v40h-40Zm0-144v-40h40v40h-40Zm144 144v-40h40v40h-40Z" ],
			200 => [ "0 -960 960 960", "M200-200h560v-560H200v560Zm-40 40v-640h640v640H160Zm147.69-295.38v-49.24h49.23v49.24h-49.23Zm147.69 147.69v-49.23h49.24v49.23h-49.24Zm0-147.69v-49.24h49.24v49.24h-49.24Zm0-147.7v-49.23h49.24v49.23h-49.24Zm147.7 147.7v-49.24h49.23v49.24h-49.23Z" ],
			300 => [ "0 -960 960 960", "M200-200h560v-560H200v560Zm-60 60v-680h680v680H140Zm153.85-307.69v-64.62h64.61v64.62h-64.61Zm153.84 153.84v-64.61h64.62v64.61h-64.62Zm0-153.84v-64.62h64.62v64.62h-64.62Zm0-153.85v-64.61h64.62v64.61h-64.62Zm153.85 153.85v-64.62h64.61v64.62h-64.61Z" ],
			400 => [ "0 -960 960 960", "M200-200h560v-560H200v560Zm-80 80v-720h720v720H120Zm160-320v-80h80v80h-80Zm160 160v-80h80v80h-80Zm0-160v-80h80v80h-80Zm0-160v-80h80v80h-80Zm160 160v-80h80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M202.87-202.87h554.26v-554.26H202.87v554.26Zm-91 91v-736.26h736.26v736.26H111.87ZM273.3-434.5v-91h91v91h-91Zm161.2 161.2v-91h91v91h-91Zm0-161.2v-91h91v91h-91Zm0-161.43v-91h91v91h-91ZM595.93-434.5v-91h91v91h-91Z" ],
			600 => [ "0 -960 960 960", "M206.78-206.78h546.44v-546.44H206.78v546.44Zm-106 106v-758.44h758.44v758.44H100.78ZM264.17-427v-106h106v106h-106ZM427-264.17v-106h106v106H427ZM427-427v-106h106v106H427Zm0-163.39v-106h106v106H427ZM590.39-427v-106h106v106h-106Z" ],
			700 => [ "0 -960 960 960", "M212-212h536v-536H212v536ZM86-86v-788h788v788H86Zm166-331v-126h126v126H252Zm165 165v-126h126v126H417Zm0-165v-126h126v126H417Zm0-166v-126h126v126H417Zm166 166v-126h126v126H583Z" ],
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
