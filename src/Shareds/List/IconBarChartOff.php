<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconBarChartOff
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M212-212v-346h108v346H212Zm214 0v-322l108 108v214H426Zm108-326L426-646v-102h108v210Zm214 214-54-54h54v54Zm46 198L126-794l20-20 668 668-20 20Z" ],
			200 => [ "0 -960 960 960", "M200-200v-367.69h120V-200H200Zm220 0v-340l120 120v220H420Zm120-332.46-120-120V-760h120v227.54Zm220 220-78.46-78.46v-1.39H760v79.85Zm33.31 202.84L109.62-793.31l28.53-28.54 683.7 683.7-28.54 28.53Z" ],
			300 => [ "0 -960 960 960", "M180-180v-403.84h140V-180H180Zm230 0v-370l140 140v230H410Zm140-343.23-140-140V-780h140v256.77Zm230 230L660.77-412.46v-3.69H780v122.92Zm12.15 210.92L82.31-792.15l42.77-42.77 709.84 709.84-42.77 42.77Z" ],
			400 => [ "0 -960 960 960", "M160-160v-440h160v440H160Zm240 0v-400l160 160v240H400Zm160-354L400-674v-126h160v286Zm240 240L640-434v-6h160v166Zm-9 219L55-791l57-57 736 736-57 57Z" ],
			500 => [ "0 -960 960 960", "M151.87-151.87v-456.26h167.41v456.26H151.87Zm244.54 0v-415.54l167.18 167.17v248.37H396.41Zm167.18-366.91L396.41-685.96v-122.17h167.18v289.35Zm244.54 244.54L643.59-438.78v-4.57h164.54v169.11Zm-8.04 229.28L44.96-800.09l59.39-59.39 755.13 755.13-59.39 59.39Z" ],
			600 => [ "0 -960 960 960", "M140.78-140.78v-478.44H318.3v478.44H140.78Zm250.74 0v-436.74l176.96 176.95v259.79H391.52ZM568.48-525.3 391.52-702.26v-116.96h176.96v293.92Zm250.74 250.73L648.48-445.3v-2.61h170.74v173.34Zm-6.74 243.31L31.26-812.48l62.65-62.65L875.13-93.91l-62.65 62.65Z" ],
			700 => [ "0 -960 960 960", "M126-126v-508h191v508H126Zm259 0v-465l190 190v275H385Zm190-408L385-724v-110h190v300Zm259 259L655-454h179v179Zm-5 262L13-829l67-67L896-80l-67 67Z" ],
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
