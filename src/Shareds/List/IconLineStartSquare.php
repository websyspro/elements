<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconLineStartSquare
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M190-370h220v-220H190v220Zm248 28H162v-276h276v124h386v28H438v124ZM300-480Z" ],
			200 => [ "0 -960 960 960", "M183.08-363.08h233.84v-233.84H183.08v233.84Zm273.84 40H143.08v-313.84h313.84V-500h380v40h-380v136.92ZM300-480Z" ],
			300 => [ "0 -960 960 960", "M171.54-351.54h256.92v-256.92H171.54v256.92Zm316.92 60H111.54v-376.92h376.92V-510h370v60h-370v158.46ZM300-480Z" ],
			400 => [ "0 -960 960 960", "M160-340h280v-280H160v280Zm360 80H80v-440h440v180h360v80H520v180ZM300-480Z" ],
			500 => [ "0 -960 960 960", "M167.17-347.17h265.66v-265.66H167.17v265.66Zm356.66 91H76.17v-447.66h447.66v178.33H885.5v91H523.83v178.33ZM300-480Z" ],
			600 => [ "0 -960 960 960", "M176.96-356.96h246.08v-246.08H176.96v246.08Zm352.08 106H70.96v-458.08h458.08V-533H893v106H529.04v176.04ZM300-480Z" ],
			700 => [ "0 -960 960 960", "M190-370h220v-220H190v220Zm346 126H64v-472h472v173h367v126H536v173ZM300-480Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconLineStartSquare" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
