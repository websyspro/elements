<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconDownload2
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-132v-28h536v28H212Zm267-148L271-559h122v-269h173v269h122L479-280Zm0-46 151-204h-92v-270H421v270h-92l150 204Zm1-204Z" ],
			200 => [ "0 -960 960 960", "M200-120v-40h560v40H200Zm279.23-150.77L254.62-568.46h130.76V-840h188.47v271.54h130.77L479.23-270.77Zm0-65.38 142.92-191.54h-88.3V-800H425.38v272.31h-88.3l142.15 191.54Zm.77-191.54Z" ],
			300 => [ "0 -960 960 960", "M180-100v-60h600v60H180Zm299.62-155.39L227.31-584.23h145.38V-860h214.23v275.77h145.39L479.62-255.39Zm0-97.69 129.46-170.77h-82.16V-800h-94.23v276.15h-82.15l129.08 170.77Zm.38-170.77Z" ],
			400 => [ "0 -960 960 960", "M160-80v-80h640v80H160Zm320-160L200-600h160v-280h240v280h160L480-240Zm0-130 116-150h-76v-280h-80v280h-76l116 150Zm0-150Z" ],
			500 => [ "0 -960 960 960", "M151.87-71.87v-91h656.26v91H151.87Zm328.13-171L182.3-622.48H349v-265.65h262v265.65h166.7L480-242.87Zm0-147.93 110.98-140.92H520v-265.41h-80v265.41h-70.98L480-390.8Zm0-140.92Z" ],
			600 => [ "0 -960 960 960", "M140.78-60.78v-106h678.44v106H140.78Zm339.22-186L158.17-653.13H334v-246.09h292v246.09h175.83L480-246.78Zm0-172.4L584.13-547.7H520v-245.52h-80v245.52h-64.13L480-419.18Zm0-128.52Z" ],
			700 => [ "0 -960 960 960", "M126-46v-126h708v126H126Zm354-206L126-694h188v-220h332v220h188L480-252Zm0-205 95-112h-55v-219h-80v219h-55l95 112Zm0-112Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconDownload2" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
