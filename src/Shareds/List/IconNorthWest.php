<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconNorthWest
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M728-212 280-660v300h-28v-348h348v28H300l448 448-20 20Z" ],
			200 => [ "0 -960 960 960", "M731.69-200 280-651.69V-360h-40v-360h360v40H308.31L760-228.31 731.69-200Z" ],
			300 => [ "0 -960 960 960", "M737.85-180 280-637.85V-360h-60v-380h380v60H322.15L780-222.15 737.85-180Z" ],
			400 => [ "0 -960 960 960", "M744-160 280-624v264h-80v-400h400v80H336l464 464-56 56Z" ],
			500 => [ "0 -960 960 960", "M744-152.35 283.11-613.24v256.35h-91v-411h411v91H346.76L807.65-216 744-152.35Z" ],
			600 => [ "0 -960 960 960", "M744-141.91 287.35-598.56v245.91h-106v-426h426v106H361.44L818.09-216 744-141.91Z" ],
			700 => [ "0 -960 960 960", "M744-128 293-579v232H167v-446h446v126H381l451 451-88 88Z" ],
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
