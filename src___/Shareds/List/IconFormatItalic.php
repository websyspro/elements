<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFormatItalic
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M241-239v-28h141l145-426H386v-28h312v28H557L412-267h141v28H241Z" ],
			200 => [ "0 -960 960 960", "M231.54-230v-44.62h145.38l139.23-410.76H370.77V-730h332.31v44.62H562.31L423.08-274.62h140.77V-230H231.54Z" ],
			300 => [ "0 -960 960 960", "M215.77-215v-72.31h152.69l129.62-385.38H345.39V-745h366.15v72.31H571.15L441.54-287.31h140.38V-215H215.77Z" ],
			400 => [ "0 -960 960 960", "M200-200v-100h160l120-360H320v-100h400v100H580L460-300h140v100H200Z" ],
			500 => [ "0 -960 960 960", "M194.02-192.11v-111h161.44l117.84-353.3H315.46v-111h411v111H585.02l-117.85 353.3h137.85v111h-411Z" ],
			600 => [ "0 -960 960 960", "M185.87-181.35v-126h163.39l114.91-344.17H309.26v-126h426v126H591.87L476.96-307.35h134.91v126h-426Z" ],
			700 => [ "0 -960 960 960", "M175-167v-146h166l111-332H301v-146h446v146H601L490-313h131v146H175Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFormatItalic" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
