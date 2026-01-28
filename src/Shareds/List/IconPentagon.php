<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconPentagon
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M279-174h402l135-405-336-235-336 235 135 405Zm-20 28L111-590l369-258 369 258-148 444H259Zm221-348Z" ],
			200 => [ "0 -960 960 960", "M283.38-180h393.24l132.23-396.69L480-806.62 151.15-576.69 283.38-180Zm-28.76 40L103.85-592.31 480-855.38l376.15 263.07L705.38-140H254.62ZM480-493.31Z" ],
			300 => [ "0 -960 960 960", "M290.69-190h378.62l127.61-382.85L480-794.31 163.08-572.85 290.69-190Zm-43.38 60L91.92-596.15 480-867.69l388.08 271.54L712.69-130H247.31ZM480-492.15Z" ],
			400 => [ "0 -960 960 960", "M298-200h364l123-369-305-213-305 213 123 369Zm-58 80L80-600l400-280 400 280-160 480H240Zm240-371Z" ],
			500 => [ "0 -960 960 960", "M302.07-205.5h355.86L778.3-566.85 480-775.3 181.7-566.85 302.07-205.5Zm-66.14 91L73.3-602.15 480-886.7l406.7 284.55L724.07-114.5H235.93ZM480-490.52Z" ],
			600 => [ "0 -960 960 960", "M307.61-213h344.78l116.78-350.91L480-766.17 190.83-563.91 307.61-213Zm-77.22 106L64.17-605.09 480-895.83l415.83 290.74L729.61-107H230.39ZM480-489.87Z" ],
			700 => [ "0 -960 960 960", "M315-223h330l112-337-277-194-277 194 112 337ZM223-97 52-609l428-299 428 299L737-97H223Zm257-392Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconPentagon" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
