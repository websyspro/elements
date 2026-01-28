<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFitPage
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-616h40v616h-40Zm576 0v-616h40v616h-40ZM316-460v-40h40v40h-40Zm144 288v-40h40v40h-40Zm0-144v-40h40v40h-40Zm0-144v-40h40v40h-40Zm0-144v-40h40v40h-40Zm0-144v-40h40v40h-40Zm144 288v-40h40v40h-40Z" ],
			200 => [ "0 -960 960 960", "M160-160v-640h49.23v640H160Zm590.77 0v-640H800v640h-49.23ZM307.69-455.38v-49.24h49.23v49.24h-49.23ZM455.38-160v-49.23h49.24V-160h-49.24Zm0-147.69v-49.23h49.24v49.23h-49.24Zm0-147.69v-49.24h49.24v49.24h-49.24Zm0-147.7v-49.23h49.24v49.23h-49.24Zm0-147.69V-800h49.24v49.23h-49.24Zm147.7 295.39v-49.24h49.23v49.24h-49.23Z" ],
			300 => [ "0 -960 960 960", "M140-140v-680h64.62v680H140Zm615.38 0v-680H820v680h-64.62ZM293.85-447.69v-64.62h64.61v64.62h-64.61ZM447.69-140v-64.62h64.62V-140h-64.62Zm0-153.85v-64.61h64.62v64.61h-64.62Zm0-153.84v-64.62h64.62v64.62h-64.62Zm0-153.85v-64.61h64.62v64.61h-64.62Zm0-153.84V-820h64.62v64.62h-64.62Zm153.85 307.69v-64.62h64.61v64.62h-64.61Z" ],
			400 => [ "0 -960 960 960", "M120-120v-720h80v720h-80Zm640 0v-720h80v720h-80ZM280-440v-80h80v80h-80Zm160 320v-80h80v80h-80Zm0-160v-80h80v80h-80Zm0-160v-80h80v80h-80Zm0-160v-80h80v80h-80Zm0-160v-80h80v80h-80Zm160 320v-80h80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-736.26h91v736.26h-91Zm645.26 0v-736.26h91v736.26h-91ZM273.3-434.5v-91h91v91h-91Zm161.2 322.63v-91h91v91h-91Zm0-161.43v-91h91v91h-91Zm0-161.2v-91h91v91h-91Zm0-161.43v-91h91v91h-91Zm0-161.2v-91h91v91h-91ZM595.93-434.5v-91h91v91h-91Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-758.44h106v758.44h-106Zm652.44 0v-758.44h106v758.44h-106ZM264.17-427v-106h106v106h-106ZM427-100.78v-106h106v106H427Zm0-163.39v-106h106v106H427ZM427-427v-106h106v106H427Zm0-163.39v-106h106v106H427Zm0-162.83v-106h106v106H427ZM590.39-427v-106h106v106h-106Z" ],
			700 => [ "0 -960 960 960", "M86-86v-788h126v788H86Zm662 0v-788h126v788H748ZM252-417v-126h126v126H252ZM417-86v-126h126v126H417Zm0-166v-126h126v126H417Zm0-165v-126h126v126H417Zm0-166v-126h126v126H417Zm0-165v-126h126v126H417Zm166 331v-126h126v126H583Z" ],
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
