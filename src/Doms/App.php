<?php

namespace Websyspro\Elements\Doms;

use Websyspro\Elements\Abstracts\Dom;

class App
extends Dom
{
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
    return $this->handleChild();
  }
}