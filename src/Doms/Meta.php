<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;

class Meta
extends Dom
{
  protected DomType $domType = DomType::META;

  public function __construct(
    private array $props = []
  ){
    parent::__construct(
      [], [], [], $props
    );
  }  
}