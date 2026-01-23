<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class H2 extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::H1;

  public static function create(
  ): Dom {
    return new static;
  }   
}