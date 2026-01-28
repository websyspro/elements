<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignCenter
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-466v-28h696v28H132Zm174-120v-68h348v68H306Zm0 280v-68h348v68H306Z" ],
			200 => [ "0 -960 960 960", "M120-460v-40h720v40H120Zm180-120v-80h360v80H300Zm0 280v-80h360v80H300Z" ],
			300 => [ "0 -960 960 960", "M100-450v-60h760v60H100Zm190-120v-100h380v100H290Zm0 280v-100h380v100H290Z" ],
			400 => [ "0 -960 960 960", "M80-440v-80h800v80H80Zm200-120v-120h400v120H280Zm0 280v-120h400v120H280Z" ],
			500 => [ "0 -960 960 960", "M71.87-434.5v-91h816.26v91H71.87Zm202.63-131v-131h411v131h-411Zm0 302v-131h411v131h-411Z" ],
			600 => [ "0 -960 960 960", "M60.78-427v-106h838.44v106H60.78ZM267-573v-146h426v146H267Zm0 332v-146h426v146H267Z" ],
			700 => [ "0 -960 960 960", "M46-417v-126h868v126H46Zm211-166v-166h446v166H257Zm0 372v-166h446v166H257Z" ],
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
