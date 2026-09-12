<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconBarcode
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M128-236v-448h64v448h-64Zm96 0v-448h64v448h-64Zm96 0v-448h32v448h-32Zm96 0v-448h64v448h-64Zm96 0v-448h96v448h-96Zm128 0v-448h32v448h-32Zm96 0v-448h96v448h-96Z" ],
			200 => [ "0 -960 960 960", "M107.69-227.69v-473.85h67.69v473.85h-67.69Zm101.54 0v-473.85h67.69v473.85h-67.69Zm101.54 0v-473.85h33.85v473.85h-33.85Zm101.54 0v-473.85H480v473.85h-67.69Zm101.54 0v-473.85h101.53v473.85H513.85Zm135.38 0v-473.85h33.85v473.85h-33.85Zm101.54 0v-473.85h101.54v473.85H750.77Z" ],
			300 => [ "0 -960 960 960", "M73.85-213.85v-516.92h73.84v516.92H73.85Zm110.77 0v-516.92h73.84v516.92h-73.84Zm110.77 0v-516.92h36.92v516.92h-36.92Zm110.76 0v-516.92H480v516.92h-73.85Zm110.77 0v-516.92h110.77v516.92H516.92Zm147.69 0v-516.92h36.93v516.92h-36.93Zm110.77 0v-516.92h110.77v516.92H775.38Z" ],
			400 => [ "0 -960 960 960", "M40-200v-560h80v560H40Zm120 0v-560h80v560h-80Zm120 0v-560h40v560h-40Zm120 0v-560h80v560h-80Zm120 0v-560h120v560H520Zm160 0v-560h40v560h-40Zm120 0v-560h120v560H800Z" ],
			500 => [ "0 -960 960 960", "M32.59-195.7v-569.08h81.43v569.08H32.59Zm121.91 0v-569.08h81.43v569.08H154.5Zm122.15 0v-569.08h40.72v569.08h-40.72Zm121.92 0v-569.08H480v569.08h-81.43Zm122.15 0v-569.08h121.91v569.08H520.72Zm162.63 0v-569.08h40.72v569.08h-40.72Zm122.15 0v-569.08h121.91v569.08H805.5Z" ],
			600 => [ "0 -960 960 960", "M22.48-189.83V-771.3h83.39v581.47H22.48Zm124.52 0V-771.3h83.39v581.47H147Zm125.09 0V-771.3h41.69v581.47h-41.69Zm124.52 0V-771.3H480v581.47h-83.39Zm125.09 0V-771.3h124.52v581.47H521.7Zm166.21 0V-771.3h41.7v581.47h-41.7Zm125.09 0V-771.3h124.52v581.47H813Z" ],
			700 => [ "0 -960 960 960", "M9-182v-598h86v598H9Zm128 0v-598h86v598h-86Zm129 0v-598h43v598h-43Zm128 0v-598h86v598h-86Zm129 0v-598h128v598H523Zm171 0v-598h43v598h-43Zm129 0v-598h128v598H823Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconBarcode" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
