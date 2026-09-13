<?php

namespace Websyspro\Elements\Doms\Icons;

use Websyspro\Elements\Enums\IconTypeWeight;
use Websyspro\Elements\Doms\Icon;

class IconArrowLeft
extends Icon
{
	protected function handlerWeight(
		IconTypeWeight $iconWeightType
	): array {
		return match( $iconWeightType->value ){
			100 => [ "0 -960 960 960", "M534-342 396-480l138-138v276Z" ],
			200 => [ "0 -960 960 960", "M540-327.69 387.69-480 540-632.31v304.62Z" ],
			300 => [ "0 -960 960 960", "M550-303.85 373.85-480 550-656.15v352.3Z" ],
			400 => [ "0 -960 960 960", "M560-280 360-480l200-200v400Z" ],
			500 => [ "0 -960 960 960", "M565.5-266.85 352.35-480 565.5-693.15v426.3Z" ],
			600 => [ "0 -960 960 960", "M573-248.91 341.91-480 573-711.09v462.18Z" ],
			700 => [ "0 -960 960 960", "M583-225 328-480l255-255v510Z" ]
		};
	}
}