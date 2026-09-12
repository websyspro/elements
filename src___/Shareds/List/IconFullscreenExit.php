<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Svg;

class IconFullscreenExit
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::DIV;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M314-172v-142H172v-28h170v170h-28Zm305 0v-170h170v28H647v142h-28ZM172-618v-28h142v-142h28v170H172Zm447 0v-170h28v142h142v28H619Z" ],
			200 => [ "0 -960 960 960", "M296.92-160v-136.92H160v-40h176.92V-160h-40Zm326.93 0v-176.92h176.92v40H663.85V-160h-40ZM160-623.08v-40h136.92V-800h40v176.92H160Zm463.85 0V-800h40v136.92h136.92v40H623.85Z" ],
			300 => [ "0 -960 960 960", "M268.46-140v-128.46H140v-60h188.46V-140h-60Zm363.46 0v-188.46h188.46v60H691.92V-140h-60ZM140-631.54v-60h128.46V-820h60v188.46H140Zm491.92 0V-820h60v128.46h128.46v60H631.92Z" ],
			400 => [ "0 -960 960 960", "M240-120v-120H120v-80h200v200h-80Zm400 0v-200h200v80H720v120h-80ZM120-640v-80h120v-120h80v200H120Zm520 0v-200h80v120h120v80H640Z" ],
			500 => [ "0 -960 960 960", "M235.22-111.87v-123.35H111.87v-91h214.35v214.35h-91Zm398.8 0v-214.35h214.11v91H725.02v123.35h-91ZM111.87-634.02v-91h123.35v-123.11h91v214.11H111.87Zm522.15 0v-214.11h91v123.11h123.11v91H634.02Z" ],
			600 => [ "0 -960 960 960", "M228.7-100.78V-228.7H100.78v-106H334.7v233.92h-106Zm397.17 0V-334.7h233.35v106H731.87v127.92h-106ZM100.78-625.87v-106H228.7v-127.35h106v233.35H100.78Zm525.09 0v-233.35h106v127.35h127.35v106H625.87Z" ],
			700 => [ "0 -960 960 960", "M220-86v-134H86v-126h260v260H220Zm395 0v-260h259v126H741v134H615ZM86-615v-126h134v-133h126v259H86Zm529 0v-259h126v133h133v126H615Z" ],
		};
	}

	public static function create(
		int $size,
		string $fill = "#000",
		int $weight = 300
	): Dom {
		[ $viewBox, $path ] = static::weight( $weight );

		return (new static)
			->props([ "class" => "Icon IconFullscreenExit" ])
			->add( Svg::create( $size, $fill, $viewBox, $path ));
	}
}
