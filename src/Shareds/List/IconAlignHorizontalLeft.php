<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconAlignHorizontalLeft
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-132v-696h28v696h-28Zm138-184v-70h238v70H310Zm0-258v-70h478v70H310Z" ],
			200 => [ "0 -960 960 960", "M150.77-120v-720h40v720h-40Zm143.08-187.69v-81.54h275.38v81.54H293.85Zm0-263.08v-81.54h515.38v81.54H293.85Z" ],
			300 => [ "0 -960 960 960", "M115.39-100v-760h60v760h-60Zm151.54-193.85v-100.76h337.68v100.76H266.93Zm0-271.54v-100.76h577.68v100.76H266.93Z" ],
			400 => [ "0 -960 960 960", "M80-80v-800h80v800H80Zm160-200v-120h400v120H240Zm0-280v-120h640v120H240Z" ],
			500 => [ "0 -960 960 960", "M71.87-71.87v-816.26h91v816.26h-91Zm171-200.72v-131h405.26v131H242.87Zm0-283.82v-131h645.26v131H242.87Z" ],
			600 => [ "0 -960 960 960", "M60.78-60.78v-838.44h106v838.44h-106Zm186-201.7v-146h412.44v146H246.78Zm0-289.04v-146h652.44v146H246.78Z" ],
			700 => [ "0 -960 960 960", "M46-46v-868h126v868H46Zm206-203v-166h422v166H252Zm0-296v-166h662v166H252Z" ],
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
