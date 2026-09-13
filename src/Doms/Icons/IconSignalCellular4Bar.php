<?php

namespace Websyspro\Elements\Doms\Icons;

use Websyspro\Elements\Enums\IconTypeWeight;
use Websyspro\Elements\Doms\Icon;

class IconSignalCellular4Bar
extends Icon
{
	protected function handlerWeight(
		IconTypeWeight $iconWeightType
	): array {
		return match( $iconWeightType->value ){
			100 => [ "0 -960 960 960", "m132-132 696-696v696H132Z" ],
			200 => [ "0 -960 960 960", "m120-120 720-720v720H120Z" ],
			300 => [ "0 -960 960 960", "m100-100 760-760v760H100Z" ],
			400 => [ "0 -960 960 960", "m80-80 800-800v800H80Z" ],
			500 => [ "0 -960 960 960", "m71.87-71.87 816.26-816.26v816.26H71.87Z" ],
			600 => [ "0 -960 960 960", "m60.78-60.78 838.44-838.44v838.44H60.78Z" ],
			700 => [ "0 -960 960 960", "m46-46 868-868v868H46Z" ]
		};
	}
}