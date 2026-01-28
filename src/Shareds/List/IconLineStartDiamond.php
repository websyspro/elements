<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconLineStartDiamond
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m360-356 124-124-124-124-124 124 124 124Zm0 40L196-480l164-164 150 150h314v28H510L360-316Zm0-164Z" ],
			200 => [ "0 -960 960 960", "M360-346.08 493.92-480 360-613.92 226.08-480 360-346.08Zm0 56.85L169.23-480 360-670.77 530.77-500h306.15v40H530.77L360-289.23ZM360-480Z" ],
			300 => [ "0 -960 960 960", "M360-329.54 510.46-480 360-630.46 209.54-480 360-329.54Zm0 84.92L124.62-480 360-715.38 565.38-510h293.08v60H565.38L360-244.62ZM360-480Z" ],
			400 => [ "0 -960 960 960", "m360-313 167-167-167-167-167 167 167 167Zm0 113L80-480l280-280 240 240h280v80H600L360-200Zm0-280Z" ],
			500 => [ "0 -960 960 960", "M360-321.85 518.15-480 360-638.15 201.85-480 360-321.85Zm0 128.55L73.3-480 360-766.7l241.2 241.2h284.3v91H601.2L360-193.3Zm0-286.7Z" ],
			600 => [ "0 -960 960 960", "M360-333.91 506.09-480 360-626.09 213.91-480 360-333.91Zm0 149.74L64.17-480 360-775.83 602.83-533H893v106H602.83L360-184.17ZM360-480Z" ],
			700 => [ "0 -960 960 960", "m360-350 130-130-130-130-130 130 130 130Zm0 178L52-480l308-308 245 245h298v126H605L360-172Zm0-308Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconLineStartDiamond" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
