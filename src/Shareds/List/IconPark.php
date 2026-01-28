<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconPark
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M508-132h-56v-160H218l160-240h-78l180-258 180 258h-78l160 240H508v160ZM270-320h160-76 252-76 160-420Zm0 0h420L530-560h76L480-740 354-560h76L270-320Z" ],
			200 => [ "0 -960 960 960", "M519.54-120h-79.08v-160H195.38l160-240h-78.46L480-810.77 683.08-520h-78.46l160 240H519.54v160ZM270-320h160-76 252-76 160-420Zm0 0h420L530-560h76L480-740 354-560h76L270-320Z" ],
			300 => [ "0 -960 960 960", "M538.77-100H421.23v-160H157.7l160-240h-79.24L480-845.38 721.54-500H642.3l160 240H538.77v160ZM270-320h160-76 252-76 160-420Zm0 0h420L530-560h76L480-740 354-560h76L270-320Z" ],
			400 => [ "0 -960 960 960", "M558-80H402v-160H120l160-240h-80l280-400 280 400h-80l160 240H558v160ZM270-320h160-76 252-76 160-420Zm0 0h420L530-560h76L480-740 354-560h76L270-320Z" ],
			500 => [ "0 -960 960 960", "M562.07-71.87H397.93v-160h-293l160-240H184.7l295.3-422 295.3 422h-80.23l160 240h-293v160Zm-286.57-251h160-76 241-76 160-409Zm0 0h409l-160-240h76L480-734.98 359.5-562.87h76l-160 240Z" ],
			600 => [ "0 -960 960 960", "M567.61-60.78H392.39v-160h-308l160-240h-80.57l316.18-452 316.18 452h-80.57l160 240h-308v160ZM283-326.78h160-76 226-76 160-394Zm0 0h394l-160-240h76L480-728.13 367-566.78h76l-160 240Z" ],
			700 => [ "0 -960 960 960", "M575-46H385v-160H57l160-240h-81l344-492 344 492h-81l160 240H575v160ZM293-332h160-76 206-76 160-374Zm0 0h374L507-572h76L480-719 377-572h76L293-332Z" ],
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
