<?php

namespace Websyspro\Elements\Shareds\List;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Path;

class IconDocsAddOn
extends Dom
{
	public HtmlTag $htmlTag = HtmlTag::SVG;

	private static function weight(
		int $weight
	): array {
		return match( $weight ){
			100 => [ "0 -960 960 960", "M666-147v-120H546v-28h120v-120h28v120h120v28H694v120h-28ZM186-266v-28h280q0 7.47.5 14.24.5 6.76.5 13.76H186Zm0-160v-28h368q-8 6-15.5 13T523-426H186Zm0-160v-28h548v28H186Zm0-160v-28h548v28H186Z" ],
			200 => [ "0 -960 960 960", "M660-141v-120H540v-40h120v-120h40v120h120v40H700v120h-40ZM180-260v-40h280.69q-.69 10.6-.19 20.18.5 9.59 1.19 19.82H180Zm0-160v-40h372.15q-11.46 8.31-21.5 18.31-10.03 10-19.42 21.69H180Zm0-160v-40h560v40H180Zm0-160v-40h560v40H180Z" ],
			300 => [ "0 -960 960 960", "M650-131v-120H530v-60h120v-120h60v120h120v60H710v120h-60ZM170-250v-60h281.85q-1.85 15.8-1.35 30.09t2.35 29.91H170Zm0-160v-60h379.08q-17.23 12.15-31.5 27.15-14.27 15-25.96 32.85H170Zm0-160v-60h580v60H170Zm0-160v-60h580v60H170Z" ],
			400 => [ "0 -960 960 960", "M640-121v-120H520v-80h120v-120h80v120h120v80H720v120h-80ZM160-240v-80h283q-3 21-2.5 40t3.5 40H160Zm0-160v-80h386q-23 16-41.5 36T472-400H160Zm0-160v-80h600v80H160Zm0-160v-80h600v80H160Z" ],
			500 => [ "0 -960 960 960", "M634.5-115.5v-120h-120v-91h120v-120h91v120h120v91h-120v120h-91Zm-481.91-108v-91h284.43q-2.28 24.11-.82 45.74 1.45 21.63 7.56 45.26H152.59Zm0-167.41v-91H539.3q-24.91 17.91-44.25 40.78-19.33 22.87-32.85 50.22H152.59Zm0-167.18v-91h614.82v91H152.59Zm0-167.41v-91h614.82v91H152.59Z" ],
			600 => [ "0 -960 960 960", "M627-108v-120H507v-106h120v-120h106v120h120v106H733v120H627Zm-484.52-93v-106h286.39q-1.31 28.35 1.46 53.57 2.76 25.21 13.1 52.43H142.48Zm0-177.52v-106h387.69q-27.52 20.52-48 47.3-20.48 26.79-33.35 58.7H142.48Zm0-176.96v-106h635.04v106H142.48Zm0-177.52v-106h635.04v106H142.48Z" ],
			700 => [ "0 -960 960 960", "M617-98v-120H497v-126h120v-120h126v120h120v126H743v120H617Zm-488-73v-126h289q0 34 4.5 64t20.5 62H129Zm0-191v-126h389q-31 24-53 56t-34 70H129Zm0-190v-126h662v126H129Zm0-191v-126h662v126H129Z" ],
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
