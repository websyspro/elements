<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Enums\IconTypeWeight;
use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Doms\Svg;
use function get_class;

class Icon
extends Dom
{
  private string $viewBox;
  private string $path;

  public function __construct(
    private int $size,
    private array $fill = [ 0,0,0 ],
    private IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
  ){
    parent::__construct(
      $this->handlerSvg(), [], [], 
      $this->handlerClass()
    );
  }

  protected function handlerWeight(
    IconTypeWeight $iconTypeWeight
  ): array {
    return [];
  }

  protected function handlerSvg(
  ): array {
    [ $this->viewBox, $this->path 
    ] = $this->handlerWeight( $this->iconTypeWeight );
    
    return [
      new Svg(
        size: $this->size,
        path: $this->path,
        fill: $this->fill,
        viewBox: $this->viewBox,
      )
    ];
  }

  protected function handlerClass(
  ): array {
    return [ "class" => get_class( $this )];
  }
}