<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconTextFieldsAlt
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M80-160v-40h800v40H80Zm680-120v-508h28v508h-28Zm-562 0 212-508h20l212 508h-34l-60-145H289l-61 145h-30Zm102-172h237L419-736 300-452Z" ],
			200 => [ "0 -960 960 960", "M80-150.77V-200h800v49.23H80ZM760-280v-520h35.38v520H760Zm-570.77 0 211.54-520h38.46l211.54 520h-48.31l-57.69-144.77H293.38L234.46-280h-45.23Zm119.08-184h221.07L419.69-736h-.92L308.31-464Z" ],
			300 => [ "0 -960 960 960", "M80-135.39V-200h800v64.61H80ZM760-280v-540h47.69v540H760Zm-585.38 0 210.77-540h69.22l210.77 540h-72.15l-53.84-144.38h-238.7L245.23-280h-70.61Zm147.53-204h194.54l-95.84-252h-2.47l-96.23 252Z" ],
			400 => [ "0 -960 960 960", "M80-120v-80h800v80H80Zm680-160v-560h60v560h-60Zm-600 0 210-560h100l210 560h-96l-50-144H308l-52 144h-96Zm176-224h168l-82-232h-4l-82 232Z" ],
			500 => [ "0 -960 960 960", "M80-109v-91h800v91H80Zm680-171v-560h67.41v560H760Zm-609.57 0 215.5-560h110.29L689.8-280H581.13l-49.04-140.41H308.48L257.2-280H150.43Zm187-224h163.94l-79.85-226.02h-4L337.43-504Z" ],
			600 => [ "0 -960 960 960", "M80-94v-106h800v106H80Zm680-186v-560h77.52v560H760Zm-622.61 0 223-560H484.7l218.48 560H577.22l-47.74-135.52H309.13L258.83-280H137.39Zm202-224h158.39l-76.91-217.87h-4L339.39-504Z" ],
			700 => [ "0 -960 960 960", "M80-74v-126h800v126H80Zm680-206v-560h91v560h-91Zm-640 0 233-560h143l225 560H572l-46-129H310l-49 129H120Zm222-224h151l-73-207h-4l-74 207Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconTextFieldsAlt" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
