<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconTextSelectMoveDown
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-760v-28h616v28H172Zm308 444L356-440l20-20 90 89v-283h28v283l90-89 20 20-124 124ZM172-172v-28h616v28H172Z" ],
			200 => [ "0 -960 960 960", "M160-760v-40h640v40H160Zm320 452.31L347.69-440 376-468.31l84 83V-660h40v274.69l84-83L612.31-440 480-307.69ZM160-160v-40h640v40H160Z" ],
			300 => [ "0 -960 960 960", "M140-760v-60h680v60H140Zm340 466.15L333.85-440 376-482.15l74 73V-670h60v260.85l74-73L626.15-440 480-293.85ZM140-140v-60h680v60H140Z" ],
			400 => [ "0 -960 960 960", "M120-760v-80h720v80H120Zm360 480L320-440l56-56 64 63v-247h80v247l64-63 56 56-160 160ZM120-120v-80h720v80H120Z" ],
			500 => [ "0 -960 960 960", "M114.5-764.3v-91h731v91h-731ZM480-272.11 312.11-440 376-503.65l58.5 57.5V-685.5h91v239.35l58.5-57.5L647.89-440 480-272.11ZM114.5-104.7v-91h731v91h-731Z" ],
			600 => [ "0 -960 960 960", "M107-770.17v-106.01h746v106.01H107Zm373 508.82L301.35-440 376-514.09l51 50V-693h106v228.91l51-50L658.65-440 480-261.35ZM107-83.82v-106.01h746v106.01H107Z" ],
			700 => [ "0 -960 960 960", "M97-778v-126h766v126H97Zm383 531L287-440l89-88 41 40v-215h126v215l41-40 89 88-193 193ZM97-56v-126h766v126H97Z" ],
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
