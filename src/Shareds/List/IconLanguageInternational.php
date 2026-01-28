<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLanguageInternational
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M106-346v-268h28v268h-28Zm100 0v-268h40l136 262-16 2v-264h28v268h-40L218-608l16-2v264h-28Zm330 0v-240h-80v-28h188v28h-80v240h-28Zm170 0v-268h28v240h120v28H706Z" ],
			200 => [ "0 -960 960 960", "M90.77-340v-280h40v280h-40Zm104.61 0v-280h49.24l125.15 242.61-14.39 2V-620h40v280h-49.23L221-582.61l14.38-2V-340h-40Zm336.93 0v-240h-80v-40h200v40h-80v240h-40Zm176.92 0v-280h40v240h120v40h-160Z" ],
			300 => [ "0 -960 960 960", "M65.39-330v-300h60v300h-60Zm112.3 0v-300h64.62l107.08 210.31-11.7 2V-630h60v300h-64.61L226-540.31l11.69-2V-330h-60Zm348.46 0v-240h-80v-60h220v60h-80v240h-60Zm188.46 0v-300h60v240h120v60h-180Z" ],
			400 => [ "0 -960 960 960", "M40-320v-320h80v320H40Zm120 0v-320h80l89 178-9 2v-180h80v320h-80l-89-178 9-2v180h-80Zm360 0v-240h-80v-80h240v80h-80v240h-80Zm200 0v-320h80v240h120v80H720Z" ],
			500 => [ "0 -960 960 960", "M30.43-314.5v-331h88.61v331H30.43Zm125.98 0v-331h84.31L329-466.3l-12.59 1.52V-645.5h86.22v331h-81.91l-88.29-179.2 10.2-1.52v180.72h-86.22Zm362.16 0v-242.39h-78.81v-88.61h246.22v88.61h-78.81v242.39h-88.6Zm204.78 0v-331h88.61v242.39h117.61v88.61H723.35Z" ],
			600 => [ "0 -960 960 960", "M17.39-307v-346h100.35v346H17.39Zm134.13 0v-346h90.18L329-472.17l-17.48.87V-653h94.7v346H321.7l-87.31-180.83 11.83-.87V-307h-94.7Zm365.09 0v-245.65h-77.18V-653h254.7v100.35h-77.17V-307H516.61Zm211.3 0v-346h100.35v245.65h114.35V-307h-214.7Z" ],
			700 => [ "0 -960 960 960", "M0-297v-366h116v366H0Zm145 0v-366h98l86 183h-24v-183h106v366h-88l-86-183h14v183H145Zm369 0v-250h-75v-116h266v116h-75v250H514Zm220 0v-366h116v250h110v116H734Z" ],
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
