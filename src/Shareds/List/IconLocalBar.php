<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLocalBar
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M292-146v-28h174v-276L190-760v-28h580v28L494-450v276h174v28H292Zm6-534h364l72-80H226l72 80Zm182 204 157-176H323l157 176Zm0 0Z" ],
			200 => [ "0 -960 960 960", "M280-140v-40h180v-258.46L173.85-760v-40h612.3v40L500-438.46V-180h180v40H280Zm18-540h364l72-80H226l72 80Zm182 204 146.38-164H333.62L480-476Zm0 0Z" ],
			300 => [ "0 -960 960 960", "M260-130v-60h190v-229.23L146.93-760v-60h666.14v60L510-419.23V-190h190v60H260Zm38-550h364l72-80H226l72 80Zm182 204 128.69-144H351.31L480-476Zm0 0Z" ],
			400 => [ "0 -960 960 960", "M240-120v-80h200v-200L120-760v-80h720v80L520-400v200h200v80H240Zm58-560h364l72-80H226l72 80Zm182 204 111-124H369l111 124Zm0 0Z" ],
			500 => [ "0 -960 960 960", "M234.5-114.5v-91h200v-188.52L111.87-757.13v-91h736.26v91L525.5-394.02v188.52h200v91h-491ZM302.07-680h355.86l69.37-77.13H232.7L302.07-680ZM480-480.3 586.93-600H373.07L480-480.3Zm0 0Z" ],
			600 => [ "0 -960 960 960", "M227-107v-106h200v-172.87L100.78-753.22v-106h758.44v106L533-385.87V-213h200v106H227Zm80.61-573h344.78l65.78-73.22H241.83L307.61-680ZM480-486.17 581.39-600H378.61L480-486.17Zm0 0Z" ],
			700 => [ "0 -960 960 960", "M217-97v-126h200v-152L86-748v-126h788v126L543-375v152h200v126H217Zm98-583h330l61-68H254l61 68Zm165 186 94-106H386l94 106Zm0 0Z" ],
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
