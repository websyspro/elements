<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class TFoot extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::TFOOT;

  public static function create(
  ): Dom {
    return new static;
  }   
}