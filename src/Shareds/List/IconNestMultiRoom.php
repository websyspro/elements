<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconNestMultiRoom
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-172v-402l268-202 268 202v402H212Zm28-28h306v-159H240v159Zm334 0h146v-159H574v159ZM240-387h146v-159H240v159Zm174 0h306v-159H414v159ZM257-573h446L480-740 257-573Z" ],
			200 => [ "0 -960 960 960", "M200-160v-420l280-210.77L760-580v420H200Zm40-40h300v-150H240v150Zm340 0h140v-150H580v150ZM240-390h140v-149.77H240V-390Zm180 0h300v-149.77H420V-390ZM265.08-579h429.84L480-740 265.08-579Z" ],
			300 => [ "0 -960 960 960", "M180-140v-450l300-225.38L780-590v450H180Zm60-60h290v-135H240v135Zm350 0h130v-135H590v135ZM240-395h130v-134.39H240V-395Zm190 0h290v-134.39H430V-395ZM278.54-589h402.92L480-740 278.54-589Z" ],
			400 => [ "0 -960 960 960", "M160-120v-480l320-240 320 240v480H160Zm80-80h280v-120H240v120Zm360 0h120v-120H600v120ZM240-400h120v-119H240v119Zm200 0h280v-119H440v119ZM292-599h376L480-740 292-599Z" ],
			500 => [ "0 -960 960 960", "M155.22-115.22v-487.17L480-845.98l324.78 243.59v487.17H155.22Zm91-91h270.67v-112.35H246.22v112.35Zm356.89 0h110.67v-112.35H603.11v112.35ZM246.22-404.78h110.67v-111.35H246.22v111.35Zm196.89 0h270.67v-111.35H443.11v111.35ZM306.59-602.11h346.82L480-732.35 306.59-602.11Z" ],
			600 => [ "0 -960 960 960", "M148.7-108.7v-496.95L480-854.13l331.3 248.48v496.95H148.7Zm106-106h257.95v-101.91H254.7v101.91Zm352.65 0h97.95v-101.91h-97.95v101.91ZM254.7-411.3h97.95v-100.92H254.7v100.92Zm192.65 0H705.3v-100.92H447.35v100.92ZM326.48-606.35h307.04L480-721.91 326.48-606.35Z" ],
			700 => [ "0 -960 960 960", "M140-100v-510l340-255 340 255v510H140Zm126-126h241v-88H266v88Zm347 0h81v-88h-81v88ZM266-420h81v-87h-81v87Zm187 0h241v-87H453v87ZM353-612h254l-127-96-127 96Z" ],
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
