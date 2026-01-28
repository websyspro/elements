<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconDesk
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M136-266v-398h688v398h-28v-80H599v80h-28v-370H164v370h-28Zm463-268h197v-102H599v102Zm0 160h197v-132H599v132Z" ],
			200 => [ "0 -960 960 960", "M123.08-260v-416.92h713.84V-260h-40v-80H608.46v80h-40v-376.92H163.08V-260h-40Zm485.38-280h188.46v-96.92H608.46V-540Zm0 160h188.46v-120H608.46v120Z" ],
			300 => [ "0 -960 960 960", "M101.54-250v-448.46h756.92V-250h-60v-80H624.23v80h-60v-388.46H161.54V-250h-60Zm522.69-300h174.23v-88.46H624.23V-550Zm0 160h174.23v-100H624.23v100Z" ],
			400 => [ "0 -960 960 960", "M80-240v-480h800v480h-80v-80H640v80h-80v-400H160v400H80Zm560-320h160v-80H640v80Zm0 160h160v-80H640v80Z" ],
			500 => [ "0 -960 960 960", "M72.83-233.3v-493.87h814.58v493.87h-91v-75.22H643.83v75.22h-91v-402.87h-389v402.87h-91Zm571-327.66h152.58v-75.21H643.83v75.21Zm0 163.83h152.58v-75.22H643.83v75.22Z" ],
			600 => [ "0 -960 960 960", "M63.04-224.17v-512.79h834.48v512.79h-106v-68.7H649.04v68.7h-106v-406.79h-374v406.79h-106Zm586-338.09h142.48v-68.7H649.04v68.7Zm0 169.04h142.48v-68.69H649.04v68.69Z" ],
			700 => [ "0 -960 960 960", "M50-212v-538h861v538H785v-60H656v60H530v-412H176v412H50Zm606-352h129v-60H656v60Zm0 176h129v-60H656v60Z" ],
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
