<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconTitle
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M466-212v-507H253v-29h455v29H495v507h-29Z" ],
			200 => [ "0 -960 960 960", "M455.38-200v-510H240.77v-50H720v50H505.38v510h-50Z" ],
			300 => [ "0 -960 960 960", "M437.69-180v-515h-217.3v-85H740v85H522.69v515h-85Z" ],
			400 => [ "0 -960 960 960", "M420-160v-520H200v-120h560v120H540v520H420Z" ],
			500 => [ "0 -960 960 960", "M414.5-151.87v-525.5H191.87v-130.76h576.26v130.76H545.74v525.5H414.5Z" ],
			600 => [ "0 -960 960 960", "M407-140.78v-533H180.78v-145.44h598.44v145.44H553.57v533H407Z" ],
			700 => [ "0 -960 960 960", "M397-126v-543H166v-165h628v165H564v543H397Z" ],
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
