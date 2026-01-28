<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconVolumeMute
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M332-412v-136h130l126-126v388L462-412H332Zm28-28h114l86 86v-252l-86 86H360v80Zm100-40Z" ],
			200 => [ "0 -960 960 960", "M320-400v-160h136.92L600-703.08v446.16L456.92-400H320Zm40-40h114l86 86v-252l-86 86H360v80Zm100-40Z" ],
			300 => [ "0 -960 960 960", "M300-380v-200h148.46L620-751.53v543.06L448.46-380H300Zm60-60h114l86 86v-252l-86 86H360v80Zm100-40Z" ],
			400 => [ "0 -960 960 960", "M280-360v-240h160l200-200v640L440-360H280Zm80-80h114l86 86v-252l-86 86H360v80Zm100-40Z" ],
			500 => [ "0 -960 960 960", "M271.87-351.87v-256.26h164.78l211.48-211.24v678.74L436.65-351.87H271.87Zm91-91H475.2l81.93 81.94v-238.14l-81.93 81.94H362.87v74.26ZM460-480Z" ],
			600 => [ "0 -960 960 960", "M260.78-340.78v-278.44h171.31l227.13-226.56v731.56L432.09-340.78H260.78Zm106-106h110.05l76.39 76.39v-219.22l-76.39 76.39H366.78v66.44ZM460-480Z" ],
			700 => [ "0 -960 960 960", "M246-326v-308h180l248-247v802L426-326H246Zm126-126h107l69 69v-194l-69 69H372v56Zm88-28Z" ],
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
