<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class TBody extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::TBODY;

  public static function create(
  ): Dom {
    return new static;
  }   
}