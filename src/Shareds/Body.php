<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Body extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::BODY;

  public static function create(
    array $childs = [],
    array $events = [],
    array $styles = [],
    array $props  = []
  ): Dom {
    return parent::create(
      $childs, 
      $events, 
      array_merge( 
        $styles, [
          "font-family" => "Ubuntu, sans-serif",
          "font-weight" => 300,
          "font-style"  => "normal"
        ]
      ), $props
    );
  }
}