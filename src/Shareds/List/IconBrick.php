<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconBrick
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M132-212v-391h111v-145h177v145h120v-145h177v145h111v391H132Zm28-28h640v-335H160v335Zm111-363h121v-117H271v117Zm297 0h121v-117H568v117ZM160-240h640-640Zm111-363h121-121Zm297 0h121-121Z" ],
			200 => [ "0 -960 960 960", "M120-200v-411.54h113.08V-760h191.54v148.46h110.76V-760h191.54v148.46H840V-200H120Zm40-40h640v-331.54H160V-240Zm113.08-371.54h111.54V-720H273.08v108.46Zm302.3 0h111.54V-720H575.38v108.46ZM160-240h640-640Zm113.08-371.54h111.54-111.54Zm302.3 0h111.54-111.54Z" ],
			300 => [ "0 -960 960 960", "M100-180v-445.77h116.54V-780h215.77v154.23h95.38V-780h215.77v154.23H860V-180H100Zm60-60h640v-325.77H160V-240Zm116.54-385.77h95.77V-720h-95.77v94.23Zm311.15 0h95.77V-720h-95.77v94.23ZM160-240h640-640Zm116.54-385.77h95.77-95.77Zm311.15 0h95.77-95.77Z" ],
			400 => [ "0 -960 960 960", "M80-160v-480h120v-160h240v160h80v-160h240v160h120v480H80Zm80-80h640v-320H160v320Zm120-400h80v-80h-80v80Zm320 0h80v-80h-80v80ZM160-240h640-640Zm120-400h80-80Zm320 0h80-80Z" ],
			500 => [ "0 -960 960 960", "M71.87-151.87v-490.04h113.3v-166.22h257.22v166.22h75.22v-166.22h257.22v166.22h113.3v490.04H71.87Zm91-91h634.26v-308.04H162.87v308.04Zm113.3-399.04h75.22v-75.22h-75.22v75.22Zm332.44 0h75.22v-75.22h-75.22v75.22ZM162.87-242.87h634.26-634.26Zm113.3-399.04h75.22-75.22Zm332.44 0h75.22-75.22Z" ],
			600 => [ "0 -960 960 960", "M60.78-140.78v-503.74h104.17v-174.7h280.7v174.7h68.7v-174.7h280.7v174.7h104.17v503.74H60.78Zm106-106h626.44v-291.74H166.78v291.74Zm104.18-397.74h68.69v-68.7h-68.69v68.7Zm349.39 0h68.69v-68.7h-68.69v68.7ZM166.78-246.78h626.44-626.44Zm104.18-397.74h68.69-68.69Zm349.39 0h68.69-68.69Z" ],
			700 => [ "0 -960 960 960", "M46-126v-522h92v-186h312v186h60v-186h312v186h92v522H46Zm126-126h616v-270H172v270Zm92-396h60v-60h-60v60Zm372 0h60v-60h-60v60ZM172-252h616-616Zm92-396h60-60Zm372 0h60-60Z" ],
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
