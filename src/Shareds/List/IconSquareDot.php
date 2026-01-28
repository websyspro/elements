<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconSquareDot
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-616h616v616H172Zm28-28h560v-560H200v560Zm280-159q-51 0-86-35t-35-86q0-51 35-86t86-35q51 0 86 35t35 86q0 51-35 86t-86 35Z" ],
			200 => [ "0 -960 960 960", "M160-160v-640h640v640H160Zm40-40h560v-560H200v560Zm280-150q-54.46 0-92.23-37.77T350-480q0-54.46 37.77-92.23T480-610q54.46 0 92.23 37.77T610-480q0 54.46-37.77 92.23T480-350Z" ],
			300 => [ "0 -960 960 960", "M140-140v-680h680v680H140Zm60-60h560v-560H200v560Zm280-135q-60.23 0-102.61-42.39Q335-419.77 335-480t42.39-102.61Q419.77-625 480-625t102.61 42.39Q625-540.23 625-480t-42.39 102.61Q540.23-335 480-335Z" ],
			400 => [ "0 -960 960 960", "M120-120v-720h720v720H120Zm80-80h560v-560H200v560Zm280-120q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-736.26h736.26v736.26H111.87Zm91-91h554.26v-554.26H202.87v554.26Zm277.13-120q-65.04 0-111.09-46.04-46.04-46.05-46.04-111.09t46.04-111.09q46.05-46.04 111.09-46.04t111.09 46.04q46.04 46.05 46.04 111.09t-46.04 111.09Q545.04-322.87 480-322.87Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-758.44h758.44v758.44H100.78Zm106-106h546.44v-546.44H206.78v546.44Zm273.22-120q-63.74 0-108.48-44.74T326.78-480q0-63.74 44.74-108.48T480-633.22q63.74 0 108.48 44.74T633.22-480q0 63.74-44.74 108.48T480-326.78Z" ],
			700 => [ "0 -960 960 960", "M86-86v-788h788v788H86Zm126-126h536v-536H212v536Zm268-120q-62 0-105-43t-43-105q0-62 43-105t105-43q62 0 105 43t43 105q0 62-43 105t-105 43Z" ],
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
