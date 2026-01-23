<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Title extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::TITLE;

  public static function create(
  ): Dom {
    return new static;
  }   
}