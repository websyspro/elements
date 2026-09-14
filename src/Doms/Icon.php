<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Enums\IconList;
use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Doms\Svg;
use function get_class;

class Icon
extends Dom
{
  private string $viewBox;
  private string $path;

  public function __construct(
    private IconList $iconList,
    private int $size,
    private array $fill = [ 0,0,0 ],
    private int $iconWeight = 300
  ){
    parent::__construct(
      $this->handlerSvg(), [], [], 
      $this->handlerClass()
    );
  }

  public function handlerWeight(
    int $iconWeight
  ): array {
    return [];
  }

  private function handlerSvg(
  ): array {
    [ $this->viewBox, $this->path 
    ] = require __DIR__ . "/Icons/{$this->iconList->name}";
    
    return [
      new Svg(
        size: $this->size,
        path: $this->path,
        fill: $this->fill,
        viewBox: $this->viewBox,
      )
    ];
  }

  private function handlerClass(
  ): array {
    return [ "class" => get_class( $this )];
  }
}