<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;
use Websyspro\Elements\Enums\DomType;
use function sprintf;
use function sizeof;

class Svg
extends Dom
{
  protected DomType $domType = DomType::SVG;

  public function __construct(
    private int $size,
    private string $path,
    private string $viewBox,
    private array $fill = [ 0,0,0 ],
  ){
    parent::__construct(
      $this->handlerPath(), [], [], 
      $this->handlerProps()
    );
  }

  protected function handlerPath(
  ): array {
    return [ new Path( $this->path )];
  }

  protected function handlerPropsViewBox(
  ): string {
    return $this->viewBox;
  }  

  protected function handlerPropsSize(
  ): string {
    return $this->size;
  }

  protected function handlerPropsFill(
  ): string {
    if( empty( $this->fill )){
      $this->fill = [ 0,0,0 ];
    } 

    return sprintf( "rgb(%s,%s,%s)", ...match( sizeof( $this->fill )){
      1 => [ $this->fill[0], $this->fill[0], $this->fill[0]],
      2 => [ $this->fill[0], $this->fill[1], $this->fill[1]],
        default => $this->fill
    });
  }  
  
  protected function handlerProps(
  ): array {
    return [
      "xmlns" => "http://www.w3.org/2000/svg",
      "viewBox" => "{$this->handlerPropsViewBox()}",
      "height" => "{$this->handlerPropsSize()}",
      "width" => "{$this->handlerPropsSize()}",
      "fill" => "{$this->handlerPropsFill()}"
    ];
  }
}