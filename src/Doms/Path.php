<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;

class Path
extends Dom
{
  protected DomType $domType = DomType::PATH;

  public function __construct(
    private string|null $path = null
  ){
    parent::__construct(
      [], [], [], [
        "d" => $path
      ]
    );
  }  
}