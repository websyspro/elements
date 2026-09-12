<?php

namespace Websyspro\Elements\Abstracts;

use Websyspro\Elements\Enums\DomType;
use Websyspro\Elements\Enums\IsCloseDom;
use function is_string;
use function is_array;
use function sprintf;

class Dom
{
  private DomType $domType = DomType::DIV;
  private IsCloseDom $isCloseDom = IsCloseDom::Yes;

  public function __construct(
    private array $childs,
    private array $events = [],
    private array $styles = [],
    private array $props  = []
  ){}

  public function add(
    object|array|string $child
  ): Dom {
    $this->childs = [
      ...$this->childs, ...(
        is_array( $child ) 
          ? $child 
          : [ $child ]
      )
    ];

    return $this;
  }

  public function addEvent(
    array $events
  ): Dom {
    $this->events = [
      ...$this->events, 
      ...$events
    ];    

    return $this;
  }

  public function addStyles(
    array $styles
  ): Dom {
    $this->styles = [
      ...$this->styles, 
      ...$styles
    ];    

    return $this;    
  }

  public function addProps(
    array $props
  ): Dom {
    $this->props = [
      ...$this->props, 
      ...$props
    ];    

    return $this;    
  }

  private function handlerEvents(
  ): array {
    return array_map(
      fn( string $val, string $key ) => (
        sprintf( "on%s=\"%s\"", $key, $val )
      ), $this->props, array_keys( $this->props )
    );
  }

  private function handlerStyles(
  ): array {
    return [
      sprintf( "style=\"%s\"", implode( ";", array_map(
        fn( string $val, string $key ) => (
          sprintf( "%s:%s", $key, $val )
        ), $this->props, array_keys( $this->props )
      )))
    ];
  }
  
  private function handlerProps(
  ): array {
    return array_map(
      fn( string $val, string $key ) => (
        sprintf( "%s=\"%s\"", $key, $val )
      ), $this->props, array_keys( $this->props )
    );
  }

  private function handleChild(
  ): string {
    return implode( 
      "", array_map(
        fn( object|string $child ) => (
          is_string( $child ) 
            ? $child : $child->get()
        ), $this->childs
      )
    );
  }

  public function get(
    array $props = []
  ): string {
    $props = implode( " ", [
      ...$this->handlerEvents(),
      ...$this->handlerStyles(),
      ...$this->handlerProps()
    ]);

    return $this->isCloseDom === IsCloseDom::Yes
      ? ( empty($props) !== false 
          ? "<{$this->domType->name} {$props}>{$this->handleChild()}</{$this->domType->name}>" 
          : "<{$this->domType->name}>{$this->handleChild()}</{$this->domType->name}>"
        )
      : ( empty($props) !== false 
          ? "<{$this->domType->name} {$props} />" 
          : "<{$this->domType->name} />"
        );
  }
}