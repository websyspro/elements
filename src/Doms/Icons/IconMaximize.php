<?php

namespace Websyspro\Elements\Doms\Icons;

use Websyspro\Elements\Enums\IconTypeWeight;
use Websyspro\Elements\Doms\Icon;

class IconMaximize
extends Icon
{
	protected function handlerWeight(
		IconTypeWeight $iconWeightType
	): array {
		return match( $iconWeightType->value ){
			100 => [ "0 -960 960 960", "M212-760v-28h536v28H212Z" ],
			200 => [ "0 -960 960 960", "M200-760v-40h560v40H200Z" ],
			300 => [ "0 -960 960 960", "M180-760v-60h600v60H180Z" ],
			400 => [ "0 -960 960 960", "M160-760v-80h640v80H160Z" ],
			500 => [ "0 -960 960 960", "M151.87-757.13v-91h656.26v91H151.87Z" ],
			600 => [ "0 -960 960 960", "M140.78-753.22v-106h678.44v106H140.78Z" ],
			700 => [ "0 -960 960 960", "M126-748v-126h708v126H126Z" ]
		};
	}
}