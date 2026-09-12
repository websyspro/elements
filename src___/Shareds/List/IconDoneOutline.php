<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconDoneOutline
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m381-277 386-386-20-20-366 366-169-169-20 20 189 189Zm0 40L152-466l60-60 169 169 367-367 60 60-427 427Z" ],
			200 => [ "0 -960 960 960", "m381-268.46 394.77-394.77-28.54-28.31-366.46 366.23-169-169.23L183.23-466 381-268.46Zm0 56.85L126.61-466l85.16-85.39L381-382.15l366.77-367 85.85 84.92L381-211.61Z" ],
			300 => [ "0 -960 960 960", "m381-254.23 409.38-409.39-42.76-42.15-367.24 366.62-169-169.62L168.62-466 381-254.23Zm0 84.92L84.31-466l127.07-127.69L381-424.07l366.38-367L876.3-664.62 381-169.31Z" ],
			400 => [ "0 -960 960 960", "m381-240 424-424-57-56-368 367-169-170-57 57 227 226Zm0 113L42-466l169-170 170 170 366-367 172 168-538 538Z" ],
			500 => [ "0 -960 960 960", "m381-240 424-424-56.76-56-368 367.24L210.76-523 154-466.24 381-240Zm0 128.54L26.46-466 211-651.3l170 170 366.48-367.48L934.54-665 381-111.46Z" ],
			600 => [ "0 -960 960 960", "m381-240 424-424-56.43-56-368 367.57L210.43-523 154-466.57 381-240Zm0 149.74L5.26-466 211-672.18l170 170 367.13-368.13L955.74-665 381-90.26Z" ],
			700 => [ "0 -960 960 960", "m381-240 424-424-56-56-368 368-171-171-56 56 227 227Zm0 178L-23-466l234-234 170 170 368-369 235 234L381-62Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconDoneOutline" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
