<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSweep
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M426-266v-28h188v28H426Zm-184-10L52-466l20-20 170 170 366-366 20 20-386 386Zm344-150v-28h188v28H586Zm160-160v-28h188v28H746Z" ],
			200 => [ "0 -960 960 960", "M420-260v-40h200v40H420Zm-178-7.69L43.46-466.23 72-494.77l170 170 366-366 28.54 28.54L242-267.69ZM580-420v-40h200v40H580Zm160-160v-40h200v40H740Z" ],
			300 => [ "0 -960 960 960", "M410-250v-60h220v60H410Zm-168-3.85L29.23-466.62 72-509.38l170 170 366-366 42.77 42.76L242-253.85ZM570-410v-60h220v60H570Zm160-160v-60h220v60H730Z" ],
			400 => [ "0 -960 960 960", "M400-240v-80h240v80H400Zm-158 0L15-467l57-57 170 170 366-366 57 57-423 423Zm318-160v-80h240v80H560Zm160-160v-80h240v80H720Z" ],
			500 => [ "0 -960 960 960", "M403.83-230.91v-87.18h241.43v87.18H403.83Zm-159.68-8.61L9.26-474.41l64.89-64.89 170 170 366-366 64.89 64.89-430.89 430.89Zm319.68-151.39v-87.18h241.43v87.18H563.83Zm160-160v-87.18h241.43v87.18H723.83Z" ],
			600 => [ "0 -960 960 960", "M409.04-218.52v-96.96h243.4v96.96h-243.4Zm-161.95-20.35L1.43-484.52l75.66-75.66 170 170 366-366 75.65 75.66-441.65 441.65Zm321.95-139.65v-96.96h243.4v96.96h-243.4Zm160-160v-96.96h243.4v96.96h-243.4Z" ],
			700 => [ "0 -960 960 960", "M416-202v-110h246v110H416Zm-165-36L-9-498l90-90 170 170 366-366 90 90-456 456Zm325-124v-110h246v110H576Zm160-160v-110h246v110H736Z" ],
		};
	}

	public static function create(
		int $size,
		int $weight = 300,
		string $fill = "#000"
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->add( Path::create(
				$path
			))
			->props(
				[
					"xmlns" => "http://www.w3.org/2000/svg",
					"viewBox" => "{$viewBox}",
					"height" => "{$size}",
					"width" => "{$size}",
					"fill" => "{$fill}"
				]
			);
	}
}
