<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFormatTextOverflow
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M225-186v-588h28v588h-28Zm405-189-19-20 71-71H373v-28h309l-71-71 19-20 105 105-105 105ZM485-186v-160h28v160h-28Zm0-428v-160h28v160h-28Z" ],
			200 => [ "0 -960 960 960", "M210-180v-600h40v600h-40Zm426.46-186.46L608.92-395l65-65H360.77v-40h313.15l-65-65 27.54-28.54L750-480 636.46-366.46ZM483.85-180v-169.23h40V-180h-40Zm0-430.77V-780h40v169.23h-40Z" ],
			300 => [ "0 -960 960 960", "M185-170v-620h60v620h-60Zm462.23-182.23L605.46-395l55-55H340.39v-60h320.07l-55-55 41.77-42.77L775-480 647.23-352.23ZM481.92-170v-184.61h60V-170h-60Zm0-435.39V-790h60v184.61h-60Z" ],
			400 => [ "0 -960 960 960", "M160-160v-640h80v640h-80Zm498-178-56-57 45-45H320v-80h327l-45-45 56-57 142 142-142 142ZM480-160v-200h80v200h-80Zm0-440v-200h80v200h-80Z" ],
			500 => [ "0 -960 960 960", "M145.89-154.5v-651h91v651h-91Zm514.02-171.06-63.89-64.66 44.28-44.28H316.89v-91H640.3l-44.28-44.28 63.89-64.66L814.35-480 659.91-325.56ZM470.67-154.5v-200h91v200h-91Zm0-451v-200h91v200h-91Z" ],
			600 => [ "0 -960 960 960", "M126.65-147v-666h106v666h-106Zm535.87-161.61-74.65-75.09 43.3-43.3H312.65v-106h318.52l-43.3-43.3 74.65-75.09L833.91-480 662.52-308.61ZM457.96-147v-200h106v200h-106Zm0-466v-200h106v200h-106Z" ],
			700 => [ "0 -960 960 960", "M101-137v-686h126v686H101Zm565-149-89-89 42-42H307v-126h312l-42-42 89-89 194 194-194 194ZM441-137v-200h126v200H441Zm0-486v-200h126v200H441Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFormatTextOverflow" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
