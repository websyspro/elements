<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconRoad
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-212v-536h28v536h-28Zm254 0v-112h28v112h-28Zm254 0v-536h28v536h-28ZM466-424v-112h28v112h-28Zm0-212v-112h28v112h-28Z" ],
			200 => [ "0 -960 960 960", "M200-200v-560h40v560h-40Zm260 0v-123.08h40V-200h-40Zm260 0v-560h40v560h-40ZM460-418.46v-123.08h40v123.08h-40Zm0-218.46V-760h40v123.08h-40Z" ],
			300 => [ "0 -960 960 960", "M180-180v-600h60v600h-60Zm270 0v-141.54h60V-180h-60Zm270 0v-600h60v600h-60ZM450-409.23v-141.54h60v141.54h-60Zm0-229.23V-780h60v141.54h-60Z" ],
			400 => [ "0 -960 960 960", "M160-160v-640h80v640h-80Zm280 0v-160h80v160h-80Zm280 0v-640h80v640h-80ZM440-400v-160h80v160h-80Zm0-240v-160h80v160h-80Z" ],
			500 => [ "0 -960 960 960", "M151.87-151.87v-656.26h91v656.26h-91Zm282.87 0v-165.5h91v165.5h-91Zm282.39 0v-656.26h91v656.26h-91Zm-282.39-245.5v-165.26h91v165.26h-91Zm0-245.26v-165.5h91v165.5h-91Z" ],
			600 => [ "0 -960 960 960", "M140.78-140.78v-678.44h106v678.44h-106Zm286.78 0v-173h106.01v173H427.56Zm285.66 0v-678.44h106v678.44h-106Zm-285.66-253v-172.44h106.01v172.44H427.56Zm0-252.44v-173h106.01v173H427.56Z" ],
			700 => [ "0 -960 960 960", "M126-126v-708h126v708H126Zm292 0v-183h126v183H418Zm290 0v-708h126v708H708ZM418-389v-182h126v182H418Zm0-262v-183h126v183H418Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconRoad" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
