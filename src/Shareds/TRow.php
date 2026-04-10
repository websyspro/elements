<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class TRow extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::TR;

  public static function create(
  ): Dom {
    return new static;
  }   
}