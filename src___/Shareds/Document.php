<?php

namespace Websyspro\Elements\Shareds;

use Websyspro\Commons\Collection;
use Websyspro\Elements\Shareds\Abstract\Dom;

class Document
{
  public static function create(
    array $childs = []
  ): void {  
    $collection = new Collection( $childs );
    $collection = $collection->mapper(
      fn( Dom $child ) => $child->get() 
    );

    print $collection->joinNotSpace();
  }  
}