<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconVerticalAlignBottom
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-172v-28h536v28H212Zm268-144L316-480l20-20 130 130v-418h28v418l130-130 20 20-164 164Z" ],
			200 => [ "0 -960 960 960", "M200-160v-40h560v40H200Zm280-147.69L307.69-480 336-508.31l124 124V-800h40v415.69l124-124L652.31-480 480-307.69Z" ],
			300 => [ "0 -960 960 960", "M180-140v-60h600v60H180Zm300-153.85L293.85-480 336-522.15l114 114V-820h60v411.85l114-114L666.15-480 480-293.85Z" ],
			400 => [ "0 -960 960 960", "M160-120v-80h640v80H160Zm320-160L280-480l56-56 104 104v-408h80v408l104-104 56 56-200 200Z" ],
			500 => [ "0 -960 960 960", "M151.87-111.87v-91h656.26v91H151.87ZM480-281.91 272.35-489.57 336-553.22l98.5 98.5v-393.41h91v393.41l98.5-98.5 63.65 63.65L480-281.91Z" ],
			600 => [ "0 -960 960 960", "M140.78-100.78v-106h678.44v106H140.78ZM480-284.52 261.91-502.61 336-576.7l91 91v-373.52h106v373.52l91-91 74.09 74.09L480-284.52Z" ],
			700 => [ "0 -960 960 960", "M126-86v-126h708v126H126Zm354-202L248-520l88-88 81 81v-347h126v347l81-81 88 88-232 232Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconVerticalAlignBottom" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
