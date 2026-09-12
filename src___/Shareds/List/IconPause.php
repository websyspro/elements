<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconPause
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M546-252v-456h162v456H546Zm-294 0v-456h162v456H252Zm322-28h106v-400H574v400Zm-294 0h106v-400H280v400Zm0-400v400-400Zm294 0v400-400Z" ],
			200 => [ "0 -960 960 960", "M540-240v-480h180v480H540Zm-300 0v-480h180v480H240Zm340-40h100v-400H580v400Zm-300 0h100v-400H280v400Zm0-400v400-400Zm300 0v400-400Z" ],
			300 => [ "0 -960 960 960", "M530-220v-520h210v520H530Zm-310 0v-520h210v520H220Zm370-60h90v-400h-90v400Zm-310 0h90v-400h-90v400Zm0-400v400-400Zm310 0v400-400Z" ],
			400 => [ "0 -960 960 960", "M520-200v-560h240v560H520Zm-320 0v-560h240v560H200Zm400-80h80v-400h-80v400Zm-320 0h80v-400h-80v400Zm0-400v400-400Zm320 0v400-400Z" ],
			500 => [ "0 -960 960 960", "M519.76-185.41v-589.18h254.83v589.18H519.76Zm-334.35 0v-589.18h254.83v589.18H185.41Zm425.35-91h72.83v-407.18h-72.83v407.18Zm-334.35 0h72.83v-407.18h-72.83v407.18Zm0-407.18v407.18-407.18Zm334.35 0v407.18-407.18Z" ],
			600 => [ "0 -960 960 960", "M519.43-165.52v-628.96h275.05v628.96H519.43Zm-353.91 0v-628.96h275.05v628.96H165.52Zm459.92-106h63.04v-416.96h-63.04v416.96Zm-353.92 0h63.04v-416.96h-63.04v416.96Zm0-416.96v416.96-416.96Zm353.92 0v416.96-416.96Z" ],
			700 => [ "0 -960 960 960", "M519-139v-682h302v682H519Zm-380 0v-682h302v682H139Zm506-126h50v-430h-50v430Zm-380 0h50v-430h-50v430Zm0-430v430-430Zm380 0v430-430Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconPause" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
