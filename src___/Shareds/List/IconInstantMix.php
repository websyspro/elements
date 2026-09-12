<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconInstantMix
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M218-186v-286h-80v-28h188v28h-80v286h-28Zm0-434v-154h28v154h-28Zm168 0v-28h80v-126h28v126h80v28H386Zm80 434v-314h28v314h-28Zm248 0v-126h-80v-28h188v28h-80v126h-28Zm0-274v-314h28v314h-28Z" ],
			200 => [ "0 -960 960 960", "M213.85-180v-284.62h-80v-40h200v40h-80V-180h-40Zm0-435.38V-780h40v164.62h-40Zm166.15 0v-40h80V-780h40v124.62h80v40H380ZM460-180v-324.62h40V-180h-40Zm246.15 0v-124.62h-80v-40h200v40h-80V-180h-40Zm0-275.38V-780h40v324.62h-40Z" ],
			300 => [ "0 -960 960 960", "M206.92-170v-282.31h-80v-60h220v60h-80V-170h-60Zm0-437.69V-790h60v182.31h-60Zm163.08 0v-60h80V-790h60v122.31h80v60H370ZM450-170v-342.31h60V-170h-60Zm243.08 0v-122.31h-80v-60h220v60h-80V-170h-60Zm0-277.69V-790h60v342.31h-60Z" ],
			400 => [ "0 -960 960 960", "M200-160v-280h-80v-80h240v80h-80v280h-80Zm0-440v-200h80v200h-80Zm160 0v-80h80v-120h80v120h80v80H360Zm80 440v-360h80v360h-80Zm240 0v-120h-80v-80h240v80h-80v120h-80Zm0-280v-360h80v360h-80Z" ],
			500 => [ "0 -960 960 960", "M178-145.41v-280H98V-520h254.59v94.59h-80v280H178ZM178-600v-214.59h94.59V-600H178Zm174.59 0v-94.59h80v-120h94.82v120h80V-600H352.59Zm80 454.59V-520h94.82v374.59h-94.82Zm254.82 0v-120h-80V-360H862v94.59h-80v120h-94.59Zm0-294.59v-374.59H782V-440h-94.59Z" ],
			600 => [ "0 -960 960 960", "M148-125.52v-280H68V-520h274.48v114.48h-80v280H148ZM148-600v-234.48h114.48V-600H148Zm194.48 0v-114.48h80v-120h115.04v120h80V-600H342.48Zm80 474.48V-520h115.04v394.48H422.48Zm275.04 0v-120h-80V-360H892v114.48h-80v120H697.52Zm0-314.48v-394.48H812V-440H697.52Z" ],
			700 => [ "0 -960 960 960", "M108-99v-280H28v-141h301v141h-80v280H108Zm0-501v-261h141v261H108Zm221 0v-141h80v-120h142v120h80v141H329Zm80 501v-421h142v421H409Zm302 0v-120h-80v-141h301v141h-80v120H711Zm0-341v-421h141v421H711Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconInstantMix" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
