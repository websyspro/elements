<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Div extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::DIV;

  public static function create(
    string $class
  ): Dom {
    return (new static)->props([
      "class" => $class
    ]);
  }  
}