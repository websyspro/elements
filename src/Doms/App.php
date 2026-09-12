<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;

class App
extends Dom
{
  public function __construct(
    private array $childs
  ){
    parent::__construct( $childs );

    if( empty( $this->childs ) !== false ){
      echo $this->get();
    }
  }
}