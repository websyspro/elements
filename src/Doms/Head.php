<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;

class Head
extends Dom
{
  protected DomType $domType = DomType::HEAD;

  public function __construct(
    private array $childs = []
  ){
    parent::__construct(
      $this->defaultChilds()
    );
  }
  
  private function defaultChilds(
  ): array {
    return [ ...$this->childs, ...[
      new Meta([ "charset" => "UTF-8" ]),
      new Meta([ "name" => "viewport", "content" => "width=device-width, initial-scale=1.0" ])
    ]];
  }
}