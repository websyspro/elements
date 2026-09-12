<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Img extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::IMG;

  public static function create(
    string $src,
    string $alt = ""
  ): Dom {
    return (new static)->props(
      [
        "src" => $src,
        "alt" => $alt
      ]
    );
  }   
}