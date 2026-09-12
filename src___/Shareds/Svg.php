<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Component;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Abstract\Dom;

class Svg
extends Component
{
  public HtmlTag $htmlTag = HtmlTag::SVG;

	public static function create(
		int $size,
		string $fill = "#000",
    string $viewBox = "0 -960 960 960",
    string $path = ""
	): Dom {
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