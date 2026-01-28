<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconPost
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M172-172v-616h616v616H172Zm560-126H228v76h504v-76Zm-504-28h504v-76H228v76Zm0-110h504v-296H228v296Zm0 138v76-76Zm0-28v-76 76Zm0-110v-296 296Zm0 34v-34 34Zm0 104v-28 28Z" ],
			200 => [ "0 -960 960 960", "M160-160v-640h640v640H160Zm569.23-133.85H230.77v72.31h498.46v-72.31Zm-498.46-35.38h498.46v-72.31H230.77v72.31Zm0-116.92h498.46v-283.08H230.77v283.08Zm0 152.3v72.31-72.31Zm0-35.38v-72.31 72.31Zm0-116.92v-283.08 283.08Zm0 44.61v-44.61 44.61Zm0 107.69v-35.38 35.38Z" ],
			300 => [ "0 -960 960 960", "M140-140v-680h680v680H140Zm584.62-146.92H235.38v66.15h489.24v-66.15Zm-489.24-47.69h489.24v-66.16H235.38v66.16Zm0-128.47h489.24v-261.54H235.38v261.54Zm0 176.16v66.15-66.15Zm0-47.69v-66.16 66.16Zm0-128.47v-261.54 261.54Zm0 62.31v-62.31 62.31Zm0 113.85v-47.69 47.69Z" ],
			400 => [ "0 -960 960 960", "M120-120v-720h720v720H120Zm600-160H240v60h480v-60Zm-480-60h480v-60H240v60Zm0-140h480v-240H240v240Zm0 200v60-60Zm0-60v-60 60Zm0-140v-240 240Zm0 80v-80 80Zm0 120v-60 60Z" ],
			500 => [ "0 -960 960 960", "M111.87-111.87v-736.26h736.26v736.26H111.87Zm605.26-169.56H242.87v58.56h474.26v-58.56Zm-474.26-60h474.26V-400H242.87v58.57Zm0-138.09h474.26v-237.61H242.87v237.61Zm0 198.09v58.56-58.56Zm0-60V-400v58.57Zm0-138.09v-237.61 237.61Zm0 79.52v-79.52V-400Zm0 118.57v-60 60Z" ],
			600 => [ "0 -960 960 960", "M100.78-100.78v-758.44h758.44v758.44H100.78Zm612.44-182.61H246.78v56.61h466.44v-56.61Zm-466.44-60h466.44V-400H246.78v56.61Zm0-135.48h466.44v-234.35H246.78v234.35Zm0 195.48v56.61-56.61Zm0-60V-400v56.61Zm0-135.48v-234.35 234.35Zm0 78.87v-78.87V-400Zm0 116.61v-60 60Z" ],
			700 => [ "0 -960 960 960", "M86-86v-788h788v788H86Zm622-200H252v54h456v-54Zm-456-60h456v-54H252v54Zm0-132h456v-230H252v230Zm0 192v54-54Zm0-60v-54 54Zm0-132v-230 230Zm0 78v-78 78Zm0 114v-60 60Z" ],
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
