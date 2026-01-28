<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconStore
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M182-746v-28h596v28H182Zm4 560v-240h-52v-28l48-200h596l48 200v28h-52v240h-28v-240H534v240H186Zm28-28h292v-212H214v212Zm-52-240h636-636Zm0 0h636l-41-172H203l-41 172Z" ],
			200 => [ "0 -960 960 960", "M176.92-740v-40h606.16v40H176.92ZM180-180v-240h-49.23v-40l46.15-200h606.16l46.15 200v40H780v240h-40v-240H540v240H180Zm40-40h280v-200H220v200Zm-48.77-240h617.54-617.54Zm0 0h617.54l-37.08-160H208.31l-37.08 160Z" ],
			300 => [ "0 -960 960 960", "M168.46-730v-60h623.08v60H168.46ZM170-170v-240h-44.61v-60l43.07-200h623.08l43.07 200v60H790v240h-60v-240H550v240H170Zm60-60h260v-180H230v180Zm-43.39-240h586.78-586.78Zm0 0h586.78l-30.54-140h-525.7l-30.54 140Z" ],
			400 => [ "0 -960 960 960", "M160-720v-80h640v80H160Zm0 560v-240h-40v-80l40-200h640l40 200v80h-40v240h-80v-240H560v240H160Zm80-80h240v-160H240v160Zm-38-240h556-556Zm0 0h556l-24-120H226l-24 120Z" ],
			500 => [ "0 -960 960 960", "M154.5-720v-91h651v91h-651Zm-.09 571v-240H113.3v-91l41.2-200h651l41.2 200v91h-41.2v240h-91v-240h-149v240H154.41Zm91.09-91h229v-149h-229v149Zm-38.72-240h546.44-546.44Zm0 0h546.44l-22.09-109H228.87l-22.09 109Z" ],
			600 => [ "0 -960 960 960", "M147-720v-106h666v106H147Zm-.21 586v-240h-42.62v-106L147-680h666l42.83 200v106H813v240H707v-240H573v240H146.79ZM253-240h214v-134H253v134Zm-39.7-240h533.4-533.4Zm0 0h533.4l-19.48-94H232.78l-19.48 94Z" ],
			700 => [ "0 -960 960 960", "M137-720v-126h686v126H137Zm-.36 606v-240H92v-126l45-200h686l45 200v126h-45v240H697v-240H583v240H136.64ZM263-240h194v-114H263v114Zm-41-240h516-516Zm0 0h516l-16-74H238l-16 74Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconStore" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
