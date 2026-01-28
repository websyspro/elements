<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconFullscreen
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-170h28v142h142v28H172Zm447 0v-28h142v-142h28v170H619ZM172-618v-170h170v28H200v142h-28Zm589 0v-142H619v-28h170v170h-28Z" ],
			200 => [ "0 -960 960 960", "M160-160v-176.92h40V-200h136.92v40H160Zm463.85 0v-40h136.92v-136.92h40V-160H623.85ZM160-623.08V-800h176.92v40H200v136.92h-40Zm600.77 0V-760H623.85v-40h176.92v176.92h-40Z" ],
			300 => [ "0 -960 960 960", "M140-140v-188.46h60V-200h128.46v60H140Zm491.92 0v-60h128.46v-128.46h60V-140H631.92ZM140-631.54V-820h188.46v60H200v128.46h-60Zm620.38 0V-760H631.92v-60h188.46v188.46h-60Z" ],
			400 => [ "0 -960 960 960", "M120-120v-200h80v120h120v80H120Zm520 0v-80h120v-120h80v200H640ZM120-640v-200h200v80H200v120h-80Zm640 0v-120H640v-80h200v200h-80Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-214.35h91v123.35h123.35v91H111.87Zm522.15 0v-91h123.11v-123.35h91v214.35H634.02ZM111.87-634.02v-214.11h214.35v91H202.87v123.11h-91Zm645.26 0v-123.11H634.02v-91h214.11v214.11h-91Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78V-334.7h106v127.92H334.7v106H100.78Zm525.09 0v-106h127.35V-334.7h106v233.92H625.87ZM100.78-625.87v-233.35H334.7v106H206.78v127.35h-106Zm652.44 0v-127.35H625.87v-106h233.35v233.35h-106Z" ],
			700 => [ "0 -960 960 960", "M86-86v-260h126v134h134v126H86Zm529 0v-126h133v-134h126v260H615ZM86-615v-259h260v126H212v133H86Zm662 0v-133H615v-126h259v259H748Z" ],
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
