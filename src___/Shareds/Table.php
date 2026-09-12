<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Table extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::TABLE;

  public static function create(
  ): Dom {
    return new static;
  }   
}