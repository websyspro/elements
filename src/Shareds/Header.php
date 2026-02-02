<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class H3 extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::HEADER;

  public static function create(
  ): Dom {
    return new static;
  }   
}