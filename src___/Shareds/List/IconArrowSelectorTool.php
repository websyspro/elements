<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowSelectorTool
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m306-366 100-140h203L306-744v378Zm229 190L405-456 278-279v-523l412 324H469l128 273-62 29ZM406-506Z" ],
			200 => [ "0 -960 960 960", "m309.23-376.15 95.15-133.08h195.39L309.23-737.54v361.39Zm229.46 222.3L405.23-441.23l-136 189.69V-820l446.16 350.77H479.85l131.69 281.31-72.85 34.07ZM404.38-509.23Z" ],
			300 => [ "0 -960 960 960", "m314.61-393.08 87.08-121.53h182.7L314.61-726.77v333.69Zm230.24 276.15L405.62-416.62l-151 210.85V-850l503.07 395.38H497.92l137.85 295.16-90.92 42.53ZM401.69-514.61Z" ],
			400 => [ "0 -960 960 960", "m320-410 79-110h170L320-716v306ZM551-80 406-392 240-160v-720l560 440H516l144 309-109 51ZM399-520Z" ],
			500 => [ "0 -960 960 960", "m321.91-419.09 75.42-104.98h164.26L321.91-712.65v293.56ZM555.3-60.87 406.48-380.52 230.91-134.89v-764.48l593.48 466.3h-300.5l148.07 317.61L555.3-60.87Zm-157.97-463.2Z" ],
			600 => [ "0 -960 960 960", "m324.52-431.48 70.52-98.13h156.44L324.52-708.09v276.61Zm236.65 396.7L407.13-364.87 218.52-100.65v-825.13l639.14 502.17H534.65L688.26-94.26 561.17-34.78ZM395.04-529.61Z" ],
			700 => [ "0 -960 960 960", "m328-448 64-89h146L328-702v254ZM569 0 408-344 202-55v-906l700 550H549L710-66 569 0ZM392-537Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowSelectorTool" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
