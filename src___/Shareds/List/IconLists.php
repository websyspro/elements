<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconLists
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-212v-60h60v60h-60Zm180 0v-60h516v60H312ZM132-450v-60h60v60h-60Zm180 0v-60h516v60H312ZM132-688v-60h60v60h-60Zm180 0v-60h516v60H312Z" ],
			200 => [ "0 -960 960 960", "M120-200v-83.08h83.08V-200H120Zm193.85 0v-83.08H840V-200H313.85ZM120-438.46v-83.08h83.08v83.08H120Zm193.85 0v-83.08H840v83.08H313.85ZM120-676.92V-760h83.08v83.08H120Zm193.85 0V-760H840v83.08H313.85Z" ],
			300 => [ "0 -960 960 960", "M100-180v-121.54h121.54V-180H100Zm216.92 0v-121.54H860V-180H316.92ZM100-419.23v-121.54h121.54v121.54H100Zm216.92 0v-121.54H860v121.54H316.92ZM100-658.46V-780h121.54v121.54H100Zm216.92 0V-780H860v121.54H316.92Z" ],
			400 => [ "0 -960 960 960", "M80-160v-160h160v160H80Zm240 0v-160h560v160H320ZM80-400v-160h160v160H80Zm240 0v-160h560v160H320ZM80-640v-160h160v160H80Zm240 0v-160h560v160H320Z" ],
			500 => [ "0 -960 960 960", "M71.87-151.87v-165.5h165.5v165.5H71.87Zm245.5 0v-165.5h570.76v165.5H317.37Zm-245.5-245.5v-165.5h165.5v165.5H71.87Zm245.5 0v-165.5h570.76v165.5H317.37Zm-245.5-245.5v-165.26h165.5v165.26H71.87Zm245.5 0v-165.26h570.76v165.26H317.37Z" ],
			600 => [ "0 -960 960 960", "M60.78-140.78v-173h173v173h-173Zm253 0v-173h585.44v173H313.78Zm-253-253v-173h173v173h-173Zm253 0v-173h585.44v173H313.78Zm-253-253v-172.44h173v172.44h-173Zm253 0v-172.44h585.44v172.44H313.78Z" ],
			700 => [ "0 -960 960 960", "M46-126v-183h183v183H46Zm263 0v-183h605v183H309ZM46-389v-183h183v183H46Zm263 0v-183h605v183H309ZM46-652v-182h183v182H46Zm263 0v-182h605v182H309Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconLists" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
