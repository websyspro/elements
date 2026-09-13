<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;
use Websyspro\Elements\Enums\IsCloseDom;

class StyledHref
extends Dom
{
  protected DomType $domType = DomType::DOCTYPE;
  protected IsCloseDom $isCloseDom = IsCloseDom::No;

  public function __construct(
    private string $href
  ){
    parent::__construct(
      [], [], [], [
        "rel" => "stylesheet",
        "href" => $href
      ]
    );
  }  
}