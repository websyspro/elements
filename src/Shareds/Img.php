<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Img extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::IMG;

  public static function create(
    string $src
  ): Dom {
    return (new static)->props(
      [
        "src" => $src
      ]
    );
  }   
}