<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconMoveSelectionUp
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M290-448v-380h380v380H290Zm28-28h324v-324H318v324Zm312 186v-40h40v40h-40Zm-340 0v-40h40v40h-40Zm340 158v-40h40v40h-40Zm-170 0v-40h40v40h-40Zm-170 0v-40h40v40h-40Zm190-506Z" ],
			200 => [ "0 -960 960 960", "M278.46-436.92V-840h403.08v403.08H278.46Zm40-40h323.08V-800H318.46v323.08Zm313.85 198.46v-49.23h49.23v49.23h-49.23Zm-353.85 0v-49.23h49.23v49.23h-49.23ZM632.31-120v-49.23h49.23V-120h-49.23Zm-176.93 0v-49.23h49.24V-120h-49.24Zm-176.92 0v-49.23h49.23V-120h-49.23ZM480-638.46Z" ],
			300 => [ "0 -960 960 960", "M259.23-418.46V-860h441.54v441.54H259.23Zm60-60h321.54V-800H319.23v321.54Zm316.92 219.23v-64.62h64.62v64.62h-64.62Zm-376.92 0v-64.62h64.62v64.62h-64.62ZM636.15-100v-64.62h64.62V-100h-64.62Zm-188.46 0v-64.62h64.62V-100h-64.62Zm-188.46 0v-64.62h64.62V-100h-64.62ZM480-639.23Z" ],
			400 => [ "0 -960 960 960", "M240-400v-480h480v480H240Zm80-80h320v-320H320v320Zm320 240v-80h80v80h-80Zm-400 0v-80h80v80h-80ZM640-80v-80h80v80h-80Zm-200 0v-80h80v80h-80Zm-200 0v-80h80v80h-80Zm240-560Z" ],
			500 => [ "0 -960 960 960", "M233.54-394.74v-493.39h493.39v493.39H233.54Zm91-91h311.39v-311.39H324.54v311.39ZM635.93-233.3v-91h91v91h-91Zm-402.39 0v-91h91v91h-91ZM635.93-71.87v-91h91v91h-91Zm-201.19 0v-91h91v91h-91Zm-201.2 0v-91h91v91h-91Zm246.7-569.56Z" ],
			600 => [ "0 -960 960 960", "M224.74-387.56v-511.66h511.65v511.66H224.74Zm106-106.01h299.65v-299.65H330.74v299.65Zm299.65 269.4v-106h106v106h-106Zm-405.65 0v-106h106v106h-106ZM630.39-60.78v-106h106v106h-106Zm-202.83 0v-106h106.01v106H427.56Zm-202.82 0v-106h106v106h-106Zm255.83-582.61Z" ],
			700 => [ "0 -960 960 960", "M213-378v-536h536v536H213Zm126-126h284v-284H339v284Zm284 292v-126h126v126H623Zm-410 0v-126h126v126H213ZM623-46v-126h126v126H623Zm-205 0v-126h126v126H418Zm-205 0v-126h126v126H213Zm268-600Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconMoveSelectionUp" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
