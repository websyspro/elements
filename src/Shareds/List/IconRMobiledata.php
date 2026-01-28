<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconRMobiledata
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-560v-268h168q26 0 43 17t17 43v48q0 17-15 33t-37 19l46 108h-30l-46-106H160v106h-28Zm28-134h140q14 0 23-9t9-23v-42q0-14-9-23t-23-9H160v106Z" ],
			200 => [ "0 -960 960 960", "M120-560v-280h175.38q27.62 0 46.12 18.5Q360-803 360-775.38V-726q0 18.62-14.77 35.42-14.77 16.81-36.31 21.66L355.38-560h-41.53l-46-106H160v106h-40Zm40-146h135.38q10.77 0 17.7-6.92 6.92-6.93 6.92-17.7v-44.76q0-10.77-6.92-17.7-6.93-6.92-17.7-6.92H160v94Z" ],
			300 => [ "0 -960 960 960", "M100-560v-300h187.69Q318-860 339-839q21 21 21 51.31V-736q0 21.31-14.38 39.46-14.39 18.16-35.16 26.08L357.69-560h-60.77l-46-106H160v106h-60Zm60-166h127.69q5.39 0 8.85-3.46t3.46-8.85v-49.38q0-5.39-3.46-8.85t-8.85-3.46H160v74Z" ],
			400 => [ "0 -960 960 960", "M80-560v-320h200q33 0 56.5 23.5T360-800v54q0 24-14 43.5T312-672l48 112h-80l-46-106h-74v106H80Zm80-186h120v-54H160v54Z" ],
			500 => [ "0 -960 960 960", "M71.87-564.3v-323.83H264.7q37.78 0 64.39 26.61t26.61 64.39v44.91q0 24-13.88 43.74-13.89 19.74-33.89 30.87l48.72 113.31h-84.06l-46-106H155.7v106H71.87Zm83.83-189.83h116.17v-50.17H155.7v50.17Z" ],
			600 => [ "0 -960 960 960", "M60.78-570.17v-329.05h183.04q44.31 0 75.16 30.85 30.85 30.85 30.85 75.15v32.52q0 24-13.72 44.07-13.72 20.06-33.72 31.37l49.7 115.09h-89.61l-46-106h-66.65v106H60.78Zm89.05-195.05h110.95v-44.95H149.83v44.95Z" ],
			700 => [ "0 -960 960 960", "M46-578v-336h170q53 0 89.5 36.5T342-788v16q0 24-13.5 44.5T295-695.46L346-578h-97l-46-106h-61v106H46Zm96-202h104v-38H142v38Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconRMobiledata" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
