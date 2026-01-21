<?php

namespace Websyspro\Elements\Shareds\Abstract;

use ReflectionClass;

abstract class Component extends Dom
{
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

  public function init(
  ): void {}
}