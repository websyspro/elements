<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Link extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::LINK;

  public static function create(
  ): Dom {
    return new static;
  }
}