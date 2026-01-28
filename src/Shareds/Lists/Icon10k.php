<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class Icon1k
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "viewbox" => "0 -960 960 960", "path" => "M280-376h28v-208h-88v28h60v180Zm120 0h92q12 0 20-8t8-20v-152q0-12-8-20t-20-8h-92q-12 0-20 8t-8 20v152q0 12 8 20t20 8Zm0-28v-152h92v152h-92Zm184 28h28v-96l98 96h42L642-482l110-102h-40l-100 94v-94h-28v208ZM232-172q-26 0-43-17t-17-43v-496q0-26 17-43t43-17h496q26 0 43 17t17 43v496q0 26-17 43t-43 17H232Zm0-28h496q12 0 22-10t10-22v-496q0-12-10-22t-22-10H232q-12 0-22 10t-10 22v496q0 12 10 22t22 10Zm-32-560v560-560Z" ],
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
					"xmlns" => "http://www.w3.org/2000/svg"
					"viewBox" => "{$viewBox}"
					"height" => "{$size}"
					"width" => "{$size}"
					"fill" => "{$fill}"
				]
			);
	}
}
