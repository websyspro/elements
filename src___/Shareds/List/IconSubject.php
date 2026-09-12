<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSubject
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-240v-40h296v28l-296 12Zm0-149v-28h536v28H212Zm0-154v-28h536v28H212Zm0-137v-40h536v40H212Z" ],
			200 => [ "0 -960 960 960", "M200-230.77V-280h320v40l-320 9.23Zm0-151.54v-40h560v40H200Zm0-155.38v-40h560v40H200ZM200-680v-49.23h560V-680H200Z" ],
			300 => [ "0 -960 960 960", "M180-215.39V-280h360v60l-360 4.61Zm0-155.76v-60h600v60H180Zm0-157.7v-60h600v60H180ZM180-680v-64.61h600V-680H180Z" ],
			400 => [ "0 -960 960 960", "M160-200v-80h400v80H160Zm0-160v-80h640v80H160Zm0-160v-80h640v80H160Zm0-160v-80h640v80H160Z" ],
			500 => [ "0 -960 960 960", "M151.87-182.3v-88.61h415.54v88.61H151.87Zm0-168.13v-88.61h656.26v88.61H151.87Zm0-168.14v-88.6h656.26v88.6H151.87Zm0-168.13v-91h656.26v91H151.87Z" ],
			600 => [ "0 -960 960 960", "M140.78-158.17v-100.35h436.74v100.35H140.78Zm0-179.22v-100.35h678.44v100.35H140.78Zm0-179.22v-100.35h678.44v100.35H140.78Zm0-179.22v-106h678.44v106H140.78Z" ],
			700 => [ "0 -960 960 960", "M126-126v-116h465v116H126Zm0-194v-116h708v116H126Zm0-194v-116h708v116H126Zm0-194v-126h708v126H126Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSubject" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
