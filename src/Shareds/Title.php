<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

final class Title extends Dom
{
  public HtmlTag $tag = HtmlTag::TITLE;
}