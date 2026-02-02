<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Strong extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::STRONG;

  public static function create(
  ): Dom {
    return new static;
  }   
}