<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconDiscoverTune
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M546-626v-28h120v-160h28v160h120v28H546Zm120 480v-348h28v348h-28Zm-400 0v-160H146v-28h268v28H294v160h-28Zm0-320v-348h28v348h-28Z" ],
			200 => [ "0 -960 960 960", "M540-620v-40h120v-160h40v160h120v40H540Zm120 480v-360h40v360h-40Zm-400 0v-160H140v-40h280v40H300v160h-40Zm0-320v-360h40v360h-40Z" ],
			300 => [ "0 -960 960 960", "M530-610v-60h120v-160h60v160h120v60H530Zm120 480v-380h60v380h-60Zm-400 0v-160H130v-60h300v60H310v160h-60Zm0-320v-380h60v380h-60Z" ],
			400 => [ "0 -960 960 960", "M520-600v-80h120v-160h80v160h120v80H520Zm120 480v-400h80v400h-80Zm-400 0v-160H120v-80h320v80H320v160h-80Zm0-320v-400h80v400h-80Z" ],
			500 => [ "0 -960 960 960", "M514.5-594.5v-91h120v-160h91v160h120v91h-331Zm120 480v-403.59h91v403.59h-91Zm-400 0v-160h-120v-91h331v91h-120v160h-91Zm0-327.41V-845.5h91v403.59h-91Z" ],
			600 => [ "0 -960 960 960", "M507-587v-106h120v-160h106v160h120v106H507Zm120 480v-408.48h106V-107H627Zm-400 0v-160H107v-106h346v106H333v160H227Zm0-337.52V-853h106v408.48H227Z" ],
			700 => [ "0 -960 960 960", "M497-577v-126h120v-160h126v160h120v126H497ZM617-97v-415h126v415H617Zm-400 0v-160H97v-126h366v126H343v160H217Zm0-351v-415h126v415H217Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconDiscoverTune" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
