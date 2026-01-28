<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconWindowOpen
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-172v-616h536v616H212Zm28-322h212v-28h56v28h212v-266H240v266Zm0 294h480-480Z" ],
			200 => [ "0 -960 960 960", "M200-160v-640h560v640H200Zm40-340h209.23v-30.77h61.54V-500H720v-260H240v260Zm0 300h480-480Z" ],
			300 => [ "0 -960 960 960", "M180-140v-680h600v680H180Zm60-370h204.62v-35.38h70.76V-510H720v-250H240v250Zm0 310h480-480Z" ],
			400 => [ "0 -960 960 960", "M160-120v-720h640v720H160Zm80-400h200v-40h80v40h200v-240H240v240Zm0 320h480-480Z" ],
			500 => [ "0 -960 960 960", "M154.5-114.5v-731h651v731h-651Zm91-411h189v-40h91v40h189v-229h-469v229Zm0 320h469-469Z" ],
			600 => [ "0 -960 960 960", "M147-107v-746h666v746H147Zm106-426h174v-40h106v40h174v-214H253v214Zm0 320h454-454Z" ],
			700 => [ "0 -960 960 960", "M137-97v-766h686v766H137Zm126-446h154v-40h126v40h154v-194H263v194Zm0 320h434-434Z" ],
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
