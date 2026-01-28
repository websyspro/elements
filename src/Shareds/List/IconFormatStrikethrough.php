<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFormatStrikethrough
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-427v-28h696v28H132Zm334-106v-186H253v-29h455v29H495v186h-29Zm0 321v-137h29v137h-29Z" ],
			200 => [ "0 -960 960 960", "M120-420.77v-40h720v40H120Zm335.38-118.46V-710H240.77v-50H720v50H505.38v170.77h-50Zm0 339.23v-142.31h50V-200h-50Z" ],
			300 => [ "0 -960 960 960", "M100-410.39v-59.99h760v59.99H100Zm337.69-139.22V-695h-217.3v-85H740v85H522.69v145.39h-85Zm0 369.61v-151.15h85V-180h-85Z" ],
			400 => [ "0 -960 960 960", "M80-400v-80h800v80H80Zm340-160v-120H200v-120h560v120H540v120H420Zm0 400v-160h120v160H420Z" ],
			500 => [ "0 -960 960 960", "M71.87-397.85v-80.24h816.26v80.24H71.87ZM414.5-558.09v-119.28H191.87v-130.76h576.26v130.76H545.74v119.28H414.5Zm0 406.22v-165.98h131.24v165.98H414.5Z" ],
			600 => [ "0 -960 960 960", "M60.78-394.91v-80.57h838.44v80.57H60.78ZM407-555.48v-118.3H180.78v-145.44h598.44v145.44H553.57v118.3H407Zm0 414.7v-174.13h146.57v174.13H407Z" ],
			700 => [ "0 -960 960 960", "M46-391v-81h868v81H46Zm351-161v-117H166v-165h628v165H564v117H397Zm0 426v-185h167v185H397Z" ],
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
