<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconLineEndArrow
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M502-313v-153H136v-28h366v-153l263 167-263 167Zm28-51 182-116-182-116v232Zm0-116Z" ],
			200 => [ "0 -960 960 960", "M487.69-286.92V-460H123.08v-40h364.61v-173.08L791.54-480 487.69-286.92Zm40-72.93L716.38-480 527.69-600.15v240.3Zm0-120.15Z" ],
			300 => [ "0 -960 960 960", "M463.85-243.46V-450H101.54v-60h362.31v-206.54L835.77-480 463.85-243.46Zm60-109.46L723.69-480 523.85-607.08v254.16Zm0-127.08Z" ],
			400 => [ "0 -960 960 960", "M440-200v-240H80v-80h360v-240l440 280-440 280Zm80-146 211-134-211-134v268Zm0-134Z" ],
			500 => [ "0 -960 960 960", "M435.22-191.39V-434.5H74.5v-91h360.72v-243.11L888.85-480 435.22-191.39Zm91-165.85L719.28-480 526.22-602.76v245.52Zm0-122.76Z" ],
			600 => [ "0 -960 960 960", "M428.7-179.65V-427H67v-106h361.7v-247.35L900.91-480 428.7-179.65Zm106-192.92L703.3-480 534.7-587.43v214.86Zm0-107.43Z" ],
			700 => [ "0 -960 960 960", "M420-164v-253H57v-126h363v-253l497 316-497 316Zm126-229 136-87-136-87v174Zm0-87Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconLineEndArrow" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
