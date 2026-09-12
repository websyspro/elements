<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconLineEndDiamond
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m600-356 124-124-124-124-124 124 124 124Zm0 40L450-466H136v-28h314l150-150 164 164-164 164Zm0-164Z" ],
			200 => [ "0 -960 960 960", "M600-346.08 733.92-480 600-613.92 466.08-480 600-346.08Zm0 56.85L429.23-460H123.08v-40h306.15L600-670.77 790.77-480 600-289.23ZM600-480Z" ],
			300 => [ "0 -960 960 960", "M600-329.54 750.46-480 600-630.46 449.54-480 600-329.54Zm0 84.92L394.62-450H101.54v-60h293.08L600-715.38 835.38-480 600-244.62ZM600-480Z" ],
			400 => [ "0 -960 960 960", "m600-313 167-167-167-167-167 167 167 167Zm0 113L360-440H80v-80h280l240-240 280 280-280 280Zm0-280Z" ],
			500 => [ "0 -960 960 960", "M600-321.85 758.15-480 600-638.15 441.85-480 600-321.85Zm0 128.55L358.8-434.5H74.5v-91h284.3L600-766.7 886.7-480 600-193.3Zm0-286.7Z" ],
			600 => [ "0 -960 960 960", "M600-333.91 746.09-480 600-626.09 453.91-480 600-333.91Zm0 149.74L357.17-427H67v-106h290.17L600-775.83 895.83-480 600-184.17ZM600-480Z" ],
			700 => [ "0 -960 960 960", "m600-350 130-130-130-130-130 130 130 130Zm0 178L355-417H57v-126h298l245-245 308 308-308 308Zm0-308Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconLineEndDiamond" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
