<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFlexNoWrap
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M92-317v-326h176v326H92Zm300 0v-326h176v326H392Zm300 0v-326h176v326H692Zm-572-28h120v-270H120v270Zm610 0h110v-270H730v270Z" ],
			200 => [ "0 -960 960 960", "M80-308.46v-343.08h190.77v343.08H80Zm304.62 0v-343.08h190.76v343.08H384.62Zm304.61 0v-343.08H880v343.08H689.23Zm-569.23-40h110.77v-263.08H120v263.08Zm616.92 0H840v-263.08H736.92v263.08Z" ],
			300 => [ "0 -960 960 960", "M60-294.23v-371.54h215.38v371.54H60Zm312.31 0v-371.54h215.38v371.54H372.31Zm312.31 0v-371.54H900v371.54H684.62Zm-564.62-60h95.39v-251.54H120v251.54Zm628.46 0H840v-251.54h-91.54v251.54Z" ],
			400 => [ "0 -960 960 960", "M40-280v-400h240v400H40Zm320 0v-400h240v400H360Zm320 0v-400h240v400H680Zm-560-80h80v-240h-80v240Zm640 0h80v-240h-80v240Z" ],
			500 => [ "0 -960 960 960", "M30.43-274.74v-410.52H280v410.52H30.43Zm324.79 0v-410.52h249.56v410.52H355.22Zm324.78 0v-410.52h249.57v410.52H680Zm-560.96-88.61h72.35v-233.3h-72.35v233.3Zm649.57 0h72.35v-233.3h-72.35v233.3Z" ],
			600 => [ "0 -960 960 960", "M17.39-267.56v-424.88H280v424.88H17.39Zm331.31 0v-424.88h262.6v424.88H348.7Zm331.3 0v-424.88h262.61v424.88H680ZM117.74-367.91h61.91v-224.18h-61.91v224.18Zm662.61 0h61.91v-224.18h-61.91v224.18Z" ],
			700 => [ "0 -960 960 960", "M0-258v-444h280v444H0Zm340 0v-444h280v444H340Zm340 0v-444h280v444H680ZM116-374h48v-212h-48v212Zm680 0h48v-212h-48v212Z" ],
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
