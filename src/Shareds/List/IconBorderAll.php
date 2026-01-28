<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconBorderAll
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-616h616v616H172Zm588-28v-266H494v266h266Zm0-560H494v266h266v-266Zm-560 0v266h266v-266H200Zm0 560h266v-266H200v266Z" ],
			200 => [ "0 -960 960 960", "M160-160v-640h640v640H160Zm600-40v-260H500v260h260Zm0-560H500v260h260v-260Zm-560 0v260h260v-260H200Zm0 560h260v-260H200v260Z" ],
			300 => [ "0 -960 960 960", "M140-140v-680h680v680H140Zm620-60v-250H510v250h250Zm0-560H510v250h250v-250Zm-560 0v250h250v-250H200Zm0 560h250v-250H200v250Z" ],
			400 => [ "0 -960 960 960", "M120-120v-720h720v720H120Zm640-80v-240H520v240h240Zm0-560H520v240h240v-240Zm-560 0v240h240v-240H200Zm0 560h240v-240H200v240Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-736.26h736.26v736.26H111.87Zm645.26-91V-440H520v237.13h237.13Zm0-554.26H520V-520h237.13v-237.13Zm-554.26 0V-520H440v-237.13H202.87Zm0 554.26H440V-440H202.87v237.13Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-758.44h758.44v758.44H100.78Zm652.44-106V-440H520v233.22h233.22Zm0-546.44H520V-520h233.22v-233.22Zm-546.44 0V-520H440v-233.22H206.78Zm0 546.44H440V-440H206.78v233.22Z" ],
			700 => [ "0 -960 960 960", "M86-86v-788h788v788H86Zm662-126v-228H520v228h228Zm0-536H520v228h228v-228Zm-536 0v228h228v-228H212Zm0 536h228v-228H212v228Z" ],
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
