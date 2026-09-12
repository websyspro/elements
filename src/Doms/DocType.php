<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;
use Websyspro\Elements\Enums\IsCloseDom;

class DocType
extends Dom
{
  protected DomType $domType = DomType::DOCTYPE;
  protected IsCloseDom $isCloseDom = IsCloseDom::No;

  public function __construct(
    private array $childs = [],
    private array $events = [],
    private array $styles = [],
    private array $props  = [
      "html"
    ]
  ){}  
}