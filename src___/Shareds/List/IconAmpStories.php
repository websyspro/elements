<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAmpStories
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M332-212v-536h296v536H332Zm-128-80v-376h28v376h-28Zm524 0v-376h28v376h-28Zm-368 52h240v-480H360v480Zm0 0v-480 480Z" ],
			200 => [ "0 -960 960 960", "M320-200v-560h320v560H320Zm-135.39-80v-400h40.01v400h-40.01Zm550.77 0v-400h40.01v400h-40.01ZM360-240h240v-480H360v480Zm0 0v-480 480Z" ],
			300 => [ "0 -960 960 960", "M300-180v-600h360v600H300Zm-147.69-80v-440h60v440h-60Zm595.38 0v-440h60v440h-60ZM360-240h240v-480H360v480Zm0 0v-480 480Z" ],
			400 => [ "0 -960 960 960", "M280-160v-640h400v640H280Zm-160-80v-480h80v480h-80Zm640 0v-480h80v480h-80Zm-400 0h240v-480H360v480Zm0 0v-480 480Z" ],
			500 => [ "0 -960 960 960", "M271.87-151.87v-656.26h416.26v656.26H271.87ZM104.7-230.91v-498.18h91v498.18h-91Zm659.6 0v-498.18h91v498.18h-91Zm-401.43-11.96h234.26v-474.26H362.87v474.26Zm0 0v-474.26 474.26Z" ],
			600 => [ "0 -960 960 960", "M260.78-140.78v-678.44h438.44v678.44H260.78ZM83.82-218.52v-522.96h106.01v522.96H83.82Zm686.35 0v-522.96h106.01v522.96H770.17Zm-403.39-28.26h226.44v-466.44H366.78v466.44Zm0 0v-466.44 466.44Z" ],
			700 => [ "0 -960 960 960", "M246-126v-708h468v708H246ZM56-202v-556h126v556H56Zm722 0v-556h126v556H778Zm-406-50h216v-456H372v456Zm0 0v-456 456Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAmpStories" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
