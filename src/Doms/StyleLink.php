<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;
use Websyspro\Elements\Enums\IsCloseDom;

class StyleLink
extends Dom
{
  protected DomType $domType = DomType::LINK;
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