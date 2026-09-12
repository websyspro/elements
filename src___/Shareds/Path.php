<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Path
extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::PATH;

  public static function create(
    string $path
  ): Dom {
    return ( new static )->props(
      [ "d" => $path ]
    );
  }  
}