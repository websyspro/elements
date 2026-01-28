<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconArrowCoolDown
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M480-132 234-378l19-20 213 213v-284h28v285l213-213 19 19-246 246Zm-14-417v-120h28v120h-28Zm0-200v-80h28v80h-28Z" ],
			200 => [ "0 -960 960 960", "M480-120 226.15-373.85l27.54-28.53L460-196.08v-284.69h40v285.46l206.31-206.07 27.54 27.53L480-120Zm-20-440.77v-120h40v120h-40Zm0-200v-80h40v80h-40Z" ],
			300 => [ "0 -960 960 960", "M480-100 213.08-366.92l41.77-42.77L450-214.54v-285.84h60v286.23l195.15-194.54 41.77 41.77L480-100Zm-30-480.38v-120h60v120h-60Zm0-200v-80h60v80h-60Z" ],
			400 => [ "0 -960 960 960", "M480-80 200-360l56-57 184 184v-287h80v287l184-183 56 56L480-80Zm-40-520v-120h80v120h-80Zm0-200v-80h80v80h-80Z" ],
			500 => [ "0 -960 960 960", "M480.24-71.87 191.87-360l63.89-64.65 178.98 179.21v-269.78h91v269.78l178.98-178.45L768.37-360 480.24-71.87Zm-45.5-523.35v-121.43h91v121.43h-91Zm0-201.43v-91h91v91h-91Z" ],
			600 => [ "0 -960 960 960", "M480.57-60.78 180.78-360l74.65-75.09 172.13 172.7V-508.7h106.01v246.31L705.7-434.65 779.78-360 480.57-60.78ZM427.56-588.7v-123.39h106.01v123.39H427.56Zm0-203.39v-106h106.01v106H427.56Z" ],
			700 => [ "0 -960 960 960", "M481-46 166-360l89-89 163 164v-215h126v215l163-164 88 89L481-46Zm-63-534v-126h126v126H418Zm0-206v-126h126v126H418Z" ],
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
