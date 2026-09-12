<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconSignalCellularPause
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m132-132 696-696v426h-28v-358L200-160h378v28H132Zm546 0v-170h28v170h-28Zm108 0v-170h28v170h-28ZM500-460Z" ],
			200 => [ "0 -960 960 960", "m120-120 720-720v429.23h-40v-332.38L216.85-160h347.77v40H120Zm540 0v-195.38h40V-120h-40Zm120 0v-195.38h40V-120h-40ZM508.54-451.69Z" ],
			300 => [ "0 -960 960 960", "m100-100 760-760v434.62h-60v-289.7L244.92-160h297.39v60H100Zm530 0v-237.69h60V-100h-60Zm140 0v-237.69h60V-100h-60ZM522.77-437.85Z" ],
			400 => [ "0 -960 960 960", "m80-80 800-800v440h-80v-247L273-160h247v80H80Zm520 0v-280h80v280h-80Zm160 0v-280h80v280h-80ZM537-424Z" ],
			500 => [ "0 -960 960 960", "m71.87-71.87 816.26-816.26v451h-91v-231.46L291.41-162.87h231.46v91h-451Zm531 0v-285.26h87.41v285.26h-87.41Zm167.41 0v-285.26h87.42v285.26h-87.42ZM544.65-416.11Z" ],
			600 => [ "0 -960 960 960", "m60.78-60.78 838.44-838.44v466h-106v-210.26l-476.7 476.7h210.26v106h-466Zm546 0v-292.44h97.53v292.44h-97.53Zm177.53 0v-292.44h97.52v292.44h-97.52ZM555.09-405.35Z" ],
			700 => [ "0 -960 960 960", "m46-46 868-868v486H788v-182L350-172h182v126H46Zm566 0v-302h111v302H612Zm191 0v-302h111v302H803ZM569-391Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconSignalCellularPause" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
