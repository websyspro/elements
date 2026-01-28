<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSpeed05
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M319-306v-28h28v28h-28Zm94 0v-28h128q14 0 23-9t9-23v-68q0-14-9-23t-23-9H413v-188h188v28H441v132h100q26 0 43 17t17 43v68q0 26-17 43t-43 17H413Z" ],
			200 => [ "0 -960 960 960", "M310-300v-40h40v40h-40Zm100 0v-40h135.38q10.77 0 17.7-6.92 6.92-6.93 6.92-17.7v-70.76q0-10.77-6.92-17.7-6.93-6.92-17.7-6.92H410v-200h200v40H450v120h95.38q27.62 0 46.12 18.5Q610-463 610-435.38v70.76q0 27.62-18.5 46.12Q573-300 545.38-300H410Z" ],
			300 => [ "0 -960 960 960", "M295-290v-60h60v60h-60Zm110 0v-60h147.69q5.39 0 8.85-3.46t3.46-8.85v-75.38q0-5.39-3.46-8.85t-8.85-3.46H405v-220h220v60H465v100h87.69Q583-510 604-489q21 21 21 51.31v75.38Q625-332 604-311q-21 21-51.31 21H405Z" ],
			400 => [ "0 -960 960 960", "M280-280v-80h80v80h-80Zm120 0v-80h160v-80H400v-240h240v80H480v80h80q33 0 56.5 23.5T640-440v80q0 33-23.5 56.5T560-280H400Z" ],
			500 => [ "0 -960 960 960", "M275.93-280v-83.59h83.59V-280h-83.59Zm123.59 0v-83.59h161.2v-74.5h-161.2V-680H644.3v83.59H483.11v74.5h77.61q35.63 0 59.61 24.09 23.97 24.1 23.97 59.73v74.5q0 35.63-23.97 59.61Q596.35-280 560.72-280h-161.2Z" ],
			600 => [ "0 -960 960 960", "M270.39-280v-88.48h88.48V-280h-88.48Zm128.48 0v-88.48H561.7v-67H398.87V-680h251.3v88.48H487.35v67h74.35q39.21 0 63.84 24.91 24.63 24.91 24.63 64.13v67q0 39.22-24.63 63.85Q600.91-280 561.7-280H398.87Z" ],
			700 => [ "0 -960 960 960", "M263-280v-95h95v95h-95Zm135 0v-95h165v-57H398v-248h260v95H493v57h70q44 0 69.5 26t25.5 70v57q0 44-25.5 69.5T563-280H398Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSpeed05" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
