<?php

namespace Websyspro\Elements\Shareds\Components;

use Websyspro\Elements\Shareds\Abstract\Component;
use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Link;
use Websyspro\Elements\Shareds\Meta;
use Websyspro\Elements\Shareds\Title;

class Body extends Component
{
  public HtmlTag $htmlTag = HtmlTag::BODY;

  public function render(
  ): void {
    Head::addChildStatic( [
      Title::create()->add( "Websyspro" ),
      Meta::create()->props( [ "name" => "viewport", "content" => "width=device-width, initial-scale=1.0"  ]),
      Link::create()->props( [ "rel" => "preconnect", "href" => "https://fonts.googleapis.com" ]), 
      Link::create()->props( [ "rel" => "preconnect", "href" => "https://fonts.gstatic.com", "crossorigin" => true ]),
      Link::create()->props( [ "rel" => "stylesheet", "href" => "https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" ])
    ]);
  }

  public static function create(
  ): Dom {
    return new static;
  }  
}