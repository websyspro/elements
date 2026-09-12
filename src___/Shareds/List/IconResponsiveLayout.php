<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconResponsiveLayout
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-416h200v-200h416v616H172Zm416-28h172v-560H400v172h188v388Zm-188 0h160v-360H400v360Zm-200 0h172v-360H200v360Zm388-388v28-28Zm-216 28Zm188 0Zm28-28Z" ],
			200 => [ "0 -960 960 960", "M160-160v-440h200v-200h440v640H160Zm440-40h160v-560H400v160h200v400Zm-200 0h160v-360H400v360Zm-200 0h160v-360H200v360Zm400-400v40-40Zm-240 40Zm200 0Zm40-40Z" ],
			300 => [ "0 -960 960 960", "M140-140v-480h200v-200h480v680H140Zm480-60h140v-560H400v140h220v420Zm-220 0h160v-360H400v360Zm-200 0h140v-360H200v360Zm420-420v60-60Zm-280 60Zm220 0Zm60-60Z" ],
			400 => [ "0 -960 960 960", "M120-120v-520h200v-200h520v720H120Zm520-80h120v-560H400v120h240v440Zm-240 0h160v-360H400v360Zm-200 0h120v-360H200v360Zm440-440v80-80Zm-320 80Zm240 0Zm80-80Z" ],
			500 => [ "0 -960 960 960", "M110.2-111.87v-536.26h203.58v-203.59H849.8v739.85H110.2Zm536.02-91H758.8v-557.85H404.78v112.59h241.44v445.26Zm-241.44 0h150.44v-354.26H404.78v354.26Zm-203.58 0h112.58v-354.26H201.2v354.26Zm445.02-445.26v91-91Zm-332.44 91Zm241.44 0Zm91-91Z" ],
			600 => [ "0 -960 960 960", "M96.82-100.78v-558.44H305.3V-867.7h557.88v766.92H96.82Zm557.88-106h102.47V-761.7H411.3v102.48h243.4v452.44Zm-243.4 0h137.4v-346.44H411.3v346.44Zm-208.47 0H305.3v-346.44H202.83v346.44ZM654.7-659.22v106-106Zm-349.4 106Zm243.4 0Zm106-106Z" ],
			700 => [ "0 -960 960 960", "M79-86v-588h215v-215h587v803H79Zm587-126h89v-551H420v89h246v462Zm-246 0h120v-336H420v336Zm-215 0h89v-336h-89v336Zm461-462v126-126ZM294-548Zm246 0Zm126-126Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconResponsiveLayout" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
