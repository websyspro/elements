<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class THead extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::THEAD;

  public static function create(
  ): Dom {
    return new static;
  }   
}