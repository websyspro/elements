<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconToolsPhillips
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M332-172v-28h296v28H332Zm0-68v-331l124-165h48l124 165v331H332Zm28-28h240v-124L480-512 360-392v124Zm0-163 106-106v-166L360-561v130Zm240 0v-130L494-703v166l106 106Zm0 163H360h240Z" ],
			200 => [ "0 -960 960 960", "M320-160v-40h320v40H320Zm0-80v-346.92L450-760h60l130 173.08V-240H320Zm40-40h240v-115.46l-120-120-120 120V-280Zm0-171.54 100-100v-155.38L360-573v121.46Zm240 0V-573L500-706.92v155.38l100 100ZM600-280H360h240Z" ],
			300 => [ "0 -960 960 960", "M300-140v-60h360v60H300Zm0-100v-373.46L440-800h80l140 186.54V-240H300Zm60-60h240v-101.23l-120-120-120 120V-300Zm0-185.77 90-90v-137.69L360-593v107.23Zm240 0V-593l-90-120.46v137.69l90 90ZM600-300H360h240Z" ],
			400 => [ "0 -960 960 960", "M280-120v-80h400v80H280Zm0-120v-400l150-200h100l150 200v400H280Zm80-80h240v-87L480-527 360-407v87Zm0-200 80-80v-120l-80 107v93Zm240 0v-93l-80-107v120l80 80Zm0 200H360h240Z" ],
			500 => [ "0 -960 960 960", "M272.83-107.33v-91h414.34v91H272.83Zm0-131v-409.56l153.58-204.78h107.18l153.58 204.78v409.56H272.83Zm91-91h232.34v-71.45L480-516.96 363.83-400.78v71.45Zm0-196.41 71.87-71.87V-713.3l-71.87 96v91.56Zm232.34 0v-91.56l-71.87-96v115.69l71.87 71.87Zm0 196.41H363.83h232.34Z" ],
			600 => [ "0 -960 960 960", "M263.04-90.04v-106h433.92v106H263.04Zm0-146v-422.61l158.48-211.31h116.96l158.48 211.31v422.61H263.04Zm106-106h221.92v-50.26L480-503.26 369.04-392.3v50.26Zm0-191.53 60.79-60.78v-109.82l-60.79 81v89.6Zm221.92 0v-89.6l-60.79-81v109.82l60.79 60.78Zm0 191.53H369.04h221.92Z" ],
			700 => [ "0 -960 960 960", "M250-67v-126h460v126H250Zm0-166v-440l165-220h130l165 220v440H250Zm126-126h208v-22L480-485 376-381v22Zm0-185 46-46v-102l-46 61v87Zm208 0v-87l-46-61v102l46 46Zm0 185H376h208Z" ],
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
