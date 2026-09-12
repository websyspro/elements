<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconArrowSplit
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-466v-28h262l226-226H560v-28h188v188h-28v-140L486-466H212Zm348 254v-28h140L538-402l20-20 162 162v-140h28v188H560Z" ],
			200 => [ "0 -960 960 960", "M200-460v-40h271.69l220-220H560v-40h200v200h-40v-131.69L488.31-460H200Zm360 260v-40h131.69L537.54-393.69l28.77-28.77L720-268.31V-400h40v200H560Z" ],
			300 => [ "0 -960 960 960", "M180-450v-60h287.85l210-210H560v-60h220v220h-60v-117.85L492.15-450H180Zm380 270v-60h117.85L536.77-379.85l43.38-43.38L720-282.15V-400h60v220H560Z" ],
			400 => [ "0 -960 960 960", "M160-440v-80h304l200-200H560v-80h240v240h-80v-104L496-440H160Zm400 280v-80h104L536-366l58-58 126 128v-104h80v240H560Z" ],
			500 => [ "0 -960 960 960", "M152.11-434.74v-91h309.74l191.63-191.63h-96.35v-91h251v251h-91v-96.35L498.15-434.74H152.11Zm405.02 282.63v-91H653L535.76-358.59l65.65-65.65 115.72 117v-95.87h91v251h-251Z" ],
			600 => [ "0 -960 960 960", "M141.35-427.56v-106.01h317.56l180.22-180.21h-85.91v-106h266v266h-106v-85.91L501.09-427.56H141.35Zm411.87 286.21v-106H638L535.43-348.48l76.09-76.09 101.7 102v-84.78h106v266h-266Z" ],
			700 => [ "0 -960 960 960", "M127-418v-126h328l165-165h-72v-126h286v286H708v-72L505-418H127Zm421 291v-126h70l-83-82 90-90 83 82v-70h126v286H548Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconArrowSplit" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
