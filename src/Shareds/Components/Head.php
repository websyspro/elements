<?php

namespace Websyspro\Elements\Shareds\Components;

use Websyspro\Elements\Shareds\Abstract\Component;
use Websyspro\Elements\Shareds\Enums\HtmlTag;
use Websyspro\Commons\Util;
use Websyspro\Elements\Shareds\Abstract\Dom;

class Head extends Component
{
  public static array $childsStatics = [];
  public HtmlTag $htmlTag = HtmlTag::HEAD;

  public static function addChildStatic(
    array $childs
  ): void {
    Head::$childsStatics = array_merge(
      Head::$childsStatics, $childs
    );
  } 

  public function childList(
  ): string {
    return $this->childs->merge(
      Head::$childsStatics
    )->mapper( fn( Dom|string $child ) => (
      Util::isString( $child ) 
        ? $child : $child->get()
    )
    )->joinNotSpace();
  }
}