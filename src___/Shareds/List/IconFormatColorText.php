<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFormatColorText
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132 0v-132h696V0H132Zm126-280 212-508h20l212 508h-34l-60-146H348l-60 146h-30Zm100-172h240L482-736h-6L358-452Z" ],
			200 => [ "0 -960 960 960", "M120 0v-138.46h720V0H120Zm129.23-280 211.54-520h38.46l211.54 520h-48.31l-57.69-145.54H352.62L294.46-280h-45.23Zm117.54-184h223.38L482-736h-5.54L366.77-464Z" ],
			300 => [ "0 -960 960 960", "M100 0v-149.23h760V0H100Zm134.62-280 210.77-540h69.22l210.77 540h-72.15l-53.84-144.77H360.31L305.23-280h-70.61Zm146.76-204h195.7L482-736h-4.77l-95.85 252Z" ],
			400 => [ "0 -960 960 960", "M80 0v-160h800V0H80Zm140-280 210-560h100l210 560h-96l-50-144H368l-52 144h-96Zm176-224h168l-82-232h-4l-82 232Z" ],
			500 => [ "0 -960 960 960", "M71.87 0v-166.22h816.26V0H71.87ZM210.2-286.22l216.21-561.91H536.7l214.54 561.91H642.33l-48.81-139.69H367.76l-51.04 139.69H210.2Zm186.76-223.52H562.8L482-738.15h-4l-81.04 228.41Z" ],
			600 => [ "0 -960 960 960", "M60.78 0v-174.7h838.44V0H60.78Zm136.04-294.7 224.7-564.52h124.31L766.57-294.7H640.04l-47.17-133.82H367.43L317.7-294.7H196.82Zm201.44-222.87h162.91L482-741.09h-4l-79.74 223.52Z" ],
			700 => [ "0 -960 960 960", "M46 0v-186h868V0H46Zm133-306 236-568h143l229 568H637l-45-126H367l-48 126H179Zm221-222h159l-77-217h-4l-78 217Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFormatColorText" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
