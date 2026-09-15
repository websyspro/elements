<?php

namespace Websyspro\Elements\Abstracts;

abstract class Component 
extends Dom
{
  private function handlerStaticFiles(
  ): void {}

  public function get(
  ): string {
    $this->handlerStaticFiles();
    return parent::get();
  }
}