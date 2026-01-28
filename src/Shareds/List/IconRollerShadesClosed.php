<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconRollerShadesClosed
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-172v-28h80v-588h536v588h80v28H518q0 15.74-11.18 26.87t-27 11.13Q464-134 453-145.13T442-172H132Zm108-157h480v-431H240v431Zm0 129h226v-101H240v101Zm254 0h226v-101H494v101ZM240-760h480-480Z" ],
			200 => [ "0 -960 960 960", "M120-160v-40h80v-600h560v600h80v40H525.38q0 18.8-13.33 32.09-13.33 13.3-32.19 13.3t-32.05-13.3Q434.62-141.2 434.62-160H120Zm120-176.15h480V-760H240v423.85ZM240-200h220v-96.15H240V-200Zm260 0h220v-96.15H500V-200ZM240-760h480-480Z" ],
			300 => [ "0 -960 960 960", "M100-140v-60h80v-620h600v620h80v60H537.69q0 23.9-16.91 40.79-16.92 16.9-40.85 16.9t-40.78-16.9Q422.31-116.1 422.31-140H100Zm140-208.08h480V-760H240v411.92ZM240-200h210v-88.08H240V-200Zm270 0h210v-88.08H510V-200ZM240-760h480-480Z" ],
			400 => [ "0 -960 960 960", "M80-120v-80h80v-640h640v640h80v80H550q0 29-20.5 49.5T480-50q-29 0-49.5-20.5T410-120H80Zm160-240h480v-400H240v400Zm0 160h200v-80H240v80Zm280 0h200v-80H520v80ZM240-760h480-480Z" ],
			500 => [ "0 -960 960 960", "M69.24-109.24v-91h80v-650.52h661.52v650.52h80v91H553.11q0 30.44-21.34 51.77Q510.43-36.13 480-36.13q-30.43 0-51.77-21.34-21.34-21.33-21.34-51.77H69.24Zm171-253.87h479.52v-396.65H240.24v396.65Zm0 162.87h196.65v-76.65H240.24v76.65Zm282.87 0h196.65v-76.65H523.11v76.65ZM240.24-759.76h479.52-479.52Z" ],
			600 => [ "0 -960 960 960", "M54.56-94.56v-106.01h80v-664.87h690.88v664.87h80v106.01H557.35q0 32.39-22.48 54.87Q512.39-17.22 480-17.22t-54.87-22.47q-22.48-22.48-22.48-54.87H54.56Zm186.01-272.79h478.86v-392.08H240.57v392.08Zm0 166.78h192.08v-72.08H240.57v72.08Zm286.78 0h192.08v-72.08H527.35v72.08ZM240.57-759.43h478.86-478.86Z" ],
			700 => [ "0 -960 960 960", "M35-75v-126h80v-684h730v684h80v126H563q0 35-24 59T480 8q-35 0-59-24t-24-59H35Zm206-298h478v-386H241v386Zm0 172h186v-66H241v66Zm292 0h186v-66H533v66ZM241-759h478-478Z" ],
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
