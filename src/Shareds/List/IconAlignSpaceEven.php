<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAlignSpaceEven
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-800v-28h696v28H132Zm0 668v-28h696v28H132Zm174-454v-68h348v68H306Zm0 280v-68h348v68H306Z" ],
			200 => [ "0 -960 960 960", "M120-800v-40h720v40H120Zm0 680v-40h720v40H120Zm180-460v-80h360v80H300Zm0 280v-80h360v80H300Z" ],
			300 => [ "0 -960 960 960", "M100-800v-60h760v60H100Zm0 700v-60h760v60H100Zm190-470v-100h380v100H290Zm0 280v-100h380v100H290Z" ],
			400 => [ "0 -960 960 960", "M80-800v-80h800v80H80Zm0 720v-80h800v80H80Zm200-480v-120h400v120H280Zm0 280v-120h400v120H280Z" ],
			500 => [ "0 -960 960 960", "M71.87-797.13v-91h816.26v91H71.87Zm0 725.26v-91h816.26v91H71.87ZM274.5-554.5v-131h411v131h-411Zm0 280v-131h411v131h-411Z" ],
			600 => [ "0 -960 960 960", "M60.78-793.22v-106h838.44v106H60.78Zm0 732.44v-106h838.44v106H60.78ZM267-547v-146h426v146H267Zm0 280v-146h426v146H267Z" ],
			700 => [ "0 -960 960 960", "M46-788v-126h868v126H46Zm0 742v-126h868v126H46Zm211-491v-166h446v166H257Zm0 280v-166h446v166H257Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAlignSpaceEven" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
