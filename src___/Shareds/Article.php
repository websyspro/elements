<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Article extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::ARTICLE;

  public static function create(
  ): Dom {
    return new static;
  }   
}