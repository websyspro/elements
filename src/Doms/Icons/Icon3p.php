<?php

namespace Websyspro\Elements\Doms\Icons;

use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\IconWeight;
use function get_class;

class Icon3p
extends Dom
{
  public function __construct(
    private int $size,
    private array $fill = [ 0,0,0 ],
    private IconWeight $iconSize = IconWeight::iw300
  ){
    parent::__construct(
      childs: [], 
      events: [],
      styles: [], 
      props: [
        "class" => get_class($this)
      ]
    );
  }
}