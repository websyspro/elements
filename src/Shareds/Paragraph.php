<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Paragraph extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::P;

  public static function create(
  ): Dom {
    return new static;
  }   
}