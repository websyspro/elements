<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconToolsFlatHead
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M365-172v-28h230v28H365Zm0-68-32-225 68-271h158l68 271-32 225H365Zm24-28h182l26-186H362l27 186Zm-23-214h228l-56-226H422l-56 226Zm205 214H389h182Z" ],
			200 => [ "0 -960 960 960", "M354.62-160v-40h250.76v40H354.62Zm0-80-33.85-237.69L391.54-760h176.92l70.77 282.31L605.38-240H354.62ZM389-280h182l25.08-180H362.92L389-280Zm-21.62-220h225.24L538-720H422l-54.62 220ZM571-280H389h182Z" ],
			300 => [ "0 -960 960 960", "M337.31-140v-60h285.38v60H337.31Zm0-100-36.92-258.84L375.77-800h208.46l75.38 301.16L622.69-240H337.31ZM389-300h182l23.54-170H364.46L389-300Zm-19.31-230h220.62L538-740H422l-52.31 210ZM571-300H389h182Z" ],
			400 => [ "0 -960 960 960", "M320-120v-80h320v80H320Zm0-120-40-280 80-320h240l80 320-40 280H320Zm69-80h182l22-160H366l23 160Zm-17-240h216l-50-200H422l-50 200Zm199 240H389h182Z" ],
			500 => [ "0 -960 960 960", "M314.5-107.33v-91h331v91h-331Zm.24-130.76-40.72-289.32 81.2-325.74h249.32l81.44 325.74-40.72 289.32H314.74Zm77.61-89.8h175.3L587.5-474.5h-216l20.85 146.61ZM375.59-565.5h208.82l-49.28-197.85H425.11L375.59-565.5Zm192.06 237.61h-175.3 175.3Z" ],
			600 => [ "0 -960 960 960", "M307-90.04v-106h346v106H307Zm.56-145.44-41.69-302.04 82.83-333.57h262.04l83.39 333.57-41.69 302.04H307.56Zm89.35-103.17h166.18L580-467H379l17.91 128.35ZM380.48-573h199.04l-48.3-194.91H429.35L380.48-573Zm182.61 234.35H396.91h166.18Z" ],
			700 => [ "0 -960 960 960", "M297-67v-126h366v126H297Zm1-165-43-319 85-344h279l86 344-43 319H298Zm105-121h154l13-104H389l14 104Zm-16-230h186l-47-191h-91l-48 191Zm170 230H403h154Z" ],
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
