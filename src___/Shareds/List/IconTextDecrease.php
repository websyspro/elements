<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconTextDecrease
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "m72-226 212-508h20l212 508h-34l-60-146H162l-60 146H72Zm100-172h240L296-682h-6L172-398Zm448-68v-28h268v28H620Z" ],
			200 => [ "0 -960 960 960", "m64.62-220 211.53-520h38.47l211.53 520h-48.3l-57.93-145.31H167.77L109.85-220H64.62Zm117.53-184h223.39L297.38-676h-5.53l-109.7 272Zm433.23-56v-40h280v40h-280Z" ],
			300 => [ "0 -960 960 960", "m52.31-210 210.77-540h69.23l210.77 540h-72.16l-54.46-144.15H177.38L122.92-210H52.31Zm146.77-204h195.69l-95.08-252h-4.77l-95.84 252Zm408.61-36v-60h300v60h-300Z" ],
			400 => [ "0 -960 960 960", "m40-200 210-560h100l210 560h-96l-51-143H187l-51 143H40Zm176-224h168l-82-232h-4l-82 232Zm384-16v-80h320v80H600Z" ],
			500 => [ "0 -960 960 960", "m33.54-200 215.5-560h110.29l213.58 560H464.24l-49.81-139.41H190.59L140.3-200H33.54Zm187-224h163.94l-79.61-226.02h-4L220.54-424Zm380.42-12.41v-87.18h325.5v87.18h-325.5Z" ],
			600 => [ "0 -960 960 960", "m24.74-200 223-560h124.3l218.48 560H464.57l-48.18-134.52H195.48L146.17-200H24.74Zm202-224h158.39l-76.35-217.87h-4L226.74-424Zm375.52-7.52v-96.96h333v96.96h-333Z" ],
			700 => [ "0 -960 960 960", "m13-200 233-560h143l225 560H465l-46-128H202l-48 128H13Zm222-224h151l-72-207h-4l-75 207Zm369-1v-110h343v110H604Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconTextDecrease" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
