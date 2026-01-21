<?php

namespace Websyspro\Elements\Shareds\Abstract;

use ReflectionClass;

class Component extends Dom
{
  public function __construct(
    array $childs = [],
    array $events = [],
    array $styles = [],
    array $props  = []
  ){
    parent::__construct(
      $childs,
      $events,
      $styles,
      $props
    );
  }

  private function basePath(
    string $filename
  ): string {
    $reflectClass = new ReflectionClass(
      $this
    );

    return implode(
      DIRECTORY_SEPARATOR,
      [ 
        dirname(
          $reflectClass->getFileName()
        ), $filename
      ]
    );
  }
}