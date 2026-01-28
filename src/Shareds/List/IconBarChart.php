<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconBarChart
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M640-212v-166h108v166H640Zm-214 0v-536h108v536H426Zm-214 0v-346h108v346H212Z" ],
			200 => [ "0 -960 960 960", "M640-200v-192.31h120V-200H640Zm-220 0v-560h120v560H420Zm-220 0v-367.69h120V-200H200Z" ],
			300 => [ "0 -960 960 960", "M640-180v-236.15h140V-180H640Zm-230 0v-600h140v600H410Zm-230 0v-403.84h140V-180H180Z" ],
			400 => [ "0 -960 960 960", "M640-160v-280h160v280H640Zm-240 0v-640h160v640H400Zm-240 0v-440h160v440H160Z" ],
			500 => [ "0 -960 960 960", "M640.72-151.87v-291.48h167.41v291.48H640.72Zm-244.31 0v-656.26h167.18v656.26H396.41Zm-244.54 0v-456.26h167.41v456.26H151.87Z" ],
			600 => [ "0 -960 960 960", "M641.7-140.78v-307.13h177.52v307.13H641.7Zm-250.18 0v-678.44h176.96v678.44H391.52Zm-250.74 0v-478.44H318.3v478.44H140.78Z" ],
			700 => [ "0 -960 960 960", "M643-126v-328h191v328H643Zm-258 0v-708h190v708H385Zm-259 0v-508h191v508H126Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconBarChart" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
