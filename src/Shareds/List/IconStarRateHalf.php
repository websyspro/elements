<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconStarRateHalf
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-644v236l96 74-36-122 90-64H518l-38-124ZM330-258l56-186-144-104h180l58-192 58 192h180L574-444l56 186-150-114-150 114Z" ],
			200 => [ "0 -960 960 960", "M480-644v236l96 74-36-122 90-64H518l-38-124ZM307.61-226.15l64.54-213.23L204.61-560h208.62L480-781.54 546.77-560h208.62L587.85-439.38l64.54 213.23L480-357.23 307.61-226.15Z" ],
			300 => [ "0 -960 960 960", "M480-644v236l96 74-36-122 90-64H518l-38-124ZM270.31-173.08l78.77-258.61L142.31-580h256.31L480-850.76 561.38-580h256.31L610.92-431.69l78.77 258.61L480-332.62 270.31-173.08Z" ],
			400 => [ "0 -960 960 960", "M480-644v236l96 74-36-122 90-64H518l-38-124ZM233-120l93-304L80-600h304l96-320 96 320h304L634-424l93 304-247-188-247 188Z" ],
			500 => [ "0 -960 960 960", "M480-644v236l96 74-36-122 90-64H518l-38-124ZM224.87-107.8l96.11-314.05L66.13-604.07h314.28L480-934.59l99.59 330.52h314.28L639.02-421.85l96.35 314.05-255.13-194.22L224.87-107.8Z" ],
			600 => [ "0 -960 960 960", "M480-644v236l96 74-36-122 90-64H518l-38-124ZM213.78-91.17l100.35-327.74-266.91-190.7h328.3L480-954.48l104.48 344.87h328.3l-266.91 190.7L746.78-91.17l-266.21-202.7-266.79 202.7Z" ],
			700 => [ "0 -960 960 960", "M480-644v236l96 74-36-122 90-64H518l-38-124ZM199-69l106-346L22-617h347l111-364 111 364h347L655-415 762-69 481-283 199-69Z" ],
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
