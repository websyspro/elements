<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconHide
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m192-173-20-20 210-210H255v-28h175v175h-28v-127L192-173Zm338-358v-175h28v127l210-210 20 20-210 210h127v28H530Z" ],
			200 => [ "0 -960 960 960", "M188.54-160.77 160-189.31l204-203.77H242.31v-40h190v190h-40v-121.69l-203.77 204Zm339.15-367.69v-190h40v121.69l203.77-204L800-772.23 596-568.46h121.69v40h-190Z" ],
			300 => [ "0 -960 960 960", "M182.77-140.39 140-183.15l194-193.39H221.16v-60h214.99v215h-59.99v-112.85l-193.39 194Zm341.08-383.84v-215h59.99v112.85l193.39-194L820-777.61 626-584.23h112.84v60H523.85Z" ],
			400 => [ "0 -960 960 960", "m177-120-57-57 184-183H200v-80h240v240h-80v-104L177-120Zm343-400v-240h80v104l183-184 57 57-184 183h104v80H520Z" ],
			500 => [ "0 -960 960 960", "M177-112.35 112.35-177l178.26-177.5H189.48v-91H445.5v256.02h-91v-101.13L177-112.35ZM514.5-514.5v-256.02h91v101.13L783-847.65 847.65-783 669.39-605.5h101.13v91H514.5Z" ],
			600 => [ "0 -960 960 960", "M177-101.91 101.91-177l170.44-170h-97.22v-106H453v277.87H347v-97.22L177-101.91ZM507-507v-277.87h106v97.22l170-170.44L858.09-783 687.65-613h97.22v106H507Z" ],
			700 => [ "0 -960 960 960", "m177-88-89-89 160-160h-92v-126h307v307H337v-92L177-88Zm320-409v-307h126v92l160-160 89 89-160 160h92v126H497Z" ],
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
