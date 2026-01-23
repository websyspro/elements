<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Href extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::A;

  public static function create(
    string $url
  ): Dom {
    return (new static)->props(
      [ "href" => $url ]
    );
  }
}