<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;

class Body
extends Dom
{
  protected DomType $domType = DomType::BODY;

  public function __construct(
    private array $childs = []
  ){
    parent::__construct(
      $childs, [], [ "margin" => "0px" ]
    );
  }   
}