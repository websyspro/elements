<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Elements\Shareds\Abstract\Dom;
use Websyspro\Elements\Shareds\Enums\HtmlTag;

class Doctype extends Dom
{
  public HtmlTag $htmlTag = HtmlTag::DOCTYPE;
  public bool $isClosedTag = false;  
}