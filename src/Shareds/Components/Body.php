<?php

namespace Websyspro\Elements\Shareds\Components;

use Websyspro\Elements\Shareds\Abstract\Component;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Elements\Shareds\Link;
use Websyspro\Elements\Shareds\Meta;

class Body extends Component
{
  public HtmlTag $htmlTag = HtmlTag::BODY;

  public function render(
  ): void {
    Head::addChildStatic( [
      Meta::create()->props( [ "name" => "viewport", "content" => "width=device-width, initial-scale=1.0"  ]),
      Link::create()->props( [ "rel" => "preconnect", "href" => "https://fonts.googleapis.com" ]), 
      Link::create()->props( [ "rel" => "preconnect", "href" => "https://fonts.gstatic.com", "crossorigin" => true ]),
      Link::create()->props( [ "rel" => "stylesheet", "href" => "ttps://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" ])
    ]);
  }
}