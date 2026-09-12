<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconVariableInsert
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-332v-296h616v118h-28v-90H200v240h390v28H172Zm28-28v-240 240Zm668 148L718-362v130h-28v-178h178v28H738l149 151-19 19Z" ],
			200 => [ "0 -960 960 960", "M160-320v-320h640v127.69h-40V-600H200v240h383.08v40H160Zm40-40v-240 240Zm667.08 160L718.46-348.38V-220h-40v-196.92h196.92v40H746.77l147.85 149.38L867.08-200Z" ],
			300 => [ "0 -960 960 960", "M140-300v-360h680v143.85h-60V-600H200v240h371.54v60H140Zm60-60v-240 240Zm665.54 180L719.23-325.69V-200h-60v-228.46h228.46v60H761.38l145.93 146.69L865.54-180Z" ],
			400 => [ "0 -960 960 960", "M120-280v-400h720v160h-80v-80H200v240h360v80H120Zm80-80v-240 240Zm664 200L720-303v123h-80v-260h260v80H776l144 144-56 56Z" ],
			500 => [ "0 -960 960 960", "M111.87-271.87v-416.26h736.26v162.87h-91v-71.87H202.87v234.26h353.3v91h-444.3Zm91-91v-234.26 234.26Zm658.5 200.48L718.57-304.2v116.55h-82.4v-257.61h257.61v82.39H776.24l142.8 142.8-57.67 57.68Z" ],
			600 => [ "0 -960 960 960", "M100.78-260.78v-438.44h758.44v166.78h-106v-60.78H206.78v226.44h344.18v106H100.78Zm106-106v-226.44 226.44Zm651 201.13L716.61-305.83v107.74h-85.65v-254.35H885.3v85.66H776.57l141.17 141.17-59.96 59.96Z" ],
			700 => [ "0 -960 960 960", "M86-246v-468h788v172H748v-46H212v216h332v126H86Zm126-126v-216 216Zm641 202L714-308v96h-90v-250h250v90h-97l139 139-63 63Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconVariableInsert" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
