<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class TBodyColumn extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::TD;

  public static function create(
  ): Dom {
    return new static;
  }   
}