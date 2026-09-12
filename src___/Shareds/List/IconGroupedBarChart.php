<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconGroupedBarChart
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-212v-391h108v391H212Zm168 0v-210h108v210H380Zm260 0v-536h108v536H640Z" ],
			200 => [ "0 -960 960 960", "M200-200v-411.54h120V-200H200Zm175.38 0v-226.15h120V-200h-120ZM640-200v-560h120v560H640Z" ],
			300 => [ "0 -960 960 960", "M180-180v-445.77h140V-180H180Zm187.69 0v-253.08h140V-180h-140ZM640-180v-600h140v600H640Z" ],
			400 => [ "0 -960 960 960", "M160-160v-480h160v480H160Zm200 0v-280h160v280H360Zm280 0v-640h160v640H640Z" ],
			500 => [ "0 -960 960 960", "M151.87-151.87V-646.7h167.17v494.83H151.87Zm207.17 0v-292.67h167.18v292.67H359.04Zm281.92 0v-656.26h167.17v656.26H640.96Z" ],
			600 => [ "0 -960 960 960", "M140.78-140.78v-515.05h176.96v515.05H140.78Zm216.96 0v-309.96H534.7v309.96H357.74Zm284.52 0v-678.44h176.96v678.44H642.26Z" ],
			700 => [ "0 -960 960 960", "M126-126v-542h190v542H126Zm230 0v-333h190v333H356Zm288 0v-708h190v708H644Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconGroupedBarChart" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
