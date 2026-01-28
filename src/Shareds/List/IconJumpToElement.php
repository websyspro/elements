<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconJumpToElement
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M462-462v-108h28v80h80v28H462Zm258 0v-28h80v-80h28v108H720ZM462-720v-108h108v28h-80v80h-28Zm338 0v-80h-80v-28h108v108h-28ZM152-132l-20-20 282-282H172v-28h290v290h-28v-242L152-132Z" ],
			200 => [ "0 -960 960 960", "M456.92-456.92v-120h40v80h80v40h-120Zm263.08 0v-40h80v-80h40v120H720ZM456.92-720v-120h120v40h-80v80h-40ZM800-720v-80h-80v-40h120v120h-40ZM148.31-120 120-148.31l268.61-268.61H160v-40h296.92V-160h-40v-228.61L148.31-120Z" ],
			300 => [ "0 -960 960 960", "M448.46-448.46v-140h60v80h80v60h-140Zm271.54 0v-60h80v-80h60v140H720ZM448.46-720v-140h140v60h-80v80h-60ZM800-720v-80h-80v-60h140v140h-60ZM142.15-100 100-142.15l246.31-246.31H140v-60h308.46V-140h-60v-206.31L142.15-100Z" ],
			400 => [ "0 -960 960 960", "M440-440v-160h80v80h80v80H440Zm280 0v-80h80v-80h80v160H720ZM440-720v-160h160v80h-80v80h-80Zm360 0v-80h-80v-80h160v160h-80ZM136-80l-56-56 224-224H120v-80h320v320h-80v-184L136-80Z" ],
			500 => [ "0 -960 960 960", "M445.26-445.26v-171h91v80h80v91h-171Zm271.87 0v-91h80v-80h91v171h-171ZM445.26-717.13v-171h171v91h-80v80h-91Zm351.87 0v-80h-80v-91h171v171h-91ZM135.76-71.87l-63.89-63.89 218.74-218.5H111.87v-91h333.39v333.39h-91v-178.74L135.76-71.87Z" ],
			600 => [ "0 -960 960 960", "M452.44-452.44v-186h106v80h80v106h-186Zm260.78 0v-106h80v-80h106v186h-186ZM452.44-713.22v-186h186v106h-80v80h-106Zm340.78 0v-80h-80v-106h186v186h-106ZM135.43-60.78l-74.65-74.65 211.57-211H100.78v-106.01h351.66v351.66H346.43v-171.57l-211 211.57Z" ],
			700 => [ "0 -960 960 960", "M462-462v-206h126v80h80v126H462Zm246 0v-126h80v-80h126v206H708ZM462-708v-206h206v126h-80v80H462Zm326 0v-80h-80v-126h206v206H788ZM135-46l-89-89 202-201H86v-126h376v376H336v-162L135-46Z" ],
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
