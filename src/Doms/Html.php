<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;

class Html
extends Dom
{
  protected DomType $domType = DomType::HTML;
}