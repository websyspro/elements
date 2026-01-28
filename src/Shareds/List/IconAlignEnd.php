<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignEnd
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-132v-28h696v28H132Zm174-414v-68h348v68H306Zm0 240v-68h348v68H306Z" ],
			200 => [ "0 -960 960 960", "M120-120v-40h720v40H120Zm180-420v-80h360v80H300Zm0 240v-80h360v80H300Z" ],
			300 => [ "0 -960 960 960", "M100-100v-60h760v60H100Zm190-430v-100h380v100H290Zm0 240v-100h380v100H290Z" ],
			400 => [ "0 -960 960 960", "M80-80v-80h800v80H80Zm200-440v-120h400v120H280Zm0 240v-120h400v120H280Z" ],
			500 => [ "0 -960 960 960", "M71.87-71.87v-91h816.26v91H71.87ZM274.5-514.5v-131h411v131h-411Zm0 240v-131h411v131h-411Z" ],
			600 => [ "0 -960 960 960", "M60.78-60.78v-106h838.44v106H60.78ZM267-507v-146h426v146H267Zm0 240v-146h426v146H267Z" ],
			700 => [ "0 -960 960 960", "M46-46v-126h868v126H46Zm211-451v-166h446v166H257Zm0 240v-166h446v166H257Z" ],
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
