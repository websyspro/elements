<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Footer extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::FOOTER;

  public static function create(
  ): Dom {
    return new static;
  }   
}