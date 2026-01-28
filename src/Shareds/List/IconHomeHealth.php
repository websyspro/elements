<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconHomeHealth
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M446-306h68v-100h100v-68H514v-100h-68v100H346v68h100v100ZM212-172v-402l268-202 268 202v402H212Zm28-28h480v-360L480-740 240-560v360Zm240-270Z" ],
			200 => [ "0 -960 960 960", "M440-300h80v-100h100v-80H520v-100h-80v100H340v80h100v100ZM200-160v-420l280-210.77L760-580v420H200Zm40-40h480v-360L480-740 240-560v360Zm240-270Z" ],
			300 => [ "0 -960 960 960", "M430-290h100v-100h100v-100H530v-100H430v100H330v100h100v100ZM180-140v-450l300-225.38L780-590v450H180Zm60-60h480v-360L480-740 240-560v360Zm240-270Z" ],
			400 => [ "0 -960 960 960", "M420-280h120v-100h100v-120H540v-100H420v100H320v120h100v100ZM160-120v-480l320-240 320 240v480H160Zm80-80h480v-360L480-740 240-560v360Zm240-270Z" ],
			500 => [ "0 -960 960 960", "M414.5-274.5h131v-100h100v-131h-100v-100h-131v100h-100v131h100v100ZM151.87-111.87v-492.2L480-850.28l328.13 246.13v492.28H151.87Zm91-91h474.26v-355.7L480-736.41 242.87-558.57v355.7ZM480-469.76Z" ],
			600 => [ "0 -960 960 960", "M407-267h146v-100h100v-146H553v-100H407v100H307v146h100v100ZM140.78-100.78v-508.83L480-864.31 819.22-609.8v509.02H140.78Zm106-106h466.44v-349.83L480-731.52 246.78-556.61v349.83ZM480-469.43Z" ],
			700 => [ "0 -960 960 960", "M397-257h166v-100h100v-166H563v-100H397v100H297v166h100v100ZM126-86v-531l354-266 354 265.67V-86H126Zm126-126h456v-342L480-725 252-554v342Zm228-257Z" ],
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
