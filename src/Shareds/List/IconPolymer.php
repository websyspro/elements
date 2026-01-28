<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconPolymer
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M254-224 112-480l144-256h128L240-480l84 148 248-404h132l144 256-144 256H576l144-256-84-148-248 404H254Z" ],
			200 => [ "0 -960 960 960", "M241.08-209.23 90.77-480l152.31-270.77h135.38L226.15-480l88.62 156.77 262.77-427.54h139.38L869.23-480 716.92-209.23H581.54L733.85-480l-88.62-156.31-262.31 427.08H241.08Z" ],
			300 => [ "0 -960 960 960", "M219.54-184.62 55.39-480l166.15-295.38h147.69L203.08-480l96.31 171.38 287.38-466.76h151.69L904.61-480 738.46-184.62H590.77L756.92-480l-96.31-170.15-286.15 465.53H219.54Z" ],
			400 => [ "0 -960 960 960", "M198-160 20-480l180-320h160L180-480l104 186 312-506h164l180 320-180 320H600l180-320-104-184-310 504H198Z" ],
			500 => [ "0 -960 960 960", "M195.85-157.85 16.65-480l181.2-322.15h161.43L177.85-480l104.72 187.43 314.15-509.58h165.43L943.35-480l-181.2 322.15H600.72L782.15-480 677.43-665.43 365.28-157.85H195.85Z" ],
			600 => [ "0 -960 960 960", "M192.91-154.91 12.09-480l182.82-325.09H358.3L174.91-480l105.7 189.39L597.7-805.09h167.39L947.91-480 765.09-154.91H601.7L785.09-480l-105.7-187.39L364.3-154.91H192.91Z" ],
			700 => [ "0 -960 960 960", "M189-151 6-480l185-329h166L171-480l107 192 321-521h170l185 329-185 329H603l186-329-107-190-319 519H189Z" ],
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
