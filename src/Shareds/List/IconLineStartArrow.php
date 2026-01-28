<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconLineStartArrow
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M458-313 195-480l263-167v153h366v28H458v153Zm-28-51v-232L248-480l182 116Zm0-116Z" ],
			200 => [ "0 -960 960 960", "M472.31-286.92 168.46-480l303.85-193.08V-500h364.61v40H472.31v173.08Zm-40-72.93v-240.3L243.62-480l188.69 120.15Zm0-120.15Z" ],
			300 => [ "0 -960 960 960", "M496.15-243.46 124.23-480l371.92-236.54V-510h362.31v60H496.15v206.54Zm-60-109.46v-254.16L236.31-480l199.84 127.08Zm0-127.08Z" ],
			400 => [ "0 -960 960 960", "M520-200 80-480l440-280v240h360v80H520v240Zm-80-146v-268L229-480l211 134Zm0-134Z" ],
			500 => [ "0 -960 960 960", "M524.78-191.39 71.15-480l453.63-288.61v243.11H885.5v91H524.78v243.11Zm-91-165.85v-245.52L240.72-480l193.06 122.76Zm0-122.76Z" ],
			600 => [ "0 -960 960 960", "M531.3-179.65 59.09-480 531.3-780.35V-533H893v106H531.3v247.35Zm-106-192.92v-214.86L256.7-480l168.6 107.43Zm0-107.43Z" ],
			700 => [ "0 -960 960 960", "M540-164 43-480l497-316v253h363v126H540v253ZM414-393v-174l-136 87 136 87Zm0-87Z" ],
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
