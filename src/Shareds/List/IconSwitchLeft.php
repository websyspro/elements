<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSwitchLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M400-279 199-480l201-201v402Zm-28-67v-268L238-480l134 134Zm188 67v-402l201 201-201 201Z" ],
			200 => [ "0 -960 960 960", "M400-260.77 180.77-480 400-699.23v438.46Zm-35.38-85v-268.46L230.38-480l134.24 134.23Zm195.38 85v-438.46L779.23-480 560-260.77Z" ],
			300 => [ "0 -960 960 960", "M400-230.39 150.39-480 400-729.61v499.22Zm-47.69-114.99v-269.24L217.69-480l134.62 134.62ZM560-230.39v-499.22L809.61-480 560-230.39Z" ],
			400 => [ "0 -960 960 960", "M400-200 120-480l280-280v560Zm-60-145v-270L205-480l135 135Zm220 145v-560l280 280-280 280Z" ],
			500 => [ "0 -960 960 960", "M401.91-176.8 98.48-480l303.43-303.2v606.4Zm-74.82-180.4v-245.6L204.52-480l122.57 122.8Zm231 180.4v-606.4L861.52-480 558.09-176.8Z" ],
			600 => [ "0 -960 960 960", "M404.52-145.17 69.13-480l335.39-334.83v669.66Zm-95.04-228.66v-212.34L203.87-480l105.61 106.17Zm246 228.66v-669.66L890.87-480 555.48-145.17Z" ],
			700 => [ "0 -960 960 960", "M408-103 30-480l378-377v754ZM286-396v-168l-83 84 83 84Zm266 293v-754l378 377-378 377Z" ],
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
