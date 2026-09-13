<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Doms\Svg;
use Websyspro\Elements\Enums\IconWeight;
use Websyspro\Elements\Abstracts\Dom;
use function get_class;

class Icon
extends Dom
{
  private string $viewBox;
  private string $path;

  public function __construct(
    private int $size,
    private array $fill = [ 0,0,0 ],
    private IconWeight $iconSize = IconWeight::iw300
  ){
    parent::__construct(
      $this->handlerSvg(), [], [], 
      $this->handlerClass()
    );
  }

  private function handlerWeight(
    IconWeight $iconWeight
  ): array {
    return [];
  }

  private function handlerSvg(
  ): array {
    [ $this->viewBox, $this->path ] = $this->handlerWeight(
      $this->iconSize
    );
    
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