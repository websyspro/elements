<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconUngroup
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m348-329-19-19 198-198H346v-28h228v228h-28v-181L348-329Zm412-151v-280H480v-28h308v308h-28ZM232-172q-26 0-43-17t-17-43v-556h28v556q0 12 10 22t22 10h556v28H232Z" ],
			200 => [ "0 -960 960 960", "M348-320.46 320.46-348l192-192H340v-40h240v240h-40v-172.46l-192 192ZM760-480v-280H480v-40h320v320h-40ZM224.62-160q-27.62 0-46.12-18.5Q160-197 160-224.62V-800h40v575.38q0 9.24 7.69 16.93 7.69 7.69 16.93 7.69H800v40H224.62Z" ],
			300 => [ "0 -960 960 960", "M348-306.23 306.23-348l182-182H330v-60h260v260h-60v-158.23l-182 182ZM760-480v-280H480v-60h340v340h-60ZM212.31-140Q182-140 161-161q-21-21-21-51.31V-820h60v607.69q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85H820v60H212.31Z" ],
			400 => [ "0 -960 960 960", "m348-292-56-56 172-172H320v-80h280v280h-80v-144L348-292Zm412-188v-280H480v-80h360v360h-80ZM200-120q-33 0-56.5-23.5T120-200v-640h80v640h640v80H200Z" ],
			500 => [ "0 -960 960 960", "M348-284.11 284.11-348l166.5-166.5H314.5v-91h291v291h-91v-136.11L348-284.11Zm409.13-193.02v-280h-280v-91h371v371h-91ZM202.87-111.87q-37.78 0-64.39-26.61t-26.61-64.39v-645.26h91v645.26h645.26v91H202.87Z" ],
			600 => [ "0 -960 960 960", "M348-273.35 273.35-348l159-159H307v-106h306v306H507v-125.35l-159 159Zm405.22-199.87v-280h-280v-106h386v386h-106ZM206.78-100.78q-44.3 0-75.15-30.85-30.85-30.85-30.85-75.15v-652.44h106v652.44h652.44v106H206.78Z" ],
			700 => [ "0 -960 960 960", "m348-259-89-89 149-149H297v-126h326v326H497v-111L348-259Zm400-209v-280H468v-126h406v406H748ZM212-86q-53 0-89.5-36.5T86-212v-662h126v662h662v126H212Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconUngroup" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
