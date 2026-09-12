<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAlignJustifyStretch
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M800-132v-696h28v696h-28Zm-668 0v-696h28v696h-28Zm362-454v-68h200v68H494Zm-228 0v-68h200v68H266Zm228 280v-68h200v68H494Zm-228 0v-68h200v68H266Z" ],
			200 => [ "0 -960 960 960", "M800-120v-720h40v720h-40Zm-680 0v-720h40v720h-40Zm380-460v-80h200v80H500Zm-240 0v-80h200v80H260Zm240 280v-80h200v80H500Zm-240 0v-80h200v80H260Z" ],
			300 => [ "0 -960 960 960", "M800-100v-760h60v760h-60Zm-700 0v-760h60v760h-60Zm410-470v-100h200v100H510Zm-260 0v-100h200v100H250Zm260 280v-100h200v100H510Zm-260 0v-100h200v100H250Z" ],
			400 => [ "0 -960 960 960", "M800-80v-800h80v800h-80ZM80-80v-800h80v800H80Zm440-480v-120h200v120H520Zm-280 0v-120h200v120H240Zm280 280v-120h200v120H520Zm-280 0v-120h200v120H240Z" ],
			500 => [ "0 -960 960 960", "M797.13-71.87v-816.26h91v816.26h-91Zm-725.26 0v-816.26h91v816.26h-91ZM520-554.5v-131h205.5v131H520Zm-285.5 0v-131H440v131H234.5Zm285.5 280v-131h205.5v131H520Zm-285.5 0v-131H440v131H234.5Z" ],
			600 => [ "0 -960 960 960", "M793.22-60.78v-838.44h106v838.44h-106Zm-732.44 0v-838.44h106v838.44h-106ZM520-547v-146h213v146H520Zm-293 0v-146h213v146H227Zm293 280v-146h213v146H520Zm-293 0v-146h213v146H227Z" ],
			700 => [ "0 -960 960 960", "M788-46v-868h126v868H788ZM46-46v-868h126v868H46Zm474-491v-166h223v166H520Zm-303 0v-166h223v166H217Zm303 280v-166h223v166H520Zm-303 0v-166h223v166H217Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAlignJustifyStretch" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
