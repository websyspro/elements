<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconWbShade
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M767-200 557-410v-40l250 250h-40Zm-210 0v-80l80 80h-80Zm-360 0v-380h-44l164-164 164 164h-44v380H197Zm52-172h136v-208H249v208Z" ],
			200 => [ "0 -960 960 960", "M770-190.77 557.69-403.08v-53.84l266.16 266.15H770Zm-212.31 0V-280l89.23 89.23h-89.23Zm-369.23 0v-384.61h-52.31l181.54-181.54 181.54 181.54h-52.31v384.61H188.46Zm67.69-187.69h123.08v-196.92H256.15v196.92Z" ],
			300 => [ "0 -960 960 960", "M775-175.39 558.85-391.54v-76.92l293.07 293.07H775Zm-216.15 0V-280l104.61 104.61H558.85Zm-384.62 0v-392.3h-66.15l210.77-210.77 210.76 210.77h-66.15v392.3H174.23Zm93.85-213.84h101.54v-178.46H268.08v178.46Z" ],
			400 => [ "0 -960 960 960", "M780-160 560-380v-100l320 320H780Zm-220 0v-120l120 120H560Zm-400 0v-400H80l240-240 240 240h-80v400H160Zm120-240h80v-160h-80v160Z" ],
			500 => [ "0 -960 960 960", "M788.85-153.07 565.02-376.65v-105.98l329.57 329.56H788.85Zm-223.83 0v-127.41l127.42 127.41H565.02Zm-416.02.72v-403.58H65.41l251.72-251.72 251.72 251.72h-83.83v403.58H149Zm131-243.58h80v-160h-80v160Z" ],
			600 => [ "0 -960 960 960", "M800.91-143.61 571.87-372.09v-114.13l342.61 342.61H800.91Zm-229.04 0v-137.52l137.52 137.52H571.87ZM134-141.91v-408.48H45.52l267.7-267.7 267.69 267.7h-89.04v408.48H134Zm146-248.48h80v-160h-80v160Z" ],
			700 => [ "0 -960 960 960", "M817-131 581-366v-125l360 360H817Zm-236 0v-151l151 151H581Zm-467 3v-415H19l289-289 289 289h-96v415H114Zm166-255h80v-160h-80v160Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconWbShade" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
