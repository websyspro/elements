<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLteMobiledata
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M220-346v-268h28v240h120v28H220Zm258 0v-240h-80v-28h188v28h-80v240h-28Zm188 0v-268h148v28H694v92h120v28H694v92h120v28H666Z" ],
			200 => [ "0 -960 960 960", "M206.15-340v-280h40v240h120v40h-160Zm263.08 0v-240h-80v-40h200v40h-80v240h-40ZM660-340v-280h160v40H700v80h120v40H700v80h120v40H660Z" ],
			300 => [ "0 -960 960 960", "M183.08-330v-300h60v240h120v60h-180Zm271.54 0v-240h-80v-60h219.99v60h-80v240h-59.99ZM650-330v-300h180v60H710v60h120v60H710v60h120v60H650Z" ],
			400 => [ "0 -960 960 960", "M160-320v-320h80v240h120v80H160Zm280 0v-240h-80v-80h240v80h-80v240h-80Zm200 0v-320h200v80H720v40h120v80H720v40h120v80H640Z" ],
			500 => [ "0 -960 960 960", "M156.41-316.41v-327.18H240V-400h120v83.59H156.41Zm281.68 0V-560h-80v-83.59h243.82V-560h-80v243.59h-83.82Zm203.82 0v-327.18H845.5V-560h-120v40h120v80h-120v40h120v83.59H641.91Z" ],
			600 => [ "0 -960 960 960", "M151.52-311.52v-336.96H240V-400h120v88.48H151.52Zm283.96 0V-560h-80v-88.48h249.04V-560h-80v248.48h-89.04Zm209.04 0v-336.96H853V-560H733v40h120v80H733v40h120v88.48H644.52Z" ],
			700 => [ "0 -960 960 960", "M145-305v-350h95v255h120v95H145Zm287 0v-255h-80v-95h256v95h-80v255h-96Zm216 0v-350h215v95H743v40h120v80H743v40h120v95H648Z" ],
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
