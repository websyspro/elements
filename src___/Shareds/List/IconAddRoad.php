<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconAddRoad
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M694-54v-120H574v-28h120v-120h28v120h120v28H722v120h-28Zm0-388v-332h28v332h-28ZM238-174v-600h28v600h-28Zm228-480v-120h28v120h-28Zm0 240v-120h28v120h-28Zm0 240v-120h28v120h-28Z" ],
			200 => [ "0 -960 960 960", "M700-50.77v-120H580v-40h120v-120h40v120h120v40H740v120h-40Zm0-390.77V-780h40v338.46h-40ZM220-170.77V-780h40v609.23h-40Zm240-480V-780h40v129.23h-40Zm0 240V-540h40v129.23h-40Zm0 240V-300h40v129.23h-40Z" ],
			300 => [ "0 -960 960 960", "M710-45.39v-120H590v-59.99h120v-120h60v120h120v59.99H770v120h-60Zm0-395.38V-790h60v349.23h-60ZM190-165.39V-790h60v624.61h-60Zm260-480V-790h60v144.61h-60Zm0 240V-550h60v144.61h-60Zm0 240V-310h60v144.61h-60Z" ],
			400 => [ "0 -960 960 960", "M720-40v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm0-400v-360h80v360h-80ZM160-160v-640h80v640h-80Zm280-480v-160h80v160h-80Zm0 240v-160h80v160h-80Zm0 240v-160h80v160h-80Z" ],
			500 => [ "0 -960 960 960", "M712.59-38.09v-114.5h-114.5v-91h114.5v-114.5h91v114.5h114.5v91h-114.5v114.5h-91Zm0-396.41v-372.91h91v372.91h-91ZM138-152.59v-654.82h91v654.82h-91ZM425.41-640v-167.41h91V-640h-91Zm0 243.59v-167.18h91v167.18h-91Zm0 243.82V-320h91v167.41h-91Z" ],
			600 => [ "0 -960 960 960", "M702.48-35.48v-107h-107v-106h107v-107h106v107h107v106h-107v107h-106Zm0-391.52v-390.52h106V-427h-106ZM108-142.48v-675.04h106v675.04H108ZM405.52-640v-177.52h106V-640h-106Zm0 248.48v-176.96h106v176.96h-106Zm0 249.04V-320h106v177.52h-106Z" ],
			700 => [ "0 -960 960 960", "M689-32v-97h-97v-126h97v-97h126v97h97v126h-97v97H689Zm0-385v-414h126v414H689ZM68-129v-702h126v702H68Zm311-511v-191h126v191H379Zm0 255v-190h126v190H379Zm0 256v-191h126v191H379Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconAddRoad" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
